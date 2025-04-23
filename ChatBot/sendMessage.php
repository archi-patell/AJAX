<!-- <?php
        session_start();
        include('config.php');
        if (isset($_POST['send'])) {
            if (!empty($_POST['msg'])) {
                mysqli_query($cnc, "insert into message values('{$_SESSION['from']}','{$_SESSION['to']}','{$_REQUEST['msg']}')");
            }
        }
        ?> -->
<?php
session_start();
include('config.php'); // Ensure this file connects to the database

if (isset($_POST['msg']) && !empty($_POST['msg'])) {
    $fromUser = $_SESSION['from'];
    $toUser = $_SESSION['to'];
    $message = $_REQUEST['msg'];
    // $message = mysqli_real_escape_string($cnc, $_POST['msg']); // Prevent SQL injection

    $query = "INSERT INTO message (fromUser, toUser, message) VALUES ('$fromUser', '$toUser', '$message')";
    $result = mysqli_query($cnc, $query);

    if ($result) {
        echo "Message Sent";
    } else {
        echo "Error: " . mysqli_error($cnc);
    }
}
?>