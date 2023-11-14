<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Title -->
    <title>{{ config('app.name') }}</title>

    <!-- Stylesheets -->
    <link rel="stylesheet" href="{{ asset('assets/css/bs5.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bs5i.css') }}">
</head>

<body>

    <!-- Header Section -->
    <header>
        <h3 class="text-center">
            <title>{{ config('app.name') }}</title>
        </h3>
        <nav class="navbar navbar-expand-sm navbar-light bg-light">
            <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                <!-- Index link -->
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('index') }}">Index</a>
                </li>
                <!-- Conditional navigation based on authentication -->
                @if (Route::has('login'))
                    @auth
                        <!-- Dashboard link for authenticated users -->
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('dashboard') }}">Dashboard</a>
                        </li>
                    @else
                        <!-- Login link for non-authenticated users -->
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">Login</a>
                        </li>
                        <!-- Registration link for non-authenticated users -->
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">Register</a>
                            </li>
                        @endif
                    @endauth
                @endif
            </ul>
        </nav>

    </header>
    <!-- Main Section -->
    <main>
        <div class="container">
            <h1 class="text-center">{{ config('app.name') }}</h1>
            
            <!-- Search form -->
            <form action="" method="GET">
                <div class="form-control">
                    <div class="text-center">
                        <div class="input-group m-3">
                            <!-- Input for search -->
                            <input type="text" class="form-control m-1 text-center" placeholder="Search ..."
                                name="search" id="search" value="{{ request('search') }}">
                            <!-- Search button -->
                            <div class="input-group-append">
                                <button class="btn btn-primary m-3" type="submit">Search</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>

            <!-- Table displaying product information -->
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <!-- Table headers -->
                        <tr>
                            <th>User Name</th>
                            <th>User Email</th>
                            <th>Category Name</th>
                            <th>Category Description</th>
                            <th>Product Name</th>
                            <th>Product Description</th>
                            <th>Product Price</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Loop through products to display their information -->
                        @forelse($products as $product)
                            <tr>
                                <!-- Product details -->
                                <td>{{ $product->user->name }}</td>
                                <td>{{ $product->user->email }}</td>
                                <td>{{ $product->category->name }}</td>
                                <td>{{ $product->category->description }}</td>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->description }}</td>
                                <td>{{ $product->price }}</td>
                            </tr>
                        @empty
                            <!-- Display message if no data is available -->
                            <div class="d-flex justify-content-center mt-4 p-2 bg-danger">
                                No Data
                            </div>
                        @endforelse
                    </tbody>
                </table>
                <!-- End of table -->

                <!-- Pagination links -->
                <div class="d-flex justify-content-center mt-4 p-2">
                    {{ $products->links() }}
                </div>
            </div>
        </div>
    </main>

    <!-- Footer Section -->
    <footer class="card text-center m-3">
        <!-- Link to JEBC-Dev YouTube channel -->
        <a href="https://www.youtube.com/@jebcdev" target="_blank">JEBC-Dev</a>
    </footer>

    <!-- JavaScript -->
    <script src="{{ asset('assets/js/bs5.js') }}"></script>
</body>

</html>
