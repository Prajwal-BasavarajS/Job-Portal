<?php

	
// Create connection

include 'authorizeEmployer.php';
$id=0;
$name=$category=$minexp=$salary=$industry=$desc=$role=$eType=$status=$msg="";

if ($_SERVER['REQUEST_METHOD'] == 'POST' || $_SERVER['REQUEST_METHOD'] == 'GET') {
include 'connect.php';
    if(isset($_GET['update'])&& isset($_GET['id'])){
      $id = $_GET['id'];
      $sql="select * from post where eid=$eid and id=$id"; 
      $result = $conn->query($sql);
    if(  $row=$result->fetch_assoc()){
            $name= $row['name'];
            $category=$row['category'];
            $minexp=$row['minexp'];
            $salary=$row['salary'];
            $industry=$row['industry'];
            $desc=$row['desc'];
            $role=$row['role'];
            $eType=$row['eType'];
            $status=$row['status'];
    }
    }
    
if(isset($_POST['submitPost'])){	
    
            $id= $_POST['id'];
            $name= $_POST['name'];
            $category=$_POST['category'];
            $minexp=$_POST['minexp'];
            $salary=$_POST['salary'];
            $industry=$_POST['industry'];
            $desc=$_POST['desc'];
            $role=$_POST['role'];
            $eType=$_POST['eType'];
            $status=$_POST['status'];    
    
    if($id>0){
        $sql = "Update `post` set `date`=CURRENT_DATE(),"
                . "`name`='$name', "
                . "`category`='$category', "
                . "`minexp`='$minexp', "
                . "`desc`='$desc', "
                . "`salary`='$salary', "
                . "`industry`='$industry', "
                . "`role`='$role', "
                . "`employmentType`='$eType', "
                . "`status`= '$status' "
                . "where id=$id and eid=$eid;";        
    }else{       
    $sql = "INSERT INTO `post` (`id`, `date`, `eid`, `name`, `category`, `minexp`, `desc`, `salary`, `industry`, `role`, `employmentType`, `status`) "
            . "VALUES (NULL, CURRENT_DATE(), '$eid', '$name', '$category', '$minexp', '$desc', '$salary', '$industry', '$role', '$eType', '$status');";
    }
    
    if ($conn->query($sql) === TRUE) {
        if($_GET['update']){
           header('location: employerAccount.php');
        }else{
        $msg="New Post has been created successfully";
        }
    } else {
        $msg="Error: " . $sql . "<br>" . $conn->error;
    }
}

    }
?>


<html>
<head>
       <!-- Global site tag (gtag.js) - Google Analytics -->


<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1"><link rel="icon" href="images/homepage/favicon.ico" type="image/x-icon">
<title> Online Job Portal by getsetproject.com</title>
<meta name="description" content="a gateway to academic projects|Get your first academic project now with Free Mini-DBMS and CG Projects |Tech tutorials"
	<meta name="keywords" content="IEEE project,B.E project 2018, 2018 projects,M.tech project, M.Tech project 2018 - 2019,Low cost projects,  DBMS, database management system, engineering projects, mini projects, Gulbarga, Kalaburagi, free projects" />
	<meta name="author"	content="Audenberg Technologies (www.audenberg.com)" />
<link href="css/simpleGridTemplate.css" rel="stylesheet" type="text/css">
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="css/Animate.css" rel="stylesheet" type="text/css">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href="css/Animate.css" rel="stylesheet" type="text/css">
<link href="css/animate.min.css" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Kodchasan" rel="stylesheet">


<body onload="logoBeat()" style="font-family: 'Kodchasan', sans-serif;">

<?php
include 'navBar.php';

?>
<!-- Main Container -->
<div class="container-fluid" style="background-color:#3bb3e0;">
<?php
include 'connect.php';
 $eid = $_SESSION["eid"];
$sqlE = "select * from employer where id = '$eid' ;";
     
     
     
$resultE = $conn->query($sqlE);
if ($resultE->num_rows > 0) {
    // output data of each row
     if($rowE = $resultE->fetch_assoc()) { 
        $ename=  $rowE["name"];
          $email =  $rowE["email"];
           
}}
     
?>

	
	<div class="hero" >
	
	
            <div class="container contact-form" style=" background-image: url('img/bgbg.png'); box-shadow: 0px 0px 25px #1e1e1e;">
            <div class="contact-image" >
                <img src="img/rocket_contact.png"style=" background-image: url('img/bgbg.png'); box-shadow: 0px 0px 25px #1e1e1e;" alt="rocket_contact"/>
            </div>
            <form method="post" >	
                <h3>Post a JOB</h3>
               <div class="row">
                   <div><?php echo $msg;?></div>
                   <input type='hidden' value="<?php echo $id;?>" name='id'/>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">Job Title:</label>
                            
                            <input type="text" name="name" class="form-control" placeholder="Job Title" value="<?php echo $name;?>" />
                        </div>
                        <div class="form-group">
                            <label for="category">Job Category</label>
                            <select type="text" name="category" class="form-control" placeholder="Category">
                               <?php include 'categoryOptions.php';?> 
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="minexp">Minimum Experiance</label>
                            <input type="text" name="minexp" class="form-control" placeholder="Minimum Expireince" value="<?php echo $minexp;?>" />
                        </div>
                        <div class="form-group">
                             <label for="salary">Salary Budget</label>
                            <input type="text" name="salary" class="form-control" placeholder="Salary" value="<?php echo $salary;?>" />
                        </div>
                         <div class="form-group">
                             <label for="industry">Job industry</label>
                             <select type="text" name="industry" class="form-control" placeholder="Industry" >
                                 <?php include 'industryOptions.php';?>
                             </select>
                        </div>
                       
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="desc">Job requirements</label>
                            <textarea name="desc" class="form-control" placeholder="Description" style="width: 100%; height: 120px;"><?php echo $desc;?></textarea>
                        </div>
                         <div class="form-group">
                              <label for="role">Role</label>
                            <input type="text" name="role" class="form-control" placeholder="Role" value="<?php echo $role;?>" />
                        </div>
                         <div class="form-group">
                              <label for="eType">Employment Type</label>
                              <select type="text" name="eType" class="form-control" >
                                  <option>Permanent</option>
                                  <option>Part-Time</option>
                              </select>
                        </div>
                        <label>Status</label><br>
                         <label class="radio-inline">
                              <input type="radio" name="status" value="open" 
                                  <?php if($status=='open'){echo "checked='true'";}?>>Open
    </label>
    <label class="radio-inline">
      <input type="radio" name="status" value='closed' <?php if($status=='closed'){echo "checked='true'";}?>>Closed
    </label> <div class="form-group">
                            <button type="submit" name="submitPost" class="btnContact pull-right" > Post Job</button>
                        </div>
                    </div>
                </div>
            </form>
</div>                   
		
		
		
	
	
	
</div>
  
       
    
</div>

       
        
        
<!--first row -->
 
<script src="js/tilt.jquery.min.js"></script>
<script src="js/signinModal.js"></script>

  	<?php include 'footer.php';?>



</body>
</html>
