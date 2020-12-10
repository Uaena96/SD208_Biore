<?php
     define("TITLE", "Honest Click Bait Headlines", true);
     if(isset($_POST["submit"])) {
        /* Grab value from textarea is $_POST collection, make all letters lowercase using strtolower() function store in a variable*/
        $clickBait = strtolower($_POST["clickBaitHeadline"]);
        
        //store array of clickbait-sounding words or phrases
        $clickbait_words = array("scientists", "doctors", "hate", "stupid", "weird", "simple", "trick", "shocked me", "you'll never believe", "hack", "epic", "unbelievable");
        
        /* Strore array of replacement words or phrases make sure each replacement is in the same order as the clickbait word you're trying to replace */
        $replacement_words = array("so-called scientists", "so-called doctors", "aren't threatened by", "average", "completeky normal", "ineffective", "method", "is no different than the others", "you won't really be surprised by", "slightly improve", "boring", "normal");
        
        /* Use the str_replace() function to replace the words uppercase the first letter in every word using ucwords() function store in a variable */
        $honestHeadline = str_replace($clickbait_words, $replacement_words, $clickBait);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo TITLE; ?></title>

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

</head>
<body>
    <div class="container">
        <h5><?php echo TITLE; ?></h5>
        <div class="row">
            <form class="col s12" action="" method="post">
                <div class="row">
                    <div class="input-field col s12">
                        <textarea id="textarea1" class="materialize-textarea" name="clickBaitHeadline"></textarea>
                        <label for="textarea1">Click Bait Headline Here</label>
                        <br>
                        <button class="btn waves-effect waves-light" type="submit" name="submit">Submit
                            <!-- <i class="material-icons right">send</i> -->
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <?php
        if(isset($_POST["submit"])) {
            // To uppercase first letter in every word use ucwords() function
            echo "<div class='center-align'>
                     <h4 class='red-text text-darken-2'>Original Headline</h4><h6>".ucwords($clickBait)."</h6><br>
                  </div>";
            //echo the honest headline
            echo "<div class='center-align'>
                    <h4 class='green-text text-darken-2'>Honest Headline</h4><h6>".ucwords($honestHeadline)."</h6>
                </div>";  
        }
    ?>
</body>

</html>