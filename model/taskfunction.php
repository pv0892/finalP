<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require 'db.php';

function addTask($tn,$td,$tdt,$tt,$email)
{
    global $db;
  $q="INSERT INTO `task_info` (`taskname`, `taskdesc`, `taskdate`, `tasktime`, `email`, `status`) VALUES ('$tn', '$td', '$tdt', '$tt', '$email', 'Due');"; 
   $statement = $db->prepare($q);
   $statement->execute();
  $statement->closeCursor(); 
   echo 'done';
}
function getTasksFor($email)
{
 global $db;
 $query="SELECT * FROM `task_info` where `email`='$email'";
 //echo $query;
 $statement = $db->prepare($query);
  $statement->execute();

   $category = $statement->fetchAll();
  $statement->closeCursor(); 
 // print_r($category);
  return $category;
}

?>

