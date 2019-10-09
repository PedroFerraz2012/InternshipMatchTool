<?php
//starting to use session
session_start();

//working with db, adding the file with connection
include_once './connection.php';

//instantiating data / method post and filer for int
//$dados = filter_input_array(INPUT_GET, FILTER_DEFAULT);
$id = filter_input(INPUT_GET, "id", FILTER_SANITIZE_NUMBER_INT);


//preparing query to save in the db, using links for values

if (!empty($id)) {
    $result_events = "DELETE FROM messages WHERE message_id ="+$id;
    $resultado_events = mysqli_query($conn2, $result_events);
    //$resultado_events->bindParam(':id', $dados['id']);
    
    //checking if DB changed by "mysqli_affected_rows"
    if (mysqli_affected_rows($conn2)) {
        $_SESSION['msg'] = "<div class='alert alert-success' role='alert'>Dropped Successfuly<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button></div>";
        header("Location: ../Emails.php");
    } else {
        $_SESSION['msg'] = "<div class='alert alert-danger' role='alert'>Error at Dropping Event <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button></div>";
        header("Location: ../Emails.php");
    }
} else {
    $_SESSION['msg'] = "<div class='alert alert-danger' role='alert'>Error at Dropping Event (ID empty) <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button></div>";
    header("Location: ../Emails.php");
}


header('Content-Type: application/json');
//echo json_encode($retorna);
