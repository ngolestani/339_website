<?php
session_start();
if(isset($_SESSION['login_user']) && isset($_SESSION['role'])){
    if ($_SESSION['role']==2){
        header("Location: agents.php");
    }elseif($_SESSION['role']==3){
        header("Location: students.php");
    }
}else{
    header("Location:usersregister.php");
}