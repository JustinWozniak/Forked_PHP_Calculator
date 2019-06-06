<?php

include("calculator_controller.php");

?>

<!DOCTYPE html>
<html>

<head>


<script>
//TRYING TO GET THE PAGE TO REFRESH HERE---------------------------------------



//Not sure what this did
// //Construct the current URL.
// var currentURL = window.location.pathname + window.location.search + window.location.hash;
// //Redirect to the current URL.
// window.location.href = currentURL;



//Callback dosnt work because it re-submits the form each time...
// setTimeout(function(){ location.reload(false); }, 2000);
</script>


    <style>
        h2 {
            font-family: cursive;
        }
    </style>
</head>

<body>

    </form>

    <h2>Messages</h2>
    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">

    </form>
    <ul>
        <?php
        foreach ($history_of_calculations_array as $line) {
            echo "<li>$line</li>";
        }
        ?>
    </ul>
    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
        <input type="text" name="message_text" value="">

        <input type="submit" name="add" value="+">
        <br />
        <br />
        <input type="submit" name="clear_history" value="clear">
</body>

</html>