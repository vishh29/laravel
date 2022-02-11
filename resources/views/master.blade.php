<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Comm</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>

<body>
    {{View::make('header')}}
    @yield('content')
    {{View::make('footer')}}

</body>
<style>
    * {
        margin: 0;
        padding: 0;

    }

    html {
        font-size: 62.5%;
        height: 100%;
    }

    .navbar-custom {
        margin: 0;
    }

    .carousel-inner,
    .trending-item,
    .search-div a {
        list-style: none;
        text-decoration: none;
        color: #000;
    }

    .footer {
        margin-bottom: 0;
        position: fixed;
        left: 0;
        bottom: 0;
        width: 100%;
        text-align: center;
        background-color: #808080c9;
        padding: 2rem;

    }

    .custom-login {
        height: 80vh;
        padding: 20rem 0;
    }

    img.slider-img {
        height: 40rem !important;
    }

    .carousel-caption {
        background: #9f9f9f7d;
    }

    .trending-div {
        display: flex;
        flex-direction: row;
        justify-content: space-between;

    }

    .trending-item {
        display: flex;
        justify-content: center;
        align-items: center;
        text-align: center;
    }

    .trending-products-img {
        max-width: 20rem;
        max-height: 20rem;
    }

    .trending-wrapper,
    .search-wrapper {
        margin: 2rem;
        padding: 2rem;

    }

    .trending-wrapper h1 {
        margin-bottom: 5rem;
        text-align: center;
    }

    .detail-img {
        height: 30rem;
        width: 50rem;
        margin: 10rem 0;
    }

    .search-details {
        width: 20rem !important;
    }

    .search-details p {
        text-overflow: ellipsis;
        white-space: nowrap;
        overflow: hidden;
    }

    .search-wrapper {
        margin: 5rem;
    }

    .search-item {
        margin: 5rem;
    }

    .cart-list-devider {
        border-bottom: 1px solid #ccc;
        padding: 2rem;

    }

    .custom-product {
        margin-bottom: 3rem;
    }
</style>

</html>