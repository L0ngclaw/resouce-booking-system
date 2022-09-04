<html>
 
<head>
    <title>College Resource Booking</title>
    <link rel="stylesheet" type="text/css" href="styles/styles.css">
    <link rel="stylesheet" type="text/css" href="styles/science_lab.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
    <script src="js/myScript.js"></script>
</head>
 
<body>
    
<?php include("header.php"); ?>
 
        <!-- ----------------------------------------------------------- -->
 
        <div class="main-div" >
            <!-- style="display:flex; flex-direction: column;" -->
 
            <div class="inner-div">
                <!-- style="display: flex; justify-content: space-around; padding: 40 0;" -->
                <div class="inner-inner-div">
                    <!-- style="border: 1px solid black;" -->
                    <div style="display: flex; justify-content: center;">
                        <h2>Chemestry Lab</h3>
                    </div>
                    <div style="display:flex; justify-content: space-around;">
                        <img src="images/bio lab 1.jpg" width="400px" height="300px" style="margin-top: 20px; margin-bottom: 20px;">
                    </div>
                    <div style="display: flex; justify-content: space-around; margin-bottom: 20px;">
                        <button class="btn" onclick="window.location.href='/rbs/chemistrylab.php'">Reserve</button>
                        <!-- <button class="btn">Time slots</button> -->
                    </div>
                </div>
                <div class="inner-inner-div">
                    <!-- style="border: 1px solid black;" -->
                    <div style="display: flex; justify-content: center;">
                        <h2>Physics Lab</h3>
                    </div>
                    <div style="display:flex; justify-content: space-around;">
                        <img src="images/chem lab 1.png" width="400px" height="300px" style="margin-top: 20px; margin-bottom: 20px;">
                    </div>
                    <div style="display: flex; justify-content: space-around; margin-bottom: 20px;">
                        <button class="btn"  onclick="window.location.href='/rbs/physicslab.php'">Reserve</button>
                        <!-- <button class="btn">Time slots</button> -->
                    </div>
                </div>
                <div class="inner-inner-div">
                    <!-- style="border: 1px solid black;" -->
                    <div style="display: flex; justify-content: center;">
                        <h2>Bio Lab</h3>
                    </div>
                    <div style="display:flex; justify-content: space-around;">
                        <img src="images/chem lab 1.png" width="400px" height="300px" style="margin-top: 20px; margin-bottom: 20px;">
                    </div>
                    <div style="display: flex; justify-content: space-around; margin-bottom: 20px;">
                        <button class="btn" onclick="window.location.href='/rbs/biolab.php'">Reserve</button>
                        <!-- <button class="btn">Time slots</button> -->
                    </div>
                </div>
            </div>

            
        </div>
 
   
 
    <!-- ----------------------------------------------------------- -->
 
    <div >
        <center>
            <!--Start footer-->
            <footer>
                <div class="content-wrap">
                    <h2>Let's Keep in Touch!</h2>
                    <ul class="contact-list">
                        <li><a href="">email : contact@hgc.lk</a></li>
                        <li><a href="" target="_blank">Highgate College Website</a></li>
                        <li><a href="" target="_blank">Facebook</a></li>
                        <li><a href="" target="_blank">LinkedIn</a></li>
                    </ul>
                </div>
            </footer>
            <!--end footer-->
 
        </center>
    </div>
</body>
</html>