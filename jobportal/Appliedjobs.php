
<?php include 'authorizeSeeker.php';?>
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

<link type="text/css" rel="css/bootstrap.min.css">
<script type="text/javascript" src="js/jquery.min.js"></script>
 <script type="text/javascript" src="js/bootstrap.min.js"></script>
 <script type="text/javascript" src="js/jquery-3.3.1.js"></script>
 <script type="text/javascript" src="js/jquery.dataTables.min.js"></script>
 <script type="text/javascript" src="js/dataTables.bootstrap.min.js"></script>
<link href="css/Animate.css" rel="stylesheet" type="text/css">
<link href="css/animate.min.css" rel="stylesheet" type="text/css">
<link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="css/kodchasan.css" rel="stylesheet">
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

?>
<!-- Main Container -->
<div class="container-fluid" style="background:url('img/Wonderful-Blur-Wallpaper.jpg');">
<?php
include 'connect.php';

$sql = "select * from seeker where id = '$sid' ;";
     
     
     
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
     if($row = $result->fetch_assoc()) { 
        $name=  $row["name"];
          $email =  $row["email"];
           
}}
     
?>

	
	<div class="hero" >
	
	
		<div style="width: 100%; " class="row" >
		
			<div class="col-md-4"  >
                            
                            <h4>User Name</h4>
                            <h2><?php echo $name; ?></h2>
                             <h4>Email</h4>
                            <h2><?php echo $email; ?></h2>
		</div>
		
                    <div style=" height: 100vh; margin-top:5% " class="col-md-8">
                        <div><h3>Jobs Applied by you:</h3></div>
                        <table class="table table-hover table-responsive table-striped" id='jobappliedTable'>
                            <thead>
                            <th>Post Id</th>
                            <th>Company Name</th>
                            <th>Job Title</th>
                            <th>Date Applied</th>
                            <th>Min Experiance</th>
                            <th>Salary</th>
                            <th>Job Description</th>
                            <th>Status</th>
                            
                            </thead>
                            <tbody>
                                
                             <?php 
                             $sql="select id,(select name from employer where id=post.eid)as ename,name,minexp,salary,`desc`,(select date from jobsapplied where pid=post.id and sid=$sid)as date,(select status from jobsapplied where pid=post.id and sid=$sid)as appstatus  from post where id in (select pid from jobsapplied where sid=$sid);"; 
                                 $appresult = $conn->query($sql);
                        if ($appresult->num_rows > 0) {
                            // output data of each row
                             while($row = $appresult->fetch_assoc()) 
                                 {
                                 $ename = $row['ename'];
                                $id=$row['id'];
                                $title=$row['name'];
                                $date=$row['date'];
                                $minexp=$row['minexp'];
                                $salary=$row['salary'];
                                $desc=$row['desc'];
                                $status=$row['appstatus'];

                                ?>
                                <tr>
                                    <td><?php echo $id;?></td>
                                    <td><?php echo $ename;?></td>
                                    <td><?php echo $title;?></td>
                                    <td><?php echo $date;?></td>
                                    <td><?php echo $minexp;?></td>
                                    <td><?php echo $salary;?></td>
                                    <td><?php echo $desc;?></td>
                                    <td><?php echo $status;?></td>
                                    
                                    
                                </tr>
                                <?php
                                 }}  
                              ?>
                                
                            </tbody>
                        </table>
                        
                    </div>   
		</div>                       
		
		
		
	
	
	
</div>
  
       
    
</div>

       
        
        
<!--first row -->
 
<script src="js/tilt.jquery.min.js"></script>
<script src="js/signinModal.js"></script>

  	<?php include 'footer.php';?>
<script>
$(document).ready(function() {
    $('#jobappliedTable').DataTable();
} );
</script>
</body>
</html>
