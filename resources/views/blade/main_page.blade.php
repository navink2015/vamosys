<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <!-- <link rel="stylesheet" type="css/text" src="style.css"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
</head>
<body>

<nav class="nav bg-secondary navbar-expand-lg justify-content-center">    
    
        <a href="/" class="nav-link text-light">Home</a>
    
   
        <a href="/contact" class="nav-link text-light">Contact</a>
    
    
        <a href="/about" class="nav-link text-light">About Us</a>

        <a href="/log" class="nav-link text-light">Log In</a>

        <a href="/reg" class="nav-link text-light">Register</a>
   
</nav>
<br>
<br>
    
<div class="text-center" >@yield('content')</div>






@yield('a')
</body>
<script type="text/javascript" src="js/app.js"></script>
</html>