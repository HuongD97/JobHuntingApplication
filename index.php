<!doctype html>
<html lang="en">
    <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Hello, world!</title>
    <style>
        .debug {
            border-style: solid;
            border-width: 1px;
            border-color: magenta;
        }
        .debug2 {
            border-style: dotted;
            border-width: 1px;
            border-color:cyan;
        }
        .vertical-center {
            min-height: 100%;  /* Fallback for browsers do NOT support vh unit */
            min-height: 100vh; /* These two lines are counted as one :-)       */

            display: flex;
            align-items: center;
        }
    </style>
    </head>
    <body class="vertical-center">
    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <form action="login.php" method="post">
                    <div class="form-group">
                        <label for="emailInput"><b>Email</b></label>
                        <input type="email" class="form-control" id="emailInput" name="email"
                        placeholder="Enter your email" onkeyup="validate(this)">
                        <small id="emailError" class="text-danger"></small>
                    </div>
                    <div class="form-group">
                        <label for="passwordInput"><b>Password</b></label>
                        <input type="password" class="form-control" id="passwordInput" name="password"
                        placeholder="Enter your password" onkeyup="validate(this)">
                        <small id="passwordError" class="text-danger"></small>
                    </div>
                    <button type="submit" id="login" class="btn btn-secondary" disabled>Login</button>
                </form>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>

    <!-- Login Validation-->
    <script type="text/javascript" src="login.js"></script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>