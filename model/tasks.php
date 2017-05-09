<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require 'db.php';

function addTask()
{
    
}
function getTasksFor($email)
{
 global $db;
 $query="SELECT * FROM `task_info where email=`".$email;
 $statement = $db->prepare($q);
   $category = $statement->fetchAll();
 $statement->execute();
  $statement->closeCursor(); 
  print_r($category);
  return $category;
}

?>

