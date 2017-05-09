<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php include 'view/header.php'; ?>
        <?php
        
        require 'model/users.php';
        if(isset($_POST['email'])&&isset($_POST['password'])){
            if(userExists($_POST['email'])==''){
                echo 'no Account found';
            }
            else{
                $e= login($_POST['email'],$_POST['password']);
                if($e!='')
                    echo "<script>window.location.href='tasks.php'</script>";
                else echo 'password incorrect';
            }
        }
        ?>
        
        <form action="index.php" method="POST">
            
            <span>Email</span>    <input name="email" type="email" value=""/><br>
            <span>Password</span>   <input name="password" type="password" value=""/> <br>
            <input type="submit" value="Login"/>
            <br>
            <a href="register.php">Create an account</a>
        </form>
  <?php include 'view/footer.php'; ?>
