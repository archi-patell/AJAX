<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Bootstrap Link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css">

    <!-- Jquery Link -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <style>
        .login {
            top: 50%;
            left: 50%;
            position: absolute;
            transform: translate(-50%, -50%);
            width: 40%;
            height: 60%;
        }
    </style>
</head>

<body>
    <div class="container-fluid login border rounded p-4 alert-dark">
        <form action="#" method="POST">
            <label for="fromUser">From : </label>
            <select name="fromUser" id="fromUser" class="form-control">
                <?php
                include('config.php');
                $sql = "SELECT * FROM users";
                $qry = mysqli_query($cnc, $sql);
                while ($row = mysqli_fetch_array($qry)) {
                    echo "<option>$row[uname]</option>";
                }
                ?>
            </select><br>
            <label for="toUser">To : </label>
            <select name="toUser" id="toUser" class="form-control">
                <?php

                $sql = "SELECT * FROM users";
                $qry = mysqli_query($cnc, $sql);
                while ($row = mysqli_fetch_array($qry)) {
                    echo "<option>$row[uname]</option>";
                } ?>
            </select>
            <br>
            <input type="submit" value="Start" name="submit" class="btn btn-lg btn-primary form-control">
        </form>
    </div>

    <?php
    session_start();
    if (isset($_POST['submit'])) {
        if (!empty($_POST['fromUser']) && !empty($_POST['toUser'])) {
            $_SESSION['from'] = $_POST['fromUser'];
            $_SESSION['to'] = $_POST['toUser'];
            echo "<script>window.location.href='index.php'</script>";
        }
    }

    ?>
</body>

</html>