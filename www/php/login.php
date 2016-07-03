<?php 
    session_start();
    $MySQL_server = "sql7.freemysqlhosting.net";
    $MySQL_User = "sql7125471";
    $MySQL_Password = "bEeF9t5YrU";
    $MySQL_Database = "sql7125471";

    /*$MySQL_server = "localhost";
    $MySQL_User = "zan";
    $MySQL_Password = "123";
    $MySQL_Database = "racuni";*/
    $con = mysqli_connect($MySQL_server,$MySQL_User,$MySQL_Password,$MySQL_Database);
    if(!$con)
    {
        die("Connection failed to SQL: " .mysqli_connection_erro());
    }
    
    if(isset($_GET["a"]))
    {
        if($_GET["a"] === "login")
        {
            $pw = $_POST['pw']; 
            $user = $_POST['un'];
            $user = mysqli_real_escape_string($con,$user);
            $pw = mysqli_real_escape_string($con,$pw);
            $result = mysqli_query($con,"SELECT * FROM users WHERE username='$user'");
            /*if (!$result) {
                printf("Error: %s\n", mysqli_error($con));
                exit();
            }*/
            $row = mysqli_fetch_array($result);
            
            $hashedPw = hash("md5",$pw);
            if($hashedPw == $row["password"])
            {
                if($user == $row['username'])
                {
                    $_SESSION['userId'] == $user;
                    mysqli_close($con);
                    header('location:../info.php');
                }
            }
            else
            {
                mysqli_close($con);
                //header('location:../index.php');
            }
            

        }
        else if($_GET["a"] === "odjava")
        {
            session_destroy(); 
            header('location:../index.php');
        }
        
    
    } 
?>