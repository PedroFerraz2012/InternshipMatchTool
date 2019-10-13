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
        <link rel="shortcut icon" href="AIT_icon.ico" type="image/x-icon" />
        <link rel="stylesheet" type="text/css" href="Styles.css">
    </head>

    <?php include('navigation.php'); ?>

    <div class="container-fluid text-center">
        <div class="row content">
             <div class="col-sm-2 sidenav">
                <a class="text" href="StudentMatch.php">
                    <div class="well2">
                        <p class="t2">Student Match</p>
                    </div>
                </a>
                <a class="text" >
                    <div class="well1">
                        <p class="t2">Companies Match </p>
                    </div>
                </a>

                

            </div>
            <div class="col-sm-10 text-left content">

                <?php 
        
           if(isset($_SESSION["CompId"])){
        
        ?>

                <table id="myTable" style="width:100%">
                    <tr class="rowhead">
                        <th class="colhead">Company Name</th>

                        <th class="colhead">Contact Person</th>
                        <th class="colhead">website</th>
                        <th class="colhead">Description</th>
                        <th class="colhead">Tier rate</th>
                        <th class="colhead">notes</th>

                    </tr>




                    <?php 
  $session12=$_SESSION["CompId"];
         
    $sql = "SELECT company_id,company_name,contact_person,website,description,tier_rate,notes,TypeOfCompany FROM company";
$result = $conn->query($sql);
    while($row = $result->fetch_assoc()) {
        if($row["company_id"]== $session12){
           
         ?>

                    <tr class="info-row">
                        <td class="colhead1">
                            <?php echo $row["company_name"];?>
                        </td>

                        <td class="colhead1">
                            <?php echo $row["contact_person"];?>
                        </td>

                        <td class="colhead1">
                            <?php echo $row["website"];?>
                        </td>
                        <td class="colhead1">
                            <?php echo $row["description"];?></td>
                        
                        <?php $companyTier1=$row["tier_rate"];
                        
                        ?>
                        <?php $TypeOfCompany1=$row["TypeOfCompany"]; 
                        
                         ?>
                        <td class="colhead1">
                            <?php echo $row["tier_rate"];?></td>
                        <td class="colhead1">
                            <?php echo $row["notes"];?></td>

                    </tr>




                    <?php }} ?>

                </table>

                <h6>Potential students</h6>
               <table id="myTable" style="width:100%">
  <tr class="rowhead">
   
    
<th class="colhead">Fist name</th>
                        <th class="colhead">Last name</th>
                        <th class="colhead">dob</th>
                        <th class="colhead">Email</th>
                        <th class="colhead">Notes</th>
                        <th class="colhead">Student id</th>
                        <th class="colhead">Course</th>
      
  </tr>
  
    
    
    
     <?php 
  
         $session14= $_SESSION["CompId"];
             
               
                    $sql1 = "SELECT * FROM  companytierrate";
$result1 = $conn->query($sql1);
    while($row = $result1->fetch_assoc()) {
        if($row["companyTier"]== $companyTier1){
            
            
            
            $minimumval=$row["companyMinimumRate"];
            $maxval=$row["companyMaximumRate"];
           
}}
               
               
               
    $sql = "SELECT * FROM  student_assets";
$result = $conn->query($sql);
    while($row = $result->fetch_assoc()) {
        
         $combinedscore=$row["hardworking"]+$row["job_ready_professionalism"]+$row["team_dynamics"]+$row["punctuality_reliability"]+$row["social_ability"]+$row["coding_ability"]+$row["tech_skill"]; 
        
        if($minimumval<= $combinedscore && $combinedscore <= $maxval){
        $stuid=$row["student_id"];
            
          $sql1 = "SELECT * FROM  students";
$result1 = $conn->query($sql1);
    while($row = $result1->fetch_assoc()) {
        if($row["s_id"]== $stuid){
            $Sel=false;
           
            $course12 =$row["courses"];
            
           $sql2 = "SELECT * FROM  courses";
$result2 = $conn->query($sql2);
    while($row2 = $result2->fetch_assoc()) {
        
        
        
        if($row2["courseType"]==$TypeOfCompany1){
           
          if($row2["courseName"]==$course12 ){
            
              $Sel=true;
              
            
        }  
            
        }}
           
            
           
if($Sel==true){
            
         ?>
            
            
            
            
            <tr>
                
                
                
                
                
                
                
                
          <td class="colhead1"><?php echo $row["first_name"];?>
                        </td>
                        <td class="colhead1">
                            <?php echo $row["last_name"];?></td>
                        <td class="colhead1">
                            <?php echo $row["dob"];?></td>
                        <td class="colhead1">
                            <?php echo $row["email"];?></td>
                        <td class="colhead1">
                            <?php echo $row["notes"];?></td>
                        <td class="colhead1">
                            <?php echo $row["student_id"];?></td>
                        <td class="colhead1">
                            <?php echo $row["courses"];?></td>
                        <td><form action="StudentMatch_ap.php" method=post>
                                <input type="hidden" name="stuId" value="<?php echo $row["s_id"];?>">


                                <input class="infoBtn" type="submit"  alt="submit"
                                    fill="orange" value="enroll" width="17" height="17">

                            </form></td>
               
                 
        
               
            
            </tr>
            
            
            
  
        <?php }
        $Sel=false;
        }}}} ?>
    
 
</table>

                <?php }
          else{
              
              
              
          ?> <P style="color:black;text-align:center;">Please select a company inorder to view their details</P> <?php
               
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