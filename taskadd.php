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
<td>taskname:</td>
<td><input type ="text" name="textname" class="textInput"> </td>
</tr>
<tr>
<td>taskdesc:</td>
<td><input type ="text" name="taskdesc" class="textInput"> </td>
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
<td>taskdate::</td>
<td><input type ="date" name="taskdate" class="textInput"> </td>
</tr>
<tr>
<td>tasktime:</td>
<td><input type ="text" name="tasktime" class="textInput"> </td>
</tr>

<tr>
<td><input type="submit" name="register_btn" value="Register"></td>
</tr>
</table>
</form>

<?php include 'view/footer.php'; ?>
