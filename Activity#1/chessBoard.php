<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chess Board</title>
</head>
<body>
    <table width="300px" cellspacing="0px" cellpadding="0px" border="2px" border-style= "solid">
    <?php
     //#2 Chess Board
     echo "<br>";
     echo "<b>Chess Board</b><br><br>";
     for ($row=1;$row<=8;$row++){
       echo"<tr>";
       for($column=1;$column<=8;$column++){
         $total=$row+$column;
         if($total%2==0){
           echo "<td height=35px bgcolor=#FFFFFF></td>";
         }else{
           echo "<td height=35px bgcolor=#000000></td>";
         }
       }
     }
    ?>
</body>
</html>