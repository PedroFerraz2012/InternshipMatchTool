<?php
if (session_id() == '' || !isset($_SESSION)) {

session_start();
   
    $servername = "localhost";
$username = "root";
$password = "";
$dbname = "internshipdatabase";
    try{
    $conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
    $test=false;
        $numberOfItems1= 0;
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT s_id,first_name,last_name,dob,email,notes,student_id FROM students";
$result = $conn->query($sql);
    
     
        
}
    catch(PDOException $e){
    echo $sql . "<br>" . $e->getMessage(); 
}
}
 else {
    echo "0 results";
}

    




?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Internship Match Tool</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link rel="shortcut icon" href="AIT_icon.ico" type="image/x-icon"/>
  <link rel="stylesheet" type="text/css" href="Styles.css">
</head>
<body>

    
    
    
    <div class="jumbotron">
  <div class="container text-center">
    
      <div class="col-sm-2 ">
      
    </div>
      
      <div class="col-sm-6 text-center"> 
        <h2 class="headingTxt">AIT Internship Match Tool</h2> 
    </div>
    <div class="col-sm-4 text-right headerTxt">
        
             <h4 class="h4txt" > Powered by pineapple solutions ©
            
            <img class="img14"src="./images/Pineapple_Solutions_logo.svg" alt="aitlogo">
            </h4>
            
      
    </div>
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
  </div>
</div>
    
    
    
    
<nav class="navbar navbar-inverse">
  <div class="container-fluid text-center">
      <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a href="Home.php">
       <img class="img13"src="./images/AIT_logo.svg" alt="aitlogo">
</a>
    </div>
    
    <div class="collapse navbar-collapse " id="myNavbar">
        
         <div class="col-sm-10 text-center"> 
        
   
        
        
        
      <ul class="nav navbar-nav">
          
        <li class="li12">
           <div class="svgfilter">
           
               
               <svg class="svgpos" width="50" height="50">
               
               <?php echo file_get_contents("./images/university-solid.svg"); ?>
               </svg>
               
            </div>  
            
            
            

             
            
            <a class="ac" href="Companies.php" style="color:white;">Companies</a></li>
        <li class="li16">
            
              
            
            
            
             <div class="svgfilter">
           
               
               <svg class="svgpos" width="50" height="50">
               
               <?php echo file_get_contents("./images/black/user-graduate-solid.svg"); ?>
               </svg>
               
            </div> 
            
            
            <a style="color:white;" href="Students.php">Students</a></li>
        <li class="li12">
        
             
            
            <div class="svgfilter">
           
               
               <svg class="svgpos" width="50" height="50">
               
               <?php echo file_get_contents("./images/file-contract-solid.svg"); ?>
               </svg>
               
            </div> 
            
            <a style="color:white;" href="Enrollments.php">Teck Stack/Assets</a></li>
        <li class="li12">
            
            
            
            
            <div class="svgfilter">
           
               
               <svg class="svgpos" width="50" height="50">
               
               <?php echo file_get_contents("./images/info-circle-solid.svg"); ?>
               </svg>
               
            </div> 
            
            
            
            <a href="StudentMatch.php" style="color:white;">Match Tool</a></li>
          <li class="li12">
              
              
        
              
              
              
              <div class="svgfilter">
           
               
               <svg class="svgpos" width="50" height="50">
               <path class="sv12"/>
               <?php echo file_get_contents("./images/comment-dots-solid.svg"); ?>
               </svg>
               
            </div> 
              
              
              <a href="Emails.php" style="color:white;">Communication</a></li>
      </ul>
       </div>
        
    </div>
  </div>
</nav>
  
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav">
     <a class="text">
        <div class="well1">
     <p class="t2">Students List</p>
      </div>
       </a> 
        <a class="text" href="Students_details.php">
        <div class="well2">
     <p class="t2">Students Details </p>
      </div>
       </a> 
        
          <a class="text" href="Students_new.php" >
        <div class="well2">
     <p class="t2">New Student</p>
      </div>
       </a>
        
    </div>
    <div class="col-sm-10 text-left content"> 
  
        
        
        <table style="width:100%">
            <tr class="rowhead">
    <th class="colhead">Given Name</th>
    
    <th class="colhead">Surname</th>
     <th class="colhead">Course</th>    
                <th class="colhead">DOB</th>
                    <th class="colhead">Email</th>
                 <th class="colhead">Phone number</th>
  </tr>
        <?php 
    
    $sql = "SELECT s_id,first_name,last_name,dob,email,notes,student_id FROM students";
$result = $conn->query($sql);
    while($row = $result->fetch_assoc()) {
        
            
         ?>
            
            
            
            
            <tr>
           <th class="colhead1"> <p><?php echo $row["first_name"];?></p>
               </th>
                

         <th class="colhead1"><p><?php echo $row["last_name"];?></p></th>
        <th class="colhead1">
        <p>need to fix table</p>
            </th>
        
        <th class="colhead1">
        <p><?php echo $row["dob"];?></p></th>
                
        <th class="colhead1">
          <p><?php echo $row["email"];?></p></th>
        <th class="colhead1">
                  <p><?php echo $row["notes"];?></p>
            </th>
            
            </tr>
            
            
            
  <div class="row">
    <div class="col-sm-3">
    
        
        
        
        
        
        
         
    </div>
    <?php } ?>
        
        
        
        
        
        
        
        
        
    </div>
        </table>
        
        
        
        
        
        
        
    </div>
    
  </div>
</div>

<footer class="container-fluid text-center">
  <p>By Pedro Ferraz 6008 and Jayme Schmid 6290</p>
</footer>

</body>
</html>