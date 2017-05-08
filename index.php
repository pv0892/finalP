<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php include 'view/header.php'; ?>
        <?php
        if(isset($_POST['email'])&&isset($_POST['password'])){
            
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
