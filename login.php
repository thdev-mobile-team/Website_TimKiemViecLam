<!DOCTYPE html>
<html lang="en">

<head>
    <title>Top Jobs</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>

    <style>
        form {
            max-width: 400px;
            margin: auto;
        }
        body{
            background-color: #C1EBF9;
        }
        body>div>form{
            background-color:#E2DEF5;
            border:1px solid black;
            padding: 30px;
            text-align: center;
            width: 300px;
            height: 150px;
        }
        body>div>form>button{
            color:white;
            background-color: black;
            padding: 5px;
            width: 50px;
        }
        body>div>p{
            font-family: Garamond, serif;
            font-size: 50px;
            text-align: center;
            display: block;
            
        }
        body>div>form>div>input{
            padding: 5px;
            width: 200px;
            
        }

        
    </style>
    <div class="container">
        <p>Login</p>
        <form>
            <div class="form-group">
                <input type="text" class="form-control" id="username" placeholder="Username" name="username">
            </div>
            <br>
            <div class="form-group">
                <input type="password" class="form-control" id="pwd" placeholder="Password" name="pwd">
            </div>
            <br>
            <button onclick="" type="submit" class="btn btn-default" name="signin">Login</button>
            <br><br>
            <a href="regis.php" name="signup">New user? Create an account.</a>
        </form>
    </div>

</body>

</html>