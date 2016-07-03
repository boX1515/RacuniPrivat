<?php
session_start();
if(isset($_SESSION['userId']))
    {
        header('location:info.php');
    }
?>



<!DOCTPYE html>
<html>
    <head>
        <title>Login</title>
        <meta charset="utf-8"/>
        <link rel="stylesheet" type="text/css" href="css/style.css"/>
    </head>
    <body class="login_body">
        <div class="login_div_form">
            <label class="login_title">Login</label>
            <form class="login_form" method="post" action="php/login.php?a=login">
                <div class="login_seperator">
                    <label class="login_label">Username:</label>
                    <input type="text" class="login_input_text" name="un">
                </div>
                <div class="login_seperator">
                    <label class="login_label">Password:</label>
                    <input type="password" class="login_input_text" name="pw">
                </div>
                
                <input type="submit" value="Submit" class="login_submit" >
            </form>
        </div>
    </body>
    <footer>
        <div>
        </div>
    </footer>
</html>