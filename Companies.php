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
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link rel="shortcut icon" href="AIT_icon.ico" type="image/x-icon"/>
  <link rel="stylesheet" type="text/css" href="Styles.css">
</head>


<?php include('navigation.php'); ?>
  
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav">
      <a class="text">
        <div class="well1">
     <p class="t2">Companies List</p>
      </div>
       </a> 
        <a class="text" href="Companies_details.php">
        <div class="well2">
     <p class="t2">Company Details </p>
      </div>
       </a> 
        
          <a class="text" href="Companies_new.php">
        <div class="well2" >
     <p class="t2">New company</p>
      </div>
       </a> 
        
    </div>
    <div class="col-sm-10 text-left content"> 
      
        
        
        
        
        <table style="width:100%">
            <tr class="rowhead">
    <th class="colhead">Company Name</th>
    
    <th class="colhead">Contact Person</th>
     <th class="colhead">website</th>    
                <th class="colhead">Description</th>
                    <th class="colhead">Tier rate</th>
                 <th class="colhead">notes</th>
  </tr>
        <?php 
    
    $sql = "SELECT company_id,company_name,contact_person,website,description,tier_rate,notes FROM company";
$result = $conn->query($sql);
    while($row = $result->fetch_assoc()) {
        
            
         ?>
            
            
            
            
            <tr>
           <th class="colhead1"> <p><?php echo $row["company_name"];?></p>
               </th>
                

         <th class="colhead1"><p><?php echo $row["contact_person"];?></p></th>
        <th class="colhead1">
        <p><?php echo $row["website"];?></p>
            </th>
        
        <th class="colhead1">
        <p><?php echo $row["description"];?></p></th>
                
        <th class="colhead1">
          <p><?php echo $row["tier_rate"];?></p></th>
        <th class="colhead1">
                  <p><?php echo $row["notes"];?></p>
            </th>
            
            </tr>
            
            
            
  <div class="row">
    <div class="col-sm-3">
    
        
        
        
        
        
        <form action="itemPageAction.php" method="post">
           <?php $value123=$row["company_name"];?>
<input  type="hidden" name="itemName1" id="itemName1" value= "<?php echo $value123 ?>">
</form> 
         
    </div>
    <?php } ?>
        
        
        
        
        
        
        
        
        
    </div>
        </table>
  </div>
</div>

<footer class="container-fluid text-center">
  <p>By Pedro Ferraz 6008 and Jayme Schmid 6290</p>
</footer>

</body>
</html>