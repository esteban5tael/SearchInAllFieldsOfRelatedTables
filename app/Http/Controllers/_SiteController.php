<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\View\View;

class _SiteController extends Controller
{
    // Controller method for the index page
    public function index(): View
    {
        $message = ""; // Initializing an empty message variable
        $search = request('search'); // Retrieving the search term from the request

        // Query to search for products and related categories or users based on the search term
        $products = Product::query()
            ->where(function ($query) use ($search) {
                $query->where('name', 'LIKE', "%{$search}%")
                    ->orWhere('description', 'LIKE', "%{$search}%")
                    ->orWhere('price', 'LIKE', "%{$search}%")
                    ->orWhereHas('category', function ($query) use ($search) {
                        $query->where('name', 'LIKE', "%{$search}%")
                            ->orWhere('description', 'LIKE', "%{$search}%");
                    })
                    ->orWhereHas('user', function ($query) use ($search) {
                        $query->where('name', 'LIKE', "%{$search}%")
                            ->orWhere('email', 'LIKE', "%{$search}%");
                    });
            })
            ->orderBy('id', 'desc') // Ordering the results by ID in descending order
            ->simplePaginate(3); // Paginating the results with a limit of 3 items per page

        // Checking if a search term was provided
        if ($search) {
            // Setting a message based on the search results
            $message = $products->count() > 0 ? "Found: " . $products->count() . " records." : "No data found in the database.";
        }

        // Returning the view with products and message
        return view('index', compact('products', 'message'));
    }
}
