<?php

session_start();
include('config.php');
?>
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
        .chatBoard {
            top: 50%;
            left: 50%;
            position: absolute;
            transform: translate(-50%, -50%);
            width: 60%;
            height: 60%;
        }


        .chat {
            height: 85%;
            overflow: auto;
        }

        .chatMessages,
        .toUsers {
            display: inline-block;
            max-width: 80%;
            word-wrap: break-word;
            padding: 10px;
            margin: 5px;
            border-radius: 10px;
        }

        /* Style for sender's message (right side) */
        .chatMessages {
            background-color: #007bff;
            color: white;
            text-align: right;
            align-self: flex-end;
        }

        /* Style for receiver's message (left side) */
        .toUsers {
            background-color: #f1f1f1;
            color: black;
            text-align: left;
            align-self: flex-start;
        }
    </style>

</head>

<body>
    <div class="chatBoard alert alert-dark">

        <!-- Display Message -->
        <div class="chat alert alert-light text-right p-4" id="chatContainer">
            <!-- <?php
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
                    ?> -->
        </div>

        <!-- Type Message -->
        <div class="message">
            <form action="#" method="POST" class="d-flex align-items-center">
                <input type="text" name="msg" id="msg" placeholder="Type here..." class="form-control mr-2">
                <span><button type="submit" name="send" id="send" class="btn btn-lg btn-success">Send</button></span>
            </form>
        </div>
        <!-- <?php
                if (isset($_POST['send'])) {
                    if (!empty($_POST['msg'])) {
                        $qry = mysqli_query($cnc, "insert into message values('{$_SESSION['from']}','{$_SESSION['to']}','{$_POST['msg']}')");
                    }
                }

                ?> -->
    </div>
    <!-- <script>
        $(document).ready(function() {
            function displayMessage() {
                $.ajax({
                    type: "POST",
                    url: "displayMessage.php",
                    success: function(data) {
                        $(".chat").html(data);
                        scrollToBottom(); // Scroll after loading messages
                    }
                });
            }

            // Load messages initially
            displayMessage();

            // Function to scroll chat to bottom
            function scrollToBottom() {
                let chatContainer = document.getElementById("chatContainer");
                chatContainer.scrollTop = chatContainer.scrollHeight;
            }

            // Send message and refresh chat
            $("#send").click(function(e) {
                e.preventDefault(); // Prevent page reload
                var msg = $("#msg").val().trim();

                if (msg !== "") { // Check if message is not empty
                    $.ajax({
                        type: "POST",
                        url: "sendMessage.php",
                        data: {
                            msg: msg
                        },
                        success: function(response) {
                            console.log(response); // Debugging
                            $("#msg").val(""); // Clear input field after sending
                            displayMessage(); // Refresh chat messages
                        },
                        error: function(xhr, status, error) {
                            console.error("AJAX Error:", error);
                        }
                    });
                }
            });

            // Ensure scrolling works when the page loads
            window.onload = function() {
                setTimeout(scrollToBottom, 500);
            };
        });
    </script> -->
    <script>
        $(document).ready(function() {
            function displayMessage() {
                $.ajax({
                    type: "POST",
                    url: "displayMessage.php",
                    success: function(data) {
                        $(".chat").html(data);
                    }
                });
            }

            // Auto-refresh chat every 1 seconds
            setInterval(displayMessage, 1000);

            function scrollToBottom() {
                let chatContainer = document.getElementById("chatContainer");
                chatContainer.scrollTop = chatContainer.scrollHeight;
            }
            scrollToBottom();


            $("#send").click(function(e) {
                e.preventDefault();
                var msg = $("#msg").val().trim();

                if (msg !== "") {
                    $.ajax({
                        type: "POST",
                        url: "sendMessage.php",
                        data: {
                            msg: msg
                        },
                        success: function(response) {
                            console.log(response);
                            $("#msg").val("");
                            displayMessage();
                        },
                        error: function(xhr, status, error) {
                            console.error("AJAX Error:", error);
                        }
                    });
                }
            });

            window.onload = function() {
                setTimeout(scrollToBottom, 500);
            };
        });
    </script>



</body>

</html>