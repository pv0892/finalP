<?php
include 'model/taskfunction.php';
session_start();
$n=$_SESSION['name'];
$e=$_SESSION['email'];
$res= getTasksFor($n);
//print_r($res);
?>

<?php include 'view/header.php'; ?>
<div id="user">
    <h1 id="uname"><?php echo $n; ?></h1>
     
</div>
<button onclick="location.href='taskadd.php'">Add a task</button>
<div id="taskdue">
    <h1>Tasks due</h1>
    <ul> 
        <?php foreach ($res as $value) { 
            
            if($value['status']){
            ?>
        <li  style="border-bottom: 1px solid gray; padding: 19px">
            <section class="tname">Task Name: <?php echo $value['taskname']; ?></section>
                <section class="tdesc">Task Desc:<?php echo $value['taskdesc']; ?></section>
                    <section class="tdate">Task Date:<?php echo $value['taskdate']; ?></section>
                    <section class="ttime">Task Time:<?php echo $value['tasktime']; ?></section> 
                    
        </li>
        <?php }} ?>
    </ul>
</div>

<div id="taskdone">
    <h1>Tasks done</h1>
    <ul> 
    </ul>
</div>

<?php include 'view/footer.php'; ?>