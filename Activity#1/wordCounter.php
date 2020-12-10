<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Word Counter</title>
</head>
<body>
    <?php
     //#3 Word Counter
     function countWords($str){
        echo "<b>Word Count</b><br>";
        echo "$str<br>";
        $str = explode(" ", $str);
        $store = [];
        $output = [];
        foreach ($str as $key) {
            $el = strtolower($key);
            if(in_array($el, $store)){
              continue;
            }
            else{
                array_push($store, $el);
              continue;
            }
        }
        foreach ($store as $value) {
            array_push($output, $value);
            $count = 0;
            foreach($str as $val){
                $el = strtolower($val);
                if($value === $el){
                    $count++;
                }
            }
            array_push($output, $count);
        }
        foreach($output as $out){
            echo $out;
            echo '<br>';
        }
    }
    countWords('Weve got a pool going in the office. Justin leaned across the pool and cupped a hand under the stream of water. Most of the time Im at the pool or resting in the air conditioned house. It flopped into something moist, and the general fell from his horse in a pool of blood.');
    ?>
</body>
</html>