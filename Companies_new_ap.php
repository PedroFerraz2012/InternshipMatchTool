
 <?php
session_start();
    $servername = "localhost";
$username = "root";
$password = "";
$dbname = "internshipdatabase";

    
  // Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}




$test= false; 

    
    
    if( $test==false){
        echo "flase";
   
    
    
    
    
    

   
    $CompanyName= $_POST["CompanyName"];
      $ContactPerson= $_POST["ContactPerson"];   
       $Website= $_POST["Website"];
      $Description= $_POST["Description"];
        $TierRate= $_POST["TierRate"];
      $Notes= $_POST["Notes"];
        
    
           try{ $sql = "INSERT INTO company (company_name, contact_person, website,description,tier_rate,notes)
    VALUES ('".$CompanyName."', '".$ContactPerson."', '".$Website."', '".$Description."', '".$TierRate."', '".$Notes."')";
    // use exec() because no results are returned
    
               
    
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}  
               
               
               
               
               
               
 echo "New record created successfully";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }
     $_SESSION["messageReg12"] ="added";
            echo $_SESSION["messageReg12"];    
}
header('Location: Companies_new.php');
$conn->close();
?> 


