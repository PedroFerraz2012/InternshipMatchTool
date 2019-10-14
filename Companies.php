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

$sql = "SELECT company_id,company_name,contact_person,website,description,tier_rate,notes,TypeOfCompany FROM company";
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
                        <p class="t2">Companies List</p>
                    </div>
                </a>
                <a class="text" href="Companies_details.php">
                    <div class="well2">
                        <p class="t2">Company Details </p>
                    </div>
                </a>

                <a class="text" href="Companies_new.php">
                    <div class="well2">
                        <p class="t2">New company</p>
                    </div>
                </a>

            </div>
            <div class="col-sm-10 text-left content">




                <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.."
                    title="Type in a name">

                <select id="mySelect1" onchange="myFunction2()">
                    <option value="" disabled selected>Select a contact person </option>
                    <option value="0">Display all contact people</option>

                    <?php 
    
    $sql = "SELECT company_id,company_name,contact_person,website,description,tier_rate,notes,TypeOfCompany FROM company";
$result = $conn->query($sql);
    while($row = $result->fetch_assoc()) {
        
            
         ?>

                    <option value="<?php echo $row["contact_person"];?>">
                        <?php echo $row["contact_person"];?></option>
                    <?php } ?>


                </select>
                <select id="mySelect" onchange="myFunction1()">
                    <option value="" disabled selected>Select a tier </option>
                    <option value="0">Display all</option>
                    <option value="1">Tier 1</option>
                    <option value="2">Tier 2</option>
                    <option value="3">Tier 3</option>
                    <option value="4">Tier 4</option>
                    <option value="5">Tier 5</option>
                </select>

                <table id="myTable" style="width:100%">
                    <tr class="rowhead">
                        <th class="colhead">Company Name</th>
                        <th class="colhead">Contact Person</th>
                        <th class="colhead">website</th>
                        <th class="colhead">Description</th>
                        <th class="colhead">Tier rate</th>
                        <th class="colhead">notes</th>
                        <th class="colhead">company type</th>
                        <th class="colhead"> focus</th>
                        <th class="colhead"></th>
                    </tr>




                    <?php 
    
    $sql = "SELECT * FROM company";
$result = $conn->query($sql);
    while($row = $result->fetch_assoc()) {
        
            
         ?>




                    <tr  class="info-row">
                        <td class="colhead1"><?php echo $row["company_name"];?>
                        </td>
                        <td class="colhead1">
                            <?php echo $row["contact_person"];?></td>
                        <td class="colhead1">
                            <?php echo $row["website"];?></td>
                        <td class="colhead1">
                            <?php echo $row["description"];?></td>
                        <td class="colhead1">
                            <?php echo $row["tier_rate"];?></td>
                        <td class="colhead1">
                            <?php echo $row["notes"];?></td>
                        <td class="colhead1">
                            <?php echo $row["TypeOfCompany"];?></td>
                        <td class="colhead1">
                            <?php echo $row["Focus"];?></td>

                        <td>
                            <form action="Companies_details_ap.php" method=post>
                                <input type="hidden" name="CompName" value="<?php echo $row["company_name"];?>">
                                <input type="hidden" name="CompId" value="<?php echo $row["company_id"];?>">
                                <input type="image" src=".\images\info-circle-solid.svg" alt="submit" fill="orange" value="More details" width="17" height="17">

                            </form>
                        </td>

                    </tr>




                    <?php } ?>


                </table>
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
function myFunction1() {
    var input, filter, table, tr, td, i, txtValue;
    input = document.getElementById("myInput");

    filter = document.getElementById("mySelect").value.toUpperCase();
    table = document.getElementById("myTable");
    tr = table.getElementsByTagName("tr");
    for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[4];


        //this displays all of the results  
        if (filter == 0 || filter == "0") {
            if (td) {
                txtValue = td.textContent || td.innerText;

                tr[i].style.display = "";
                console.log("1");



            }
        } else if (td) {
            txtValue = td.textContent || td.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                tr[i].style.display = "";
                console.log("1");
            } else {
                tr[i].style.display = "none";
                console.log("2");
            }
        }
    }
}


function myFunction2() {
    var input, filter, table, tr, td, i, txtValue;
    input = document.getElementById("myInput");

    filter = document.getElementById("mySelect1").value.toUpperCase();
    console.log(filter);
    table = document.getElementById("myTable");
    tr = table.getElementsByTagName("tr");
    for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[1];


        //this displays all of the results  
        if (filter == 0 || filter == "0") {
            if (td) {
                txtValue = td.textContent || td.innerText;

                tr[i].style.display = "";
                console.log("1");



            }
        } else if (td) {
            txtValue = td.textContent || td.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                tr[i].style.display = "";
                console.log("1");
            } else {
                tr[i].style.display = "none";
                console.log("2");
            }
        }
    }
}

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
</script>