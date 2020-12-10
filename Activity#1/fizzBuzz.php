<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>Fizz Buzz</title>
</head>
<body>
    <?php
      //#4 FizzBuzz
      for ($ndx= 1;$ndx < 100; $ndx++){
        if($ndx%3 == 0 && $ndx%5 ==0){
          echo "FizzBuzz<br>";
        }
        if($ndx%3 == 0){
          echo "Fizz<br>";
        }
        if($ndx%5 == 0){
          echo "Buzz<br>";
        }
      }
    ?>
</body>
</html>