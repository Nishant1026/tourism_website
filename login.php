<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="signup.css">
</head>
<body>
    <div class="containter">
    <div class="form-box">

        <form action="" name="Formfill" onsubmit="return validation()">

            <h2>Login In</h2>
            <p id="result"></p>
            
            <div class="input-box">
                <i class='bx bxs-envelope'></i>
                <input type="email" name="Email" placeholder="Email">
            </div><div class="input-box">
                <i class='bx bxs-lock-alt'></i>
                <input type="password" name="Password" placeholder="Password">
            
            <div class="button">
                <input type="submit" class="btn" onclick="validation()" value="Login">
            </div>
            </div>
        </form>
    </div>
</body>
</html>