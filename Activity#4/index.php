<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Exercises 3</title>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

</head>
<style>
  .form {
    margin: 50px;
    border-style: solid #b481ee;
    border-radius: 10px;
    padding: 50px;
    background-color: #b481ee;
  }

  input {
    margin: 5px;
  }

  .error {
    color: red;
  }

  .SignInButton {
    background-color: #730beb;
    color: white;
  }

  .SignInButton:hover {
    background-color: white;
    color: #730beb;
  }
</style>

<body>
  <div class="container my-5">
    <form class="form" action="home.php" method="post">
      <h4 class="mb-5">Registration Form</h4>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="fname">Firstname</label>
          <input type="text" class="form-control" name="fname" placeholder="Firstname">
        </div>
        <div class="form-group col-md-6">
          <label for="lname">Lastname</label>
          <input type="text" class="form-control" name="lname" placeholder="Lastname">
        </div>
      </div>
      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" name="email" placeholder="email@example">
      </div>
      <div class="form-group">
        <label for="address">Address</label>
        <input type="text" class="form-control" name="address" placeholder="Apartment, studio, or floor">
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" name="password" class="form-control" aria-describedby="passwordHelpBlock"
          placeholder="Pasword">
        <small id="inputAddress" class="form-text text-muted">
          Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces,
          special
          characters, or emoji.
        </small>
      </div>
      <button type="submit" class="btn btn-primary">Sign in</button>
    </form>
  </div>
</body>

</html>