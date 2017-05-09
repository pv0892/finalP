<?php


?>

<?php include 'view/header.php'; ?>
<div id="user">
    <h1 id="uname">user</h1>
     
</div>
<button>Add a task</button>
<div id="taskdue">
    <h1>Tasks due</h1>
    <ul> 
        <li>
            <section class="tname">Task Name</section>
                <section class="tdesc">Task Desc</section>
                    <section class="tdate">Task Date</section>
                    <section class="ttime">Task Time</section> 
                    
        </li>
    </ul>
</div>

<div id="taskdone">
    <h1>Tasks done</h1>
    <ul> 
    </ul>
</div>

<?php include 'view/footer.php'; ?>