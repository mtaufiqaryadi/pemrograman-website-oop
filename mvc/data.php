<?php
    session_start();
    $username = $_POST['username'];
    $password = $_POST['password'];
    if (empty($username) && empty($password)){
    	  header("location:index.php?empty_all");
    }else if (empty($username) && ! empty($password)){
    	  header("location:index.php?empty_username");
    }else if ( !empty($username) &&  empty($password)){
    	  header("location:index.php?empty_password");
    } else {
    	  if ($username == 'taufiq' && $password == "aryadi"){
    		    $_SESSION['session_username'] =$username;
    		    header("location:indexKadep.php");
    	  } else if ($username == 'ryandrie' && $password == "satria"){
            $_SESSION['session_username'] =$username;
            header("location:indexMenteri.php");
        }
        else {
    		    header("location:index.php?failed");
    	  }
    }
?>
