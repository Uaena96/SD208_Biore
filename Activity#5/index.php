<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title>BMI Calculator</title>
    <style>
      .body{
        margin-top: 15%;
        margin-left: 25%;
      } 
      .header{
        text-align: center;
        margin-left: -40%;
      }
      .computeButton{
        margin-left: -40%;
      }
    </style>
</head>
<body>
    <div class="body">
      <center>
        <div class="container">
          <form action="result.php" method="POST">
            <h2 class="h3 mb-4 font-weight-normal header">Calculate Your Body Mass Index!</h2>
              <div class="form-group row">
                <label for="heightInput" class="col-sm-2 col-form-label">Height(cm)</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" id="heightInput" name= "height" required placeholder="Enter your height here!">
                </div>
              </div>
              <div class="form-group row">
                <label for="weightInput" class="col-sm-2 col-form-label">Weight(kg)</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" id="weightInput" name="weight" required placeholder="Enter your weight here!">
                </div>
              </div>
              <br>
              <button name="computeButton" class="btn btn-info computeButton" >Compute BMI</button>
          </form>
        </div>
      </center>
    </div>
</body>
</html>