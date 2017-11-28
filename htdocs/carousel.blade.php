<!DOCTYPE html>
<html>
<title>ITmanager</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue-grey.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://www.w3schools.com/lib/w3.js"></script>
<style>
    html,body,h1,h2,h3,h4,h5 {font-family: "Open Sans", sans-serif}
</style>
<body class="w3-theme-l5">

<div w3-include-html="Nav.html"></div>

<!-- Page Container -->
<div class="w3-container w3-content" style="max-width:1400px;margin-top:80px">

    <div class="w3-container w3-center">
        <h1>Carousel</h1>
    </div>
    <!-- The Grid -->
    <div class="w3-row">
        <!-- Left Column -->
        <div class="w3-col m3">
            <!-- Profile -->

            <!-- End Left Column -->
        </div>

        <!-- Middle Column -->
        <div class="w3-col m7">
            <div id="myCarousel" class="carousel slide w3-middle" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="item active">
                        <img src="../public/img/ManageIT.jpg" alt="Logo" style="width:100%;">
                    </div>

                    <div class="item">
                        <img src="../public/img/team.png" alt="" style="width:100%;">
                    </div>

                    <div class="item">
                        <img src="../public/img/ManageIT.jpg" alt="New york" style="width:100%;">
                    </div>
                </div>

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
            <!-- End Middle Column -->
        </div>

        <!-- Right Column -->
        <div class="w3-col m2">

            <!-- End Right Column -->
        </div>

        <!-- End Grid -->
    </div>
    <footer class="w3-container">
        <p class="w3-right w3-text-grey">&copy; 2017 Property Smart. All rights reserved.</p>
    </footer>
    <!-- End Page Container -->
</div>
<br>



<script>
    w3.includeHTML();

</script>

</body>
</html>