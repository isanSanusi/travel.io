<?php
    require_once "../connection_db.php";

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $sql = "DELETE FROM buses WHERE id='$id'";

        if ($conn->query($sql) === TRUE) {
            echo "Bus deleted successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
        header("Location: index.php?page=data_buses");
    } else {
        echo "Invalid request";
    }
?>