<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title>Results</title>

    <style>
        .header{
            text-align: center;
            margin-top:15%;
        }
        .bmi{
            text-align:center;
            font-size: 100% ;
            font-family: arial;
        }
    </style>
</head>
<body>
    <center>
    <div class="container">
        <?php
            if (isset($_POST['computeButton'])){
                echo "<h2 class='h3 mb-4 font-weight-normal header'>Your BMI Result</h2>";
                $height = $_POST['height'];
                $weight = $_POST['weight'];
                $heightinM= $height /100;
                $height= $heightinM * $heightinM;
                $bmi = $weight/$height;
                
                if ($bmi < 18.5){
                    echo "<p class='bmi'> Your BMI is " . $bmi . " <br>You are Under weight  <br> You need to eat more!   </p>";
                }elseif($bmi >= 18.5 && $bmi <= 24.9){
                    echo "<p class='bmi'> Your BMI is " . $bmi ."<br>Congratulations!! <br> You are Normal </p>";
                }elseif($bmi >= 25 && $bmi <= 29.9){
                    echo "<p class='bmi'> Your BMI is " . $bmi . " <br>You are Over weight  <br> You need to have a diet!   </p>";
                }elseif($bmi > 30){
                    echo "<p class='bmi'> Your BMI is " . $bmi . " <br>You are OBESE <br> You need to have a diet!   </p>";
                }
            }
        ?>
            <form action="index.php">
                <button class=" btn btn-info callbackButton">Calculate Again</button>
            </form>
    </div>
    </center>
</body>
</html>