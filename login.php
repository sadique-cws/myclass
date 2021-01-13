<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login-page</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-info">
        <div class="container">
            <div class="navbar-brand"><b>Login-page</b></div>

            <ul class="navbar-nav">
                <li class="nav-item"><a href="" class="nav-link" style="color: red;">Loguot</a></li>
            </ul>
        </div>
    </nav>  

    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-header">
                        <h3 style="text-align: center;">Login your account.</h3>
                    
                        <div class="card-body">
                                <form action="login.php" method="post">
                                    <div class="mb-3">
                                        <label for="">User_name:</label>
                                        <input type="email" name="user_name" placeholder="Enter your email_id." class="w-100"> 
                                    </div>

                                    <div class="mb-3">
                                        <label for="">Password:</label>
                                        <input type="text" name="password" placeholder="Enter password." class="w-100">
                                    </div>
                                    <div class="mb">
                                        <input type="submit" name="login" value="Login" class="btn btn-success w-100">
                                    </div>
                                </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>