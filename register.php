<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require 'model/users.php';

if(isset($_POST['email'])){$f=userExists($_POST['email']);

if($f==''){
    
 //   echo 'not found';
    insert($_POST['email'],$_POST['password'],$_POST['firstname'],$_POST['lastname'],$_POST['birthday'],$_POST['phone'],$_POST['gender']);
    
}
        else { 
            
            echo 'user already exists'.$f;
        }

}
?>
<?php include 'view/header.php'; ?>

<form method="post" action="register.php">
<table>
<tr>
<td>First_name:</td>
<td><input type ="text" name="firstname" class="textInput"> </td>
</tr>
<tr>
<td>Last_name:</td>
<td><input type ="text" name="lastname" class="textInput"> </td>
</tr>
<tr>
<td>E-mail::</td>
<td><input type ="email" name="email" class="textInput"> </td>
</tr

<tr>
<td>Password:</td>
<td><input type ="password" name="password" class="textInput"> </td>
</tr>
<tr>

<tr>
<td>Birthday::</td>
<td><input type ="date" name="birthday" class="textInput"> </td>
</tr>
<tr>
<td>Phone:</td>
<td><input type ="text" name="phone" class="textInput"> </td>
</tr>
<tr>
<td>Gender:</td>
<td><label for="ml" >Male</label><input type ="radio" name="gender" value="male" id="ml"> </td>
<td><label for="fl">Female</label><input type ="radio" name="gender" value="female" id="fl"> </td>
</tr>
<tr>
<td><input type="submit" name="register_btn" value="Register"></td>
</tr>
</table>
</form>

<?php include 'view/footer.php'; ?>
