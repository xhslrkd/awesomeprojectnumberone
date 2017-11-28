@extends('layouts.app')

@section('content')
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue-grey.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://www.w3schools.com/lib/w3.js"></script>
<style>
    html,body,h1,h2,h3,h4,h5 {font-family: "Open Sans", sans-serif}
</style>
<body class="w3-theme-l5">

<!-- Page Container -->
<div class="w3-container w3-content" style="max-width:1400px;margin-top:80px">

    <div class="w3-container w3-center">
        <h1>Profile</h1>
    </div>
    <!-- The Grid -->
    <div class="w3-row">
        <!-- Left Column -->
        <div class="w3-col m3">
            <!-- Profile -->

            <div class="w3-card-2 w3-round w3-white">

                <div class="w3-container">
                    @if(Auth::check())
                    <h4 class="w3-center">'asdas'</h4>
                    @endif
                    <p class="w3-center"><img src="http://www.lovemarks.com/wp-content/uploads/profile-avatars/default-avatar-space-astronaut.png" class="w3-circle" style="height:106px;width:106px" alt="Avatar"></p>
                    <hr>
                    <p><a href="profileEdit.html"><i class= "fa-fw w3-margin-right w3-text-theme"></i>Edit profile
                        </a></p>
                    <p><i class="w3-margin-right w3-text-theme"></i> option2</p>
                    <p><i class="fa-fw w3-margin-right w3-text-theme"></i> option3</p>
                </div>
            </div>
            <br>

            <!-- Accordion -->
            <div class="w3-card-2 w3-round">
                <div class="w3-white">
                    <button onclick="myFunction('Demo1')" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-circle-o-notch fa-fw w3-margin-right"></i> modal1</button>
                    <div id="Demo1" class="w3-hide w3-container">
                        <p>Some text..</p>
                    </div>
                    <button onclick="myFunction('Demo2')" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-circle-o-notch fa-fw w3-margin-right"></i> modal2</button>
                    <div id="Demo2" class="w3-hide w3-container">
                        <p>Some other text..</p>
                    </div>
                    <button onclick="myFunction('Demo3')" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-circle-o-notch fa-fw w3-margin-right"></i>modal3</button>
                    <div id="Demo3" class="w3-hide w3-container">
                        <p>Some other text..</p>
                    </div>
                </div>
            </div>
            <br>

            <!-- Interests -->
            <div class="w3-card-2 w3-round w3-white w3-hide-small">
                <div class="w3-container">

                    <p>Interests</p>
                    <p>
                        <input id="interest1" type="text" class="form-control" name="interest1" value="{{ old('interest1') }}"required autofocus>
                        <span class="w3-tag w3-small w3-theme-d5"></span>
                        <input id="interest2" type="text" class="form-control" name="interest2" value="{{ old('interest2') }}"required autofocus>
                        <span class="w3-tag w3-small w3-theme-d4">bathroom</span>
                        <input id="interest3" type="text" class="form-control" name="interest3" value="{{ old('interest3') }}"required autofocus>
                        <span class="w3-tag w3-small w3-theme-d3">condo</span>
                        <input id="interest4" type="text" class="form-control" name="interest4" value="{{ old('interest4') }}"required autofocus>
                        <span class="w3-tag w3-small w3-theme-d2">tiles</span>
                        <input id="interest5" type="text" class="form-control" name="interest5" value="{{ old('interest5') }}"required autofocus>
                        <span class="w3-tag w3-small w3-theme-d1">carpet</span>
                        <input id="interest6" type="text" class="form-control" name="interest6" value="{{ old('interest6') }}"required autofocus>
                        <span class="w3-tag w3-small w3-theme">apt</span>

                        <span class="w3-tag w3-small w3-theme-l1">landscaping</span>
                    </p>
                </div>
            </div>
            <br>

            <!-- Alert Box -->
            <div class="w3-container w3-display-container w3-round w3-theme-l4 w3-border w3-theme-border w3-margin-bottom w3-hide-small">
        <span onclick="this.parentElement.style.display='none'" class="w3-button w3-theme-l3 w3-display-topright">
          <i class="fa fa-remove"></i>
        </span>
                <p><strong>Hey!</strong></p>
                <p>Quintin sent friend request</p>
            </div>

            <!-- End Left Column -->
        </div>

        <!-- Middle Column -->
        <div class="w3-col m7">

            <div class="w3-container w3-card-2 w3-white w3-round w3-margin"><br>
                <img src= alt="sell" class="w3-left w3-circle w3-margin-right" style="width:60px">
                <span class="w3-right w3-opacity">1 min</span>
                <h4>Xinyi</h4><br>
                <hr class="w3-clear">
                <p>condo renovation</p>
                <div class="w3-row-padding" style="margin:0 -16px">
                    <div class="w3-half">
                        <img src="http://ei.marketwatch.com//Multimedia/2016/11/04/Photos/ZH/MW-EZ493_miami__20161104120841_ZH.jpg?uuid=f41fe4c4-a2a8-11e6-ac14-001cc448aede" style="width:100%" alt="condo1" class="w3-margin-bottom">
                    </div>
                    <div class="w3-half">
                        <img src="http://www.miamicondoinvestments.com/wp-content/uploads/2017/06/villa-regina-lower-penthouse-condo-768x513.jpg" style="width:100%" alt="condo2" class="w3-margin-bottom">
                    </div>
                </div>
                <button type="button" class="w3-button w3-theme-d1 w3-margin-bottom"><i class="fa fa-check"></i>  accept</button>
                <button type="button" class="w3-button w3-theme-d2 w3-margin-bottom"><i class="fa fa-remove"></i>  reject</button>
            </div>

            <div class="w3-container w3-card-2 w3-white w3-round w3-margin"><br>
                <img src= alt="buy" class="w3-left w3-circle w3-margin-right" style="width:60px">
                <span class="w3-right w3-opacity">13 min</span>
                <h4>James</h4><br>
                <hr class="w3-clear">
                <p>best deal of a lifetime</p>
                <button type="button" class="w3-button w3-theme-d1 w3-margin-bottom"><i class="fa fa-check"></i>  accept</button>
                <button type="button" class="w3-button w3-theme-d2 w3-margin-bottom"><i class="fa fa-remove"></i>  reject</button>
            </div>
            <!-- End Middle Column -->
        </div>

        <!-- Right Column -->
        <div class="w3-col m2">
            <div class="w3-card-2 w3-round w3-white w3-center">
                <div class="w3-container">
                    <p>notification</p>
                    <p><strong>bid</strong></p>
                    <p>Friday 15:00</p>
                    <p><button class="w3-button w3-block w3-theme-l4 fa fa-arrow-right"></button></p>
                </div>
            </div>
            <br>


            <div class="w3-card-2 w3-round w3-white w3-padding-16 w3-center">
                <p>shopping cart</p>
            </div>
            <br>

            <div class="w3-card-2 w3-round w3-white w3-padding-32 w3-center">
                <p><i class="fa fa-bug w3-xxlarge"></i></p>
            </div>

            <!-- End Right Column -->
        </div>

        <!-- End Grid -->
    </div>

    <footer class="w3-container">
        <p class="w3-right w3-text-grey">&copy; 2017 {{ config('app.name', 'Laravel') }}. All rights reserved.</p>
    </footer>
    <!-- End Page Container -->
</div>
<br>


<script>
    w3.includeHTML();
    // Accordion
    function myFunction(id) {
        var x = document.getElementById(id);
        if (x.className.indexOf("w3-show") == -1) {
            x.className += " w3-show";
            x.previousElementSibling.className += " w3-theme-d1";
        } else {
            x.className = x.className.replace("w3-show", "");
            x.previousElementSibling.className =
                x.previousElementSibling.className.replace(" w3-theme-d1", "");
        }
    }
    // Used to toggle the menu on smaller screens when clicking on the menu button
    function openNav() {
        var x = document.getElementById("navDemo");
        if (x.className.indexOf("w3-show") == -1) {
            x.className += " w3-show";
        } else {
            x.className = x.className.replace(" w3-show", "");
        }
    }
</script>

</body>
@endsection
