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

$sql = "SELECT company_id,company_name,contact_person,website,description,tier_rate,notes FROM company";
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
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link rel="shortcut icon" href="AIT_icon.ico" type="image/x-icon"/>
  <link rel="stylesheet" type="text/css" href="Styles.css">
</head>

<?php include('navigation.php'); ?>
  
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav">
      <a class="text" href="Students.php">
        <div class="well2">
     <p class="t2">Students List</p>
      </div>
       </a> 
        <a class="text" href="Students_details.php">
        <div class="well2">
     <p class="t2">Students Details
 </p>
      </div>
       </a> 
        
          <a class="text">
        <div class="well1">
     <p class="t2">New Student</p>
      </div>
       </a> 
        
    </div>
    <div class="col-sm-10 text-left content"> 
      <form action="Students_new_ap.php" method=post>
  First Name:<br>
  <input id="FirstName" type="text" name="FirstName" Placeholder="First Name">
  <br>
 Last Name:<br>
  <input id="t2" type="text" name="LastName" Placeholder="Last Name">
         <br>
          dob:<br>
  <input id="t3" type="text" name="dob" Placeholder="dob">
     <br><br>
           Email:<br>
  <input id="t3" type="text" name="Email" Placeholder=" Email">
     <br><br>
           Notes:<br>
  <input id="t3" type="text" name="Notes" Placeholder="Notes">
     <br><br>
          Student id :<br>
  <input id="t3" type="text" name="Studentid" Placeholder="Student id">
     <br><br>
  <input type="submit" value="Add New Student"  
        >
  <br><br>
</form> 
         <?php
        if(isset($_SESSION['messageReg12'])){
           echo $_SESSION["messageReg12"] ; 
        }
        
        ?> 
    </div>
    
  </div>
</div>

 <footer id="sticky-footer" class="footer12">
    <div class="container text-center">
     <P>By Pedro Ferraz 6008 and Jayme Schmid 6290</P>
    </div>
  </footer>

</body>
</html>