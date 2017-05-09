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
        <?php foreach ($res as $value) { ?>
        <li>
            <section class="tname">Task Name</section>
                <section class="tdesc">Task Desc</section>
                    <section class="tdate">Task Date</section>
                    <section class="ttime">Task Time</section> 
                    
        </li>
        <?php } ?>
    </ul>
</div>

<div id="taskdone">
    <h1>Tasks done</h1>
    <ul> 
    </ul>
</div>

<?php include 'view/footer.php'; ?>