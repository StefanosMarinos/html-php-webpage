<!DOCTYPE html>
<html lang="el">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Φόρμα</title>
  <style>
    .par{
      text-align: center;
    }
    body {
        background-color: #e8ebe4;
        font-family: Arial, sans-serif;
    }
    .navbar ul {
    list-style-type: none;
    background-color: white;
    margin: 0;
    padding: 0;
    overflow: hidden;
    display: flex;  
    justify-content: space-between; 
    align-items: center;  
    text-align: center;
    }

    .navbar li {
        display: inline-block;
    }
    .register-link {
          background-color: #28a745;
          border-radius: 5px;
          font-size: 20px !important;
          padding: 8px 12px !important;
        }
    .navbar a {
        color: black;
        text-decoration: none;
        padding: 15px;
        display: inline-block;
        font-size: 16px;
        transition: background-color 0.3s;
    }

    .navbar a:hover {
        background-color: #f0f0f0;
    }

    .form {
        display: table;
        border-spacing: 15px;
        margin: 30px auto;
        padding: 20px;
        background-color: white;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .label {
        display: inline-block;
        font-size: 16px;
        font-weight: bold;
        color: #555;
        width: 150px;
    }

    .input-field {
        display: inline-block;
        padding: 10px;
        font-size: 14px;
        border: 1px solid #ddd;
        border-radius: 4px;
        margin-left: 10px;
        width: 200px;
        transition: border-color 0.3s;
    }

    .input-field:focus {
        border-color: #4CAF50;
        outline: none;
    }

    .input-field[type="checkbox"] {
        width: auto;
    }

    .input-field[type="submit"],
    .input-field[type="reset"] {
        width: 48%;
        background-color: #4CAF50;
        color: white;
        font-size: 16px;
        border: none;
        cursor: pointer;
        padding: 12px;
        border-radius: 4px;
        transition: background-color 0.3s;
    }

    .input-field[type="submit"]:hover,
    .input-field[type="reset"]:hover {
        background-color: #45a049;
    }

    .input-field[type="reset"] {
        background-color: #f44336;
    }

    .input-field[type="reset"]:hover {
        background-color: #e53935;
    }

    .terms {
        display: flex;
        align-items: center;
        font-size: 14px;
    }

    .terms input[type="checkbox"] {
        margin-right: 10px;
    }
    button{
    padding: 6px 20px;
    background-color: beige;
    cursor: pointer;
    }
    .left-links {
     display: flex;
     gap: 15px;
    }

    .right-links {
     margin-left: auto; 
    }
  </style>
</head>
<body>
  <h1>Stefs clothes</h1>
  <nav class="navbar">
  <ul>
    <div class="left-links"></div>
    <li>
      <a href="ιστοσελιδα2.html">Αρχική σελίδα</a>
    </li>
    <li>
      <a href="προιοντα.html">Προϊόντα</a>
    </li>
    <li>
      <a href="επικοινωνια.html">Επικοινωνία</a>
    </li>
    <li>
      <a href="επιχειρηση.html">Η επιχείρηση</a>
    </li>
    <li>
      <a href="index.html">Για εμενα</a>
    </li>
    <li>
      <a href="ekptosh.html">Προσωπικη Εκπτωση</a>
    </li>
    <li>
      <a href="diagwnismos.php">Διαγωνισμος</a>
    </li>
    <div class="right-links">
      <li>
        <a href="forma.html" class="register-link">Εγγραφη χρηστη</a>
      </li>
    </div>
   </ul>
  </nav>
  <br>
  <p id="errors" style="color:red;" class="par"></p>
  <form  action="index.php" method="POST">
    <label class="label" for="gender">Φύλο:</label> <select class="input-field" id="gender" name="gender">
      <option value="male">
        Άνδρας
      </option>
      <option value="female">
        Γυναίκα
      </option>
      <option value="other">
        Άλλο
      </option>
    </select><br>
    <br>
    <label class="label" for="first_name">Όνομα:</label> <input class="input-field" type="text" id="first_name" name="first_name" required=""><br>
    <br>
    <label class="label" for="last_name">Επώνυμο:</label> <input class="input-field" type="text" id="last_name" name="last_name" required=""><br>
    <br>
    <label class="label" for="birth_date">Ημερομηνία Γέννησης:</label> <input class="input-field" type="date" id="birth_date" name="birth_date"><br>
    <br>
    <label class="label" for="category">Κατηγορία Αθλητικού Είδους:</label> <select class="input-field" id="category" name="category">
      <option value="clothing">
        Ρούχα
      </option>
      <option value="shoes">
        Παπούτσια
      </option>
      <option value="equipment">
        Εξοπλισμός
      </option>
      <option value="other">
        Άλλα
      </option>
    </select><br>
    <br>
    <label class="label" for="size">Μέγεθος:</label> <select class="input-field" id="size" name="size">
      <option value="S">
        S
      </option>
      <option value="M">
        M
      </option>
      <option value="L">
        L
      </option>
      <option value="XL">
        XL
      </option>
      <option value="40">
        40
      </option>
      <option value="41">
        41
      </option>
      <option value="42">
        42
      </option>
      <option value="43">
        43
      </option>
      <option value="44">
        44
      </option>
      <option value="45">
        45
      </option>
      <option value="46">
        46
      </option>
    </select><br>
    <br>
    <label class="label" for="color">Χρώμα Προτίμησης:</label> <input class="input-field" type="text" id="color" name="color"><br>
    <br>
    <label class="label" for="quantity">Ποσότητα:</label> <input class="input-field" type="number" id="quantity" name="quantity" min="1" max="99"><br>
    <br>
    <label class="label" for="address">Διεύθυνση Αποστολής:</label> <input class="input-field" type="text" id="address" name="address"><br>
    <br>
    <label class="label" for="city">Πόλη:</label> <input class="input-field" type="text" id="city" name="city"><br>
    <br>
    <label class="label" for="postal_code">Ταχυδρομικός Κωδικός:</label> <input class="input-field" type="text" id="postal_code" name="postal_code"><br>
    <br>
    <label class="label" for="phone">Τηλέφωνο Επικοινωνίας:</label> <input class="input-field" type="tel" id="phone" name="phone"><br>
    <br>
    <label class="label" for="email">Email:</label> <input class="input-field" type="email" id="email" name="email" required=""><br>
    <br>
    <label class="label" for="password">Συνθηματικό Πρόσβασης:</label> <input class="input-field" type="password" id="password" name="password"><br>
    <br>
    <label class="label" for="confirm_password">Επιβεβαίωση Συνθηματικού:</label> <input class="input-field" type="password" id="confirm_password" name="confirm_password"><br>
    <br>
    <label class="label" for="terms"><input class="input-field" type="checkbox" id="terms" name="terms" required=""> Δηλώνω ότι έχω διαβάσει και αποδέχομαι τους Όρους & Προϋποθέσεις.</label><br>
    <br>
    <input class="input-field" type="submit" value="Υποβολή" onclick="return checkMe();"> <input class="input-field" type="reset" value="Καθαρισμός">
  </form>
  <h1> Αναζητηση Παραγγελειας</h1>
  <form action="index.php" method="GET">
    <label class="label" for="email">Email:</label>
    <input class="input-field" type="email" name="email" required>
    <br> <br>
    <input class="input-field" type="submit" value="Υποβολή">
</form>
<script>
    function checkMe() {
        let firstname = document.getElementById("first_name").value;
        if (/^[α-ωΑ-ΩΆ-Ώά-ώ]+$/.test(firstname)) {
            document.getElementById("first_name").style.color = "";
            document.getElementById("errors").innerText = "";
        } else {
            document.getElementById("errors").innerText = "Το πεδίο του ονόματος είναι λάθος.";
            document.getElementById("first_name").style.color = "red";
            return false;
        }
        let lastname = document.getElementById("last_name").value;
        if (!/^[α-ωΑ-ΩΆ-Ώά-ώ\s]+$/.test(lastname) || lastname.length > 50) {
            document.getElementById("errors").innerText = "Το πεδίο του επωνύμου είναι λάθος.";
            document.getElementById("last_name").style.color = "red";
            return false;
        }
        let birthDate = document.getElementById("birth_date").value;
        let birth = new Date(birthDate);
        let today = new Date();
        let age = today.getFullYear() - birth.getFullYear();
        let monthDifference = today.getMonth() - birth.getMonth();
        if (monthDifference < 0 || (monthDifference === 0 && today.getDate() < birth.getDate())) {
            age--;
        }
        if (age < 16) {
            alert("Πρέπει να είστε άνω των 16.");
            return false;
        }
        let password = document.getElementById("password").value;
        let hasUpperCase = /[A-Z]/.test(password);
        let hasNumber = /\d/.test(password);
        let hasSpecialChar = /[!@#$%^&*(),.?":{}|<>]/.test(password);
        if (!(hasUpperCase && hasNumber && hasSpecialChar)) {
            alert("Ο κωδικός πρέπει να περιέχει τουλάχιστον ένα κεφαλαίο γράμμα, έναν αριθμό και έναν ειδικό χαρακτήρα.");
            return false;
        }
        let confirmPassword = document.getElementById("confirm_password").value;
        if (confirmPassword !== password) {
            alert("Οι κωδικοί δεν είναι ίδιοι.");
            return false;
        }
    
        return true;
    }
</script>
<?php
$db_server = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "personal";
$conn = mysqli_connect($db_server, $db_user, $db_password, $db_name);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $gender = mysqli_real_escape_string($conn, $_POST['gender']);
    $first_name = mysqli_real_escape_string($conn, $_POST['first_name']);
    $last_name = mysqli_real_escape_string($conn, $_POST['last_name']);
    $birth_date = mysqli_real_escape_string($conn, $_POST['birth_date']);
    $category = mysqli_real_escape_string($conn, $_POST['category']);
    $color = mysqli_real_escape_string($conn, $_POST['color']);
    $quantity = (int)$_POST['quantity'];
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $sql = "INSERT INTO f1 (onoma, eponymo, fylo, birthday, category, color, quantity, email) 
            VALUES ('$first_name', '$last_name', '$gender', '$birth_date', '$category', '$color', $quantity, '$email')";
    
    if (mysqli_query($conn, $sql)) {
        echo "<p style='color:green;'>Record added successfully!</p>";
    } else {
        echo "<p style='color:red;'>Error: " . mysqli_error($conn) . "</p>";
    }
} else if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['email'])) {
    $email = mysqli_real_escape_string($conn, $_GET['email']);
    $sql = "SELECT onoma, eponymo, fylo, birthday, category, color, quantity FROM f1 WHERE email = '$email'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        echo "<h2>Βρέθηκαν τα στοιχεία του χρήστη:</h2>";
        echo "<p><strong>Όνομα:</strong> " . $row['onoma'] . "</p>";
        echo "<p><strong>Επώνυμο:</strong> " . $row['eponymo'] . "</p>";
        echo "<p><strong>Φύλο:</strong> " . $row['fylo'] . "</p>";
        echo "<p><strong>Ημερομηνία Γέννησης:</strong> " . $row['birthday'] . "</p>";
        echo "<p><strong>Κατηγορία:</strong> " . $row['category'] . "</p>";
        echo "<p><strong>Χρώμα Προτίμησης:</strong> " . $row['color'] . "</p>";
        echo "<p><strong>Ποσότητα:</strong> " . $row['quantity'] . "</p>";
    } else {
        echo "<p style='color:red;'>Email does not exist.</p>";
    }
} else {
    echo "<p style='color:red;'>Email parameter is missing in the GET request.</p>";
}
mysqli_close($conn);
?>
</body>
</html>