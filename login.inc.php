<?php
session_start();
    require "database.inc.php";

    if($conn){
        $email=$_POST["email"];
        $password=md5($_POST["pass1"]);
        $login=$_POST["mySubmit"];

        if(isset($login)){
            $sql="SELECT * FROM `users` WHERE email=? AND pass=?";
            $stmt=mysqli_stmt_init($conn);

            if(!mysqli_stmt_prepare($stmt,$sql)){
                die("Sql statement failed");
            }
            else{
                mysqli_stmt_bind_param($stmt,"ss",$email,$password);
                mysqli_stmt_execute($stmt);
                $result=mysqli_stmt_get_result($stmt);
                while($row=mysqli_fetch_assoc($result)){
                    $_SESSION['name']=$row['email'];
                    $name=$_SESSION["name"];
                    if($row["rank"]===1){
                       echo "Logged in as Admin:".$name;
                    }else if($row["rank"]===2){
                        echo "Logged in as Hotel Manager:".$name;
                    }else{

			echo "Logged in as N.G.O:".$name;
		        }
                }
            }
        }
    }