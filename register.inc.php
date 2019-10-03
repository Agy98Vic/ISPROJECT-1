<?php 
    error_reporting(false);
    include "database.inc.php";
    if(!$conn){
        die("Connection failed: ".mysqli_connect_error());
    }else{
        $fname=$_POST["fname"];
        $oname=$_POST["oname"];
        $email=$_POST["email"];
        $phone=$_POST["phone"];
	$rank=$_POST["rank"];
        $pass1=md5($_POST["pass1"]);
        $pass2=md5($_POST["pass2"]);
        $submit=$_POST["mySubmit"];

        if(isset($submit)){
            $password_checker=checkPasswords($pass2,$pass2);
            $email_checker=getExixsitingUser($email);
            if($email_checker==false){
                if($password_checker=="Matching"){
		    $new_rank;
		    if($rank=="Hotel Manager"){
			$new_rank=2;
		     }else{
			$new_rank=3;
		     }
                    $sql="INSERT INTO `users`(`fname`, `oname`, `email`, `phone`, `pass`, `pass2`,`rank`) VALUES ('$fname','$oname','$email','$phone','$pass1','$pass2','$new_rank')";
                    if(mysqli_query($conn,$sql)){
                        echo "Registration successful";
                    }else{
                        die("Error :".mysqli_error($conn));
                    }     
                }else{
                    die("Password mismatch");
                }
            }else{
                die("The email is already in use");
            }
        }
    }

    function getExixsitingUser($value){
        require "database.inc.php";
        $sql="SELECT * FROM `users` WHERE email='$value'";
        $result=mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)==1){
            return true;
        }else{
            return false;
        }
    }

    function checkPasswords($pass,$pass3){
        if($pass===$pass3){
            return "Matching";
        }else{
            return "Mismatching";
        }
    }