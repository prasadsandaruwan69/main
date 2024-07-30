@extends('layouts.sidebar')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CakeCraze</title>
    <!-- Include Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f9fa;
            color: #343a40;
        }

        .navbar {
            position: fixed;
            width: 100%;
            z-index: 1000;
            background-color: #343a40;
            padding: 10px 20px;
            height: 60px;
        }

        .navbar .container-fluid {
            display: flex;
            align-items: center;
            justify-content: space-between;
            height: 100%;
        }

        .navbar .navbar-brand {
            color: #fff;
            text-decoration: none;
            font-size: 24px;
            font-weight: bold;
            display: flex;
            align-items: center;
        }

        .navbar .navbar-brand i {
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

        .nav li a:hover,
        .nav li.active a {
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


.content {
    padding: 20px;
    background-color: #f9f9f9;
}

.home-content {
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    justify-content: space-between;
}

.left-content {
    flex: 0 0 40%; /* Adjust the width of the left image area */
    max-width: 40%;
    padding-right: 20px; /* Add some spacing between image and text */
}

.left-content img {
    margin-top: 15px;
    display: block;
    max-width: 75%;
    height: 500px;
    margin-bottom: 15px;
}

.right-content {
    flex: 0 0 55%; /* Adjust the width of the text area */
    max-width: 55%;
}

.right-content h1 {
    font-size: 2.5rem;
    margin-bottom: 10px;
}

.right-content p {
    font-size: 1.1rem;
    line-height: 1.6;
}

        footer {
            background-color: #343a40;
            color: #fff;
            text-align: center;
            padding: 20px 0;
            position: fixed;
            width: 100%;
            bottom: 0;
        }
    </style>
     @include('includes.head')
</head>
<body>
    <header class="row">
        @include('includes.header')
    </header>

    <section class="content" id="about">
        <div class="home-content">
            <div class="left-content">
                <img src="{{ asset('images/Cake Craze.png') }}" alt="Left Image">
            </div>
            <div class="right-content">
                <h1>
                    <i class="fas fa-cake header-image"></i> About Us
                </h1>
                <p>At CakeCraze, we've been a beloved part of the community for over 20 years.
                    Our dedicated team of experienced bakers crafts each product with care, using the
                     finest ingredients and time-honored recipes. We pride ourselves on our commitment to
                     quality and customer satisfaction, ensuring that every treat we make is a delightful
                     experience.

                </p>
            </div>
        </div>
    </section>

   
        <footer class="row">
            @include('includes.footer')
        </footer>
   
</body>
</html>
