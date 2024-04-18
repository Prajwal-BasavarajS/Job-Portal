
<?php include 'authorizeEmployer.php';?>
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
  <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>
<link href="css/Animate.css" rel="stylesheet" type="text/css">
<link href="css/animate.min.css" rel="stylesheet" type="text/css">
<link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css" rel="stylesheet" type="text/css">
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

?>
<!-- Main Container -->
<div class="container-fluid" style="background:url('img/Wonderful-Blur-Wallpaper.jpg');">
<?php
include 'connect.php';

$sqlE = "select * from employer where id = '$eid' ;";
     
     
     
$resultE = $conn->query($sqlE);
if ($resultE->num_rows > 0) {
    // output data of each row
     if($rowE = $resultE->fetch_assoc()) { 
        $name=  $rowE["name"];
          $email =  $rowE["email"];
           $fileName = $rowE["logo"];
}}
     
?>

	
	<div class="hero" >
	
	
		<div style="width: 100%; " class="row" >
		
			<div class="col-md-4"  >
                            <img src="uploads/<?php echo $fileName;?>" class="img-circle img-responsive" width="200" style="margin: 20%; box-shadow: 0px 0px 20px #1e1e1e;">
                            <h4>User Name</h4>
                            <h2><?php echo $name; ?></h2>
                             <h4>Email</h4>
                            <h2><?php echo $email; ?></h2>
		</div>
		
                    <div style=" height: 100vh; margin-top:5% " class="col-md-8">
                        <div><h3>Jobs Posted:</h3></div>
                        <table class="table table-hover table-responsive table-striped" id='postTable'>
                            <thead>
                            <th>Post Id</th>
                            <th>Title</th>
                            <th>Desc</th>
                            <th>Min Experiance</th>
                            <th>Salary</th>
                            <th>Status</th>
                            <th>Update</th>
                            <th>Delete</th>
                            </thead>
                            <tbody>
                                
                             <?php 
                             $sql="select * from post where eid=$eid"; 
                                 $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                            // output data of each row
                             while($row = $result->fetch_assoc()) 
                                 {
                                 $id=$row['id'];
                                $title=$row['name'];
                                $category=$row['category'];
                                $minexp=$row['minexp'];
                                $salary=$row['salary'];
                                $industry=$row['industry'];
                                $desc=$row['desc'];
                                $role=$row['role'];
                                
                                $status=$row['status'];

                                ?>
                                <tr>
                                    <td><?php echo $id;?></td>
                                    <td><?php echo $title;?></td>
                                    <td><?php echo $desc;?></td>
                                    <td><?php echo $minexp;?></td>
                                    <td><?php echo $salary;?></td>
                                    <td><?php echo $status;?></td>
                                    <td>
                                        <a href="postjob.php?update=true&id=<?php echo $id;?>"> <span class="glyphicon glyphicon-pencil"></span></a>
                                    </td>
                                    <td>
                                        <a href="deletePost.php?id=<?php echo $id;?>"> <span class="glyphicon glyphicon-trash"></span></a>
                                    </td>
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
    $('#postTable').DataTable();
} );
</script>
</body>
</html>
