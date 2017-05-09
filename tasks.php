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
<button>Add a task</button>
<div id="taskdue">
    <h1>Tasks due</h1>
    <ul> 
        <?php foreach ($res as $value) { 
            
            if($value['status']){
            ?>
        <li>
            <section class="tname"><?php echo $value['taskname']; ?></section>
                <section class="tdesc"><?php echo $value['taskdesc']; ?></section>
                    <section class="tdate"><?php echo $value['taskdate']; ?></section>
                    <section class="ttime"><?php echo $value['tasktime']; ?></section> 
                    
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