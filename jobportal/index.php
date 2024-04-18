<!doctype html>


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
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href="css/Animate.css" rel="stylesheet" type="text/css">
<link href="css/animate.min.css" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Kodchasan" rel="stylesheet">
<style>
    .tiltContain{margin-top:0%;} 
    .btnTilt{height: 75px;background:rgba(225,225,225,0.2) ;  color:white; font-family: Comfortaa;}

    .textDarkShadow{
    text-shadow: 0px 0px 3px #000,3px 3px 5px #003333; 
}
    /*    #btn1,#btn2,#btn3,#btn4,#btn5,#btn6{display:none;}*/
</style>

<body onload="logoBeat()" style="font-family: 'Kodchasan', sans-serif;">


<?php
include 'navBar.php';
include 'signinEmployerModals.php';
?>
    
<!-- Main Container -->
<div class="container-fluid" style=" background-image: url('img/mainBackg.jpg'); background-position: center; background-size: cover; background-repeat: no-repeat; background-attachment: fixed;">


	
    <div class="hero" style=" color:whitesmoke;" >
	
            <h1 style="padding:50px; font-size: 100px;"><strong>JOB PORTAL</strong></h1>
		<div style="width: 100%" class="row" >
		
			<div class="col-md-9"  >
                            <div style=" margin-top: 30px;">
                                <h1>Find jobs</h1>
                     <form class="example" action="index.php">
  <input style="color:#000" type="text" placeholder="Search.." name="q">
  <button type="submit"><i class="fa fa-search"></i></button>
</form></div>
                            
                            <div class="container row">
                                <?php  $name=$category=$minexp=$salary=$industry=$desc=$role=$eType=$status=$msg="";


include 'connect.php';
    
    $sql = "select *,(select name from employer where id=post.eid)as ename from post  order by date";  
       
        if(isset($_GET['q'])){
          $sql = "select *,(select name from employer where id=post.eid)as ename from post where name LIKE '%".$_GET['q']."%' order by date";
        }
      if(isset($_GET['industry'])){
          $sql = "select *,(select name from employer where id=post.eid)as ename from post where industry='".$_GET['industry']."' order by date";
        }
      if(isset($_GET['category'])){
        $sql = "select *,(select name from employer where id=post.eid)as ename from post where category='".$_GET['category']."' order by date";
      }
     
      $result = $conn->query($sql);
      if($result->num_rows>0){
    while(  $row=$result->fetch_assoc()){
            $pid= $row['id'];
            $jobtitle= $row['name'];
            $category=$row['category'];
            $minexp=$row['minexp'];
            $salary=$row['salary'];
            $industry=$row['industry'];
            $desc=$row['desc'];
            $role=$row['role'];
           $ename =$row['ename'];
            $status=$row['status'];
    ?>
                                <div class="col-md-4" style="margin: 20px; background: rgba(0,0,0,0.5);padding: 5px;box-shadow: 0px 0px 5px #003333">
                                    <h3 style="color: #2196F3"><?php echo $jobtitle;?></h3>
                                    <h5>By <?php echo $ename;?></h5><br>
                                    <h4>Job Description:<br><h5><?php echo $desc;?></h5></h4>
                                    <h5>Experiance required:<?php echo $minexp;?> years </h5>
                                    <h5>Salary:<?php echo $salary;?> </h5>
                                    <br>
                                    <a href="applyJob.php?id=<?php echo $pid;?>" class="pull-right" ><h3>Apply</h3></a>
                                </div>
                                
                                
                                
    <?php }}else{
                                    echo "Search returned no results";
                                } ?>
                            </div>
                            
                            
		</div>
		
                    <div style=" height: 100vh; " class="col-md-3">
                       
                        <br><br> 
                        <div style='padding:10px'>
                            <h3>Jobs by Category</h3>
                             <form>
                            <div> 
                               
                            <select class="form-control" name='category'>
                                <?php include "categoryOptions.php";?>
                            </select><br>
                                <input class="btn btn-success pull-right" type="submit" value="Search"/>
                                </div>
                            </form>
                        </div><br><br>
                        <br><br> 
                        <div style='padding:10px'>
                            <h3>Jobs by Industry</h3>  
                            <form>
                            <select class="form-control" name='industry'>
                                <?php include "industryOptions.php";?>
                            </select><br>
                            <input class="btn btn-success pull-right" type="submit" value="Search"/>
                            </form>
                        </div> 
                        
                    </div>   
		</div>                       
		
		
		
	
	
	
</div>
  
     
    
</div>
        
        
<!--first row -->
 
<script src="js/tilt.jquery.min.js"></script>
<script src="js/signinModal.js"></script>

  	<?php include 'footer.php';?>

<button  style="display:none;" type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#msgModal" id="msgModalBtn">Open Modal</button>

<!-- Modal -->
<div id="msgModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      <?php if(isset($_GET['msg'])){
          $msg= $_GET['msg'];
          if($msg=='success'){
            
       echo  "<h4 class='modal-title'>Job Applied Successfully!</h4>";
          }else if($msg=='error'){
      echo  "<h4 class='modal-title'>Some Error occured Pls try again later!</h4>";
          }else if($msg=='dup'){
        echo "<h4 class='modal-title'>You have already applied for this job.\n "
              . "Check your application status in 'Jobs Applied' section</h4>";
          }
          
          
      }?>
      </div>
      
    </div>

  </div>
</div>
<?php 
if(isset($_GET['msg'])){
    if($_GET['msg']=='login'){
?>
    <script>
        $('#loginAnchor').trigger( "click" );
    </script>    
    <?php }else{
      ?>
    <script>
    $('#msgModalBtn').trigger( "click" );
    </script>    
          
   <?php  
    } 
    
    }?> 
</body>
</html>
