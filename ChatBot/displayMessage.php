<?php
        session_start();
        include('config.php');

        $qry = mysqli_query($cnc, "select toUser,fromUser,message from message");
        if (mysqli_fetch_row($qry) > 0) {
            while ($row = mysqli_fetch_array($qry)) {
                $previousSender = $row['toUser'];

                if ($_SESSION['from'] == $row['fromUser']) {
                    echo "<div class='d-flex justify-content-end'><p class='chatMessages'>$row[message]</p></div>";
                } else {
                    echo "<div class='d-flex justify-content-start'>";
                    if ($previousSender == $row['toUser']) {
                        echo "<img src='avatar.jpg' height='5%' width='5%' class='rounded-circle mr-2 border'>";
                    }
                    echo "<p class='toUsers'>$row[message]</p></div>";
                }
            }
        }
        ?>
