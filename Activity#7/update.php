<?php
    include('test.php');
    if (isset($_GET['edit'])){
        $id = $_GET['edit'];
    
        // fetch data to be updated
        $rec = mysqli_query($db, "SELECT * FROM data WHERE id = $id");
        $record = mysqli_fetch_array($rec);
        $firstname = $record['firstname'];
        $lastname = $record['lastname'];
        $email = $record['email'];
        $address = $record['address'];
        $password = $record['password'];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Updated</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" ></script>
</head>
<style>
</style>
</head>
<body>
<div class="container">
        <form action="test.php" method="post" class="border border-dark rounded m-5 p-3 mw-100" >
            <p class="h1 font-weight-bold text-center mt-3">Registration Form</p>
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <div class="form-group">
                <div class="row">
                    <div class="col-sm">
                        <label for="fname">Firstname:</label>
                        <input type="text" name="fname" class="form-control" placeholder="<?php echo $firstname; ?>">
                    </div>
                    <div class="col-sm">
                        <label for="lname">Lastname:</label>
                        <input type="text" name="lname" class="form-control" placeholder="<?php echo $lastname; ?>">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="email">Email Address:</label>
                <input type="email" name="email" class="form-control" placeholder="<?php echo $email; ?>">
            </div>
            <div class="form-group">
                <label for="address">Address:</label>
                <input type="text" name="address" class="form-control" placeholder="<?php echo $address; ?>">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control" placeholder="<?php echo $password; ?>">
            </div>
            <div class="form-group">
                <input type="submit" name="update" value="update" class="btn btn-success border">
            </div>
        </form>

    </div>
</body>
</html>