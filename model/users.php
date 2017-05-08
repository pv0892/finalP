<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require('db.php');

function userExists($email) {
   global $db;
   $q="SELECT `email` FROM `user_info` where email='$email' ";
          
$statement = $db->prepare($q);
 $statement->execute();
   $category = $statement->fetch();
//   print_r(count($statement->fetchAll()));
    $statement->closeCursor();    
    $f_name = $category['email'];
  //  echo $f_name.'<br>';
//    echo ''.count($statement->fetchAll()).$f_name;
    
    return $f_name;
}

function insert($email,$password,$fn,$ln,$bday,$phone,$gender) {
   global $db;
   $q="INSERT INTO `pb389`.`user_info` (`email`, `fname`, `lname`, `phone`, `birthday`, `password`, `gender`) VALUES ('$email', '$fn', '$ln', '$phone', '$bday', '$password', '$gender') ";
          
$statement = $db->prepare($q);
 $statement->execute();
   $res= $statement->fetch();
//   print_r(count($statement->fetchAll()));
    $statement->closeCursor();    
    $f_name = $res['email'];
  //  echo $f_name.'<br>';
//    echo ''.count($statement->fetchAll()).$f_name;
    
    return $f_name;
}
?>