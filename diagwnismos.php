<!DOCTYPE html>
<html lang="el">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Φόρμα Βαθμολογίας</title>
    <style>
        body {
            background-color: #e8ebe4;
            font-family: Arial, sans-serif;
            text-align: left;
        }
        button{
    padding: 6px 20px;
    background-color: beige;
    cursor: pointer;
        }
        form {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <a href="ιστοσελιδα2.html">
        <button>Επιστροφή στην Αρχική Σελίδα!</button>
    </a>
    <form action="diagwnismos.php" method="post">
        <label>Όνομα:</label> <br>
        <input type="text" name="username" required> <br><br>
        
        <label>Βαθμός 1:</label> <br>
        <input type="number" name="subject1" min="0" max="100"> <br><br>
        
        <label>Βαθμός 2:</label> <br>
        <input type="number" name="subject2" min="0" max="100"> <br><br>
        
        <label>Βαθμός 3:</label> <br>
        <input type="number" name="subject3" min="0" max="100"> <br><br>
        
        <label>Βαθμός 4:</label> <br>
        <input type="number" name="subject4" min="0" max="100"> <br><br>
        
        <label>Βαθμός 5:</label> <br>
        <input type="number" name="subject5" min="0" max="100"> <br><br>
        
        <label>Βαθμός 6:</label> <br>
        <input type="number" name="subject6" min="0" max="100"> <br><br>
        
        <input type="submit" name="submit" value="Υποβολή" style="cursor: pointer;">
    </form>
<?php
session_start();

if (!isset($_SESSION["sumgen"])) $_SESSION["sumgen"] = 0;
if (!isset($_SESSION["total"])) $_SESSION["total"] = 0;
if (!isset($_SESSION["sumep"])) $_SESSION["sumep"] = 0;
if (!isset($_SESSION["max_mo"])) $_SESSION["max_mo"] = 0;
if (!isset($_SESSION["max_name"])) $_SESSION["max_name"] = "κανένας";
if (!isset($_SESSION["sum"])) $_SESSION["sum"] = 1;

if (isset($_POST["submit"])) {
    if (isset($_POST["username"], $_POST["subject1"], $_POST["subject2"], $_POST["subject3"],
              $_POST["subject4"], $_POST["subject5"], $_POST["subject6"]) && 
        $_POST["username"] != "ΤΕΛΟΣ") {

        $_SESSION["username"] = $_POST["username"];
        $_SESSION["SUBJECT1"] = (int)$_POST["subject1"];
        $_SESSION["SUBJECT2"] = (int)$_POST["subject2"];
        $_SESSION["SUBJECT3"] = (int)$_POST["subject3"];
        $_SESSION["SUBJECT4"] = (int)$_POST["subject4"];
        $_SESSION["SUBJECT5"] = (int)$_POST["subject5"];
        $_SESSION["SUBJECT6"] = (int)$_POST["subject6"];

        $mo = ($_SESSION["SUBJECT1"] + $_SESSION["SUBJECT2"] + $_SESSION["SUBJECT3"] +
               $_SESSION["SUBJECT4"] + $_SESSION["SUBJECT5"] + $_SESSION["SUBJECT6"]) / 6;
        echo "{$_SESSION["username"]} <br>";
        echo "{$mo} <br>";

        $_SESSION["total"] += $mo;
        $_SESSION["sumgen"]++;

        $myfile = fopen("testfile.txt", "a") or die("Unable to open file!");
        $data = $_SESSION["username"] . "," . $_SESSION["SUBJECT1"] . "," . $_SESSION["SUBJECT2"] . "," .
                $_SESSION["SUBJECT3"] . "," . $_SESSION["SUBJECT4"] . "," . $_SESSION["SUBJECT5"] . "," .
                $_SESSION["SUBJECT6"] . "," . ($_SESSION["total"] / $_SESSION["sumgen"]) . PHP_EOL;
        fwrite($myfile, $data);
        fclose($myfile);

        if ($mo > $_SESSION["max_mo"]) {
            $_SESSION["max_name"] = $_SESSION["username"];
            $_SESSION["max_mo"] = $mo;
            $_SESSION["sum"] = 1;
        } elseif ($mo == $_SESSION["max_mo"]) {
            $_SESSION["sum"]++;
        }

        if ($mo > 60) {
            echo "ΕΠΙΤΥΧΩΝ";
            $_SESSION["sumep"]++;
        } else {
            echo "ΑΠΟΤΥΧΩΝ";
        }
    } elseif ($_POST["username"] == "ΤΕΛΟΣ") {
        if ($_SESSION["sumgen"] > 0) {
            echo "Ποσοστό επιτυχίας: " . ($_SESSION["sumep"] / $_SESSION["sumgen"] * 100) . "%<br>";
            if ($_SESSION["sum"] == 1) {
                echo "βραβεύεται ο μαθητής: " . $_SESSION["max_name"] ;
            } else {
                echo "βραβεύονται οι μαθητές: " . $_SESSION["sum"];
            }
        } else {
            echo "Δεν υπάρχουν δεδομένα.";
        }
    } else {
        echo "Παρακαλώ συμπληρώστε όλα τα πεδία!";
    }
}
?>
</body>
</html>