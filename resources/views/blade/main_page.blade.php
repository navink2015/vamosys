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
   
</nav>

<div class="container">
<h1 class="text-center">Main</h1>
<p>
Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio ipsam saepe expedita, provident delectus est consequatur voluptatibus nesciunt quod quidem, sit consectetur animi ea, quisquam pariatur impedit enim! Deserunt, nihil.
</p>
</div>



@yield('content')

<p class="container">
Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem ratione amet mollitia odit repellat cumque dolore suscipit, repudiandae debitis facere praesentium deleniti, adipisci dolores fuga, architecto et quibusdam animi iure.
</p>

</body>
</html>