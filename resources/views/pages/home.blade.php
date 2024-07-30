<!doctype html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('includes.head')
    <!-- Include Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f9fa;
        }
        .navbar {
            position: fixed;
            width: 100%;
            z-index: 1000;
            background-color: #343a40;
            padding: 10px 20px;
        }
        .navbar .container-fluid {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        .navbar-header .navbar-brand {
            color: #fff;
            text-decoration: none;
            font-size: 24px;
            font-weight: bold;
            display: flex;
            align-items: center;
        }
        .navbar-header .navbar-brand i {
            margin-right: 8px;
        }
        .nav {
            list-style-type: none;
            margin: 0;
            padding: 0;
            display: flex;
        }
        .nav li {
            margin: 0 10px;
        }
        .nav li a {
            color: #fff;
            text-decoration: none;
            padding: 14px 35px;
            display: block;
            border-radius: 4px;
            transition: background-color 0.3s;
        }
        .nav li a:hover, .nav li.active a {
            background-color: #495057;
        }

        /* Additional styles for the search form */
.navbar-form.navbar-left {
    display: flex;
    align-items: center;
    margin: 0; /* Remove default margin */
    padding-left: 0; /* Remove default padding */
}

.navbar-form.navbar-left .form-group {
    margin: 0; /* Remove default margin */
}

.navbar-form.navbar-left .form-control {
    width: 200px; /* Adjust width as needed */
    margin-right: 5px; /* Add some space between input and button */
    border-radius: 4px; /* Optional: add border radius for aesthetics */
    border: none; /* Remove default border */
    padding: 8px 10px; /* Adjust padding for better spacing */
    box-shadow: none; /* Remove default shadow */
}

.navbar-form.navbar-left .form-control:focus {
    outline: none; /* Remove default outline */
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.2); /* Add custom shadow on focus */
}

.navbar-form.navbar-left .btn {
    margin-right: 25px;
    background-color: #495057; /* Button background color */
    color: #fff; /* Button text color */
    border: none; /* Remove default border */
    padding: 8px 20px; /* Adjust padding for better spacing */
    border-radius: 4px; /* Add border radius for aesthetics */
    cursor: pointer; /* Change cursor to pointer on hover */
    transition: background-color 0.3s; /* Smooth transition on hover */
}

.navbar-form.navbar-left .btn:hover {
    background: linear-gradient(to right, #ff6f61, #ff8e53);
}

        .hero {
            background-image: url('https://t4.ftcdn.net/jpg/05/87/63/79/240_F_587637938_bnkZxzr0zLQtiva6AZZtLUNWnYvXQgQt.jpg');
            background-size: cover;
            background-position: center;
            color: #fff;
            text-align: center;
            padding: 100px 20px;
        }
        .hero h1 {
            font-size: 50px;
            margin: 0;
        }
        .hero p {
            font-size: 20px;
            margin: 20px 0 40px;
        }
        .btn-primary {
            background-color: #ff6f61;
            color: #fff;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 4px;
            font-size: 18px;
            transition: background-color 0.3s;
        }
        .btn-primary:hover {
            background-color: #ff3f31;
        }
        .featured-products {
            padding: 50px 20px;
            text-align: center;
        }
        .featured-products h2 {
            margin-bottom: 40px;
            font-size: 36px;
            color: #343a40;
        }
        .products {
            text-align: center;
            display: flex;
            justify-content: center;
            gap: 20px;
            flex-wrap: wrap;
        }
        .product {
            justify-content: center;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            max-width: 300px;
            text-align: left;
        }
        .product img {
            width: 100%;
            border-radius: 8px;
        }
        .product h3 {
            text-align: center;
            margin: 10px 0;
            font-size: 24px;
            color: #495057;
        }
        .product p {
            color: #757575;
            margin-bottom: 10px;
            text-align: center;
        }
        .product .btn-secondary {
            background-color: #ff6f61;
            color: #fff;
            padding: 10px 20px;
            text-decoration: none;
            align-items: center;
            display: inline-flex;
            border-radius: 4px;
            font-size: 16px;
            transition: background-color 0.3s;
        }
        .product .btn-secondary:hover {
            background: linear-gradient(to right, #ff6f61, #ff8e53);
        }
       
    </style>
</head>
<body>
    <header class="row">
        @include('includes.header')
    </header>
    <div id="main" class="row">

        @yield('content')
</div>
    <section class="hero">
        <h1>Welcome to CakeCraze</h1>
        <p>Discover our delicious cakes and pastries, crafted with the finest</br>
        ingredients to make every celebration special. Thank you for choosing CakeCraze!

        </p>
        <a href="message" class="btn-primary">Shop Now</a>
    </section>

    <section class="featured-products">
        <h2>Our Featured Products</h2>
        <div class="products">
            <div class="product">
                <img src="{{ asset('images/vanila birthday cake.jpg') }}" alt="Croissant">
                <h3>Vanila Birthday Cake</h3>
                <p>A classic vanilla sponge cake layered with creamy buttercream, perfect for any celebration.</p>
                <a href="message" class="btn-secondary">Buy Now</a>
            </div>
            <div class="product">
                <img src="{{ asset('images/img2.png') }}" alt="Bread">
                <h3>Valentine Cake</h3>
                <p>A romantic delight with rich vanilla layers and luscious strawberry filling, perfect for your special someone.</p>
                <a href="message" class="btn-secondary">Buy Now</a>
            </div>
            <div class="product">
                <img src="{{ asset('images/img4.png') }}" alt="Cake">
                <h3>Birthday Cake</h3>
                <p>A delightful treat with moist layers and rich frosting, perfect for making every birthday special.</p>
                <a href="message" class="btn-secondary">Buy Now</a>
            </div>
            <div class="product">
                <img src="{{ asset('images/ribbencake.jpg') }}" alt="Cake">
                <h3>Ribben Cake</h3>
                <p>A colorful, layered cake with a mix of flavors, beautifully adorned with a ribbon-like swirl of frosting.</p>
                <a href="message" class="btn-secondary">Buy Now</a>
            </div>
            <div class="product">
                <img src="{{ asset('images/milkmaid ribben cake.jpg') }}" alt="Cake">
                <h3>Milkmaid Ribben Cake</h3>
                <p>A deliciously moist and colorful layered cake made with sweetened condensed milk, topped with a luscious ribbon of creamy frosting.

                </p>
                <a href="message" class="btn-secondary">Buy Now</a>
            </div>
            <div class="product">
                <img src="{{ asset('images/img7.png') }}" alt="Cake">
                <h3>Vanilla Strawberry Cake</h3>
                <p>A delightful cake with layers of moist vanilla sponge and fresh strawberry filling, topped with creamy vanilla frosting and juicy strawberries.</p>
                <a href="message" class="btn-secondary">Buy Now</a>
            </div>
        </div>
    </section>

    @extends('layouts.default')
    @section('content')



    <footer class="row">
        @include('includes.footer')
    </footer>
</body>
</html>

