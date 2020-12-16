<?php
include('test.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation with PHP Database</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<style>

</style>

<body>
    <div class="container">
        <form action="data.php" method="post" class="border border-dark rounded m-5 p-3 mw-100">
            <p class="h1 font-weight-bold text-center mt-3">Registration Form</p>
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <div class="form-group">
                <div class="row">
                    <div class="col-sm">
                        <label for="fname">Firstname:</label>
                        <input type="text" name="fname" class="form-control" value="<?php echo $firstname; ?>">
                    </div>
                    <div class="col-sm">
                        <label for="lname">Lastname:</label>
                        <input type="text" name="lname" class="form-control" value="<?php echo $lastname; ?>">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="email">Email Address:</label>
                <input type="email" name="email" class="form-control" value="<?php echo $email; ?>">
            </div>
            <div class="form-group">
                <label for="address">Address:</label>
                <input type="text" name="address" class="form-control" value="<?php echo $address; ?>">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control" value="<?php echo $password; ?>">
            </div>
            <div class="form-group">
                <input type="submit" name="submit" value="Submit" class="btn btn-success border border-dark">
            </div>
        </form>

    </div>
</body>

</html>