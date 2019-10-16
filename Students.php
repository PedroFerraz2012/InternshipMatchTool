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

                <a class="text" href="Students_new.php">
                    <div class="well2">
                        <p class="t2">New Student</p>
                    </div>
                </a>

            </div>
            <div class="col-sm-10 text-left content">

                <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search by first name.."
                    title="Type in a name">
                <input type="text" id="myInput1" onkeyup="myFunction2()" placeholder="Search by last name.."
                    title="Type in a name">




                <table id="myTable" style="width:100%">
                    <tr class="rowhead">
                        <th class="colhead">Fist name</th>
                        <th class="colhead">Last name</th>
                        <th class="colhead">dob</th>
                        <th class="colhead">Email</th>
                        <th class="colhead">Notes</th>
                        <th class="colhead">Student id</th>
                        <th class="colhead">Course</th>
                        <th class="colhead">Skill</th>
                        <th class="colhead"></th>
                    </tr>




                    <?php 
    
    $sql = "SELECT * FROM students";
$result = $conn->query($sql);
    while($row = $result->fetch_assoc()) {
        
            
         ?>




                    <tr class="info-row">
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
                        <td class="colhead1">
                            <?php echo $row["Skill"];?></td>
                        <td>
                            <form action="Students_details_ap.php" method=post>
                                <input type="hidden" name="stuId" value="<?php echo $row["s_id"];?>">


                                <input class="infoBtn" type="image" src=".\images\info-circle-solid.svg" alt="submit"
                                    fill="orange" value="More details" width="17" height="17">

                            </form>
                            
                        </td>
                         <td>
                           
                            <form action="Students_drop.php" method=post>
                                <input type="hidden" name="stuId" value="<?php echo $row["s_id"];?>">


                               <input type="image" src=".\images\trash.svg" alt="submit" value="delete" width="17" height="17">


                            </form>
                        </td>

                    </tr>




                    <?php } ?>


                </table>



























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



<script>
function myFunction() {
    var input, filter, table, tr, td, i, txtValue;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    table = document.getElementById("myTable");
    tr = table.getElementsByTagName("tr");
    for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[0];
        if (td) {
            txtValue = td.textContent || td.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                tr[i].style.display = "";
            } else {
                tr[i].style.display = "none";
            }
        }
    }
}

function myFunction2() {
    var input, filter, table, tr, td, i, txtValue;
    input = document.getElementById("myInput1");
    filter = input.value.toUpperCase();
    table = document.getElementById("myTable");
    tr = table.getElementsByTagName("tr");
    for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[1];
        if (td) {
            txtValue = td.textContent || td.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                tr[i].style.display = "";
            } else {
                tr[i].style.display = "none";
            }
        }
    }
}
</script>