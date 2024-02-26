<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
    <link rel="shortcut icon" href="../Assets/Images/favicon.jpeg" type="image/x-icon">
    <link rel="stylesheet" href="../Assets/css/login.css">
</head>

<body>
    <div class="main">
        <div class="form">
            <h1><b>Welcome, Humanshu Jaglan</b></h1>
            <form method="post">
                <div class="logcont">
                    <label for="email">Email Id</label>
                    <input type="email" name="email" id="email">
                </div>
                <div class="logcont">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password">
                </div>
                <div class="logcont">
                    <button type="submit" name="submit">Sign In</button>
                </div>
            </form>
        </div>
        <?php
        if (isset($_POST))
        ?>

    </div>
</body>

</html>