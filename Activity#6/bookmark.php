<?php
    session_start();
?>
<?php
    $bookmarks = (isset($_SESSION['book_mark'])) ? $_SESSION['book_mark'] : array();
    if(isset($_POST['addButton'])){
        if(!empty($_POST['bookmark']) and !empty($_POST['url'])){
        array_push($bookmarks, [$_POST['bookmark'],$_POST['url']]);
        $_SESSION['book_mark'] = $bookmarks;
        }
    }

    if (isset($_POST['clearButton'])){
        $_SESSION['book_mark']  = [];
    }
    if (isset($_POST['x'])){
        array_splice($_SESSION['book_mark'], $_POST['id'],1);
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title>Bookmark</title>
    <style>
        .body{
             margin-top: 15%;
             margin-left: 27%;
        } 
        .header{
             text-align: center;
             margin-left: -35%;
        }
        .addButton{
             margin-left: -35%;
        }
        
        .storedUrl{
            margin-left: -35%;
        }
    </style>
</head>
<body>
    <div class="body">
        <center>
            <div class="container">
                <form action="bookmark.php" method= "POST">
                <h2 class="h3 mb-4 font-weight-normal header">Create Your Bookmark!</h2>
                <div class="form-group row">
                    <label for="bookmark" class="col-sm-2 col-form-label">Bookmark</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" id="bookmark" name= "bookmark"  placeholder="Enter your Bookmark here!">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="url" class="col-sm-2 col-form-label">URL</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" id="url" name= "url"  placeholder="Enter your URL here!">
                    </div>
                </div>
                <br>
                <button type="submit" name="addButton" class="btn btn-info addButton " >Add Bookmark</button> 

                <button type="submit" name="clearButton" class="btn btn-info " >Clear All</button> 

                </form>
                <br>
            <h4 class="h3 mb-4 font-weight-normal header"> Your Bookmarks!</h4>
            <br>
            <?php if(isset($_SESSION['book_mark'])):?>
                <?php for($id= 0; $id < count($_SESSION['book_mark']); $id++):?>    
                    <form  action="bookmark.php" method="POST">
                        <a class=" storedUrl" target="_blank" href="<?php echo $_SESSION['book_mark'][$id][1]?>"><?php echo $_SESSION['book_mark'][$id][0]?></a>
                        <input type="hidden" name ="id" value="<?php  echo $id; ?>">
                        <input class="btn btn-info " name="x" type="submit" value="x">
                    </form> 
                <?php endfor?>
            <?php endif?>
            </div>
        </center>
    </div>
</body>

</html>