<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include 'authorizeEmployer.php';
if(isset($_GET['id'])){
    $aip = $_GET['id'];  //application id
   
    
        include 'connect.php';
      
        
        $sql = "update jobsapplied set status='Rejected' where id='$aip';";
        $result=$conn->query($sql);
        header('location: ViewApplicants.php');
}else{     
                header('location: index.php?msg=dup');
}
                die();
            
        
       
    


?>