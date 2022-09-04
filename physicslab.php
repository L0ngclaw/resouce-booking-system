<!DOCTYPE html>
<html lang="en">
<head>
<title>College Resource Booking</title>
    <link rel="stylesheet" type="text/css" href="styles/styles.css">
    <link rel="stylesheet" type="text/css" href="styles/science_lab.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
    <script src="js/myScript.js"></script>
    <script src="js/science_lab.js"></script>
</head>
 
<body>
    
    <?php include("header.php"); ?>

    <button id="reservebtn" class="btn-1" style="display: block;" onclick="displayForm()">Reserve</button>
    <button id="cancelbtn" class="btn-2" style="display: none;" onclick="cancelForm()">Cancel</button>

    <div id="hiddenForm" style="display: none;">
        <!-- create form -->
        <div style="display: flex; justify-content:space-around">
            <form action="submit_science_labs.php" method="POST">
                <input type="hidden" value="physics" name="type">

                <label> Teacher Id: </label>
                <input type="number" name="teacherId" placeholder="Teacher Id" required><br><br>

                <label> Date:</label>
                <input type="date" name="date"><br><br>

                <label>Start time:</label>
                <input type="time" name="stime" placeholder="Start time" required><br><br>

                <label>End time:</label>
                <input type="time" name="etime" placeholder="End time" required><br><br>

                <button class="btn-1" type="submit" name="physics-btn">Submit</button>
            </form>
        </div>
    </div>


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