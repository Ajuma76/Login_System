<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Login and Registration</title>
    <link rel="stylesheet" href="BOOTSTRAP/css/bootstrap.css">
    <link rel="stylesheet" href="stye.css">
</head>
<body>
<div class="container">
    <div class="login-box"></div>
    <div class="row">
        <div class="col-md-6 login-left">
            <h1 class="text-white">Log In Here</h1>
            <form action="validation.php" method="post">
                <div class="form-group">
                    <label class="text-white">Username:</label>
                    <input type="text" name="user" class="form-control" required>
                </div>
                <div class="form-group">
                    <label class="text-white">Password:</label>
                    <input type="password" name="password" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary">Log In</button>
            </form>
        </div>
        <div class="col-md-6 login-right">
            <h1 class="text-white">Register Here</h1>
            <form action="register.php" method="post">
                <div class="form-group">
                    <label class="text-white">Username:</label>
                    <input type="text" name="user" class="form-control" required>
                </div>
                <div class="form-group">
                    <label class="text-white">Password:</label>
                    <input type="password" name="password" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary">Register</button>
            </form>
        </div>
        </div>
    </div>
</div>
</body>
</html>