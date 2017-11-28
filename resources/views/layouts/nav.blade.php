
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue-grey.css">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://www.w3schools.com/lib/w3.js"></script>
</head>
<style>
    html, body {min-height: 100%;}
</style>
<nav class="navbar navbar-default navbar-fixed-top">
<!-- Navbar -->p
<div class="w3-top  w3-margin-bottom" id="Navbar">
    <div class="w3-bar w3-white w3-wide w3-padding w3-card-2">
        <a href="{{ url('/') }}" class="w3-left w3-bar-item w3-button"><img src="ManageIT.jpg" height="35px" width="35px" alt="ITManage"/></a>
        <meta charset="UTF-8">
        <div class="w3-display-middle">
            <a href="" class="w3-bar-item w3-button">About</a>

            <a href="contact.html" class="w3-bar-item w3-button">Contact</a>
            <a href="{{ route('home') }}" class="w3-bar-item w3-button">Profile</a>
            <a href="carousel.blade.php" class="w3-bar-item w3-button">Carousel Example</a>
        </div>
        <a href="{{ route('login') }}" class="w3-border-left w3-bar-item w3-button w3-display-right"><b>LOGIN</b></a>
    </div>
</div>
</nav>

</html>