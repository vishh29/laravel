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
        box-sizing: border-box;
    }

    html {
        font-size: 62.5%;
    }

    .carousel-inner a {
        list-style: none;
        text-decoration: none;
    }

    .panel-default {
        margin-bottom: 0;
    }

    .custom-login {
        height: 80vh;
        padding: 20rem 0;
    }

    img.slider-img {
        height: 48rem !important;
    }

    .carousel-caption {
        background: #9f9f9f7d;
    }

    .trending-item {
        float: left;
        width: 16%;
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
    }

    .trending-products-img {
        height: 10rem;
    }

    .trending-wrapper {
        margin: 2rem;
        /* padding: 2rem; */
    }

    .trending-wrapper h1 {
        margin-bottom: 5rem;
    }

    .detail-img{
        height: 20rem;
    }
</style>

</html>