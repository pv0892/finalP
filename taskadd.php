<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require 'model/users.php';

if(isset($_POST['taskname'])){



}
?>
<?php include 'view/header.php'; ?>

<form method="post" action="taskadd.php">
<table>
<tr>
<td>taskname:</td>
<td><input type ="text" name="taskname" class="textInput"> </td>
</tr>
<tr>
<td>taskdesc:</td>
<td><input type ="text" name="taskdesc" class="textInput"> </td>
</tr>



<tr>

<tr>
<td>taskdate::</td>
<td><input type ="date" name="taskdate" class="textInput"> </td>
</tr>
<tr>
<td>tasktime:</td>
<td><input type ="time" name="tasktime" class="textInput"> </td>
</tr>

<tr>
<td><input type="submit" name="register_btn" value="Done"></td>
</tr>
</table>
</form>

<?php include 'view/footer.php'; ?>
