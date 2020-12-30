<?php
    session_start();

    $mysqli = new mysqli('localhost', 'root', '', 'tour') or die(mysqli_error($mysqli));

    $id = 0;

    $name = '';
    $fromDate = '';
    $toDate = '';
    $location = '';

    $my_User = $_GET['getUsername'];

    $update = false;

    if(isset($_POST['save'])){
        $name = $_POST['name'];
        $fromDate = $_POST['fromDate'];
        $toDate = $_POST['toDate'];
        $location = $_POST['location'];

        $mysqli->query("INSERT INTO data (name,fromDate,toDate,location) VALUES ('$name', '$fromDate', '$toDate', '$location')") or die($mysqli->error);

        $_SESSION['message'] = "Record has been saved!";
        $_SESSION['msg_type'] = "success";

        header("Location: Accomodations.php?getUsername=$my_User");
    }

    if(isset($_GET['delete'])){
        $id = $_GET['delete'];
        $mysqli->query("DELETE FROM data WHERE id=$id") or die($mysqli->error());

        $_SESSION['message'] = "Record has been deleted!";
        $_SESSION['msg_type'] = "danger";

        $my_User = $_GET['getUsername'];

        header("Location: Accomodations.php?getUsername=$my_User");
    }

    if(isset($_GET['edit'])){
        $id = $_GET['edit'];
        $result = $mysqli->query("SELECT * FROM data WHERE id=$id") or die($mysqli->error());

        $update = true;
        
        if(true){
            $row = $result->fetch_array();
            $name = $row['name'];
            $fromDate = $row['fromDate'];
            $toDate = $row['toDate'];
            $location = $row['location'];
        }

    }

    if(isset($_POST['update'])){
        $id = $_POST['id'];
        $name = $_POST['name'];
        $fromDate = $_POST['fromDate'];
        $toDate = $_POST['toDate'];
        $location = $_POST['location'];

        

        $mysqli->query("UPDATE data SET name='$name', fromDate='$fromDate', toDate='$toDate',location='$location' WHERE id=$id")or die(mysqli_error());
        
        $_SESSION['message'] = "Record has been updated!";
        $_SESSION['msg_type'] = "warning";

        header("Location: Accomodations.php?getUsername=$my_User");
    }