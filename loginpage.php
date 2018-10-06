        <?php
          session_start();
        ?>
        
        
        
        <!DOCTYPE html>
        <html>
        <head>
        <meta charset="UTF-8">
        <title> title of the documents</title>
        <link rel = "stylesheet" type="test/css" href="style.css">
        </head>
        <body>

        <form action="login.php" method="POST">
            <input type="text" name="uid" placeholder="username"><br>
            <input type="password" name="pwd" placeholder="password"><br>
            <button type="submit">LOGIN</button>
            </form>

            <?php
               if(isset($_SESSION['id'])){
                   echo $_SESSION['id'];
               }else{
echo "You are not logged in";

               }
               ?>
    <br>
    <br>
    <br>


        <form action="signup.php" method="POST">
        <input type="text" name="first" placeholder="Firstname"><br>
        <input type="text" name="last" placeholder="lastname"><br>
        <input type="text" name="uid" placeholder="username"><br>
        <input type="text" name="pwd" placeholder="password"><br>
        <button type="submit">SIGN UP</button>
        </form>


        </body>
        </html>