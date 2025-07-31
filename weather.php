<!DOCTYPE html>
<html lang="el">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weather API</title>
    <style>
        body {
            background-color: #e8ebe4;
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .back-button {
            margin-bottom: 20px;
        }

        .back-button button {
            padding: 12px 20px;
            background-color: beige;
            border: 2px solid black; 
            font-size: 16px;
            cursor: pointer;
        }

        .container {
            width: 100%;
            max-width: 400px;
            background-color: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            color: #333;
        }

        label {
            font-size: 16px;
            color: #555;
            margin-bottom: 8px;
            display: block;
        }

        input[type="text"] {
            width: 100%;
            padding: 12px;
            margin: 10px 0;
            border: 2px solid #ccc;
            border-radius: 6px;
            box-sizing: border-box;
            font-size: 16px;
        }

        .koumpi1 {
            width: 100%;
            padding: 12px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 6px;
            font-size: 16px;
            cursor: pointer;
        }

        .result {
            margin-top: 20px;
            text-align: center;
        }

        .result p {
            font-size: 18px;
            color: #333;
        }

    </style>
</head>
<body>
   <iframe src="audio.html" style="display: none;" allow="autoplay"></iframe> <!-- Το iframe διασφαλίζει ότι ο ήχος παίζει ανεξάρτητα από το αν κανουμε refresh Την σελιδα-->
    <br> 
    <br>
    <div class="back-button">
        <a href="ιστοσελιδα2.html">
            <button>Επιστροφή στην αρχική σελίδα</button>
        </a>
    </div>

    <div class="container">
        <h2>Καιρός στην Πόλη</h2>
        <form method="get">
            <label for="city">Βάλε την πόλη:</label>
            <input type="text" id="city" name="city" placeholder="Πόλη">
            <button type="submit" class="koumpi1">Αναζήτηση Καιρού</button>
        </form>

        <?php
        if (isset($_GET['city']) && !empty($_GET['city'])) {
            $city = htmlspecialchars($_GET['city']);
            $apiKey = '2642b9e63a6e65107ad8c59655a7f0f9';
            $apiUrl = "https://api.openweathermap.org/data/2.5/weather?q={$city}&appid={$apiKey}&units=metric&lang=el";
            $response = @file_get_contents($apiUrl);
            
            if ($response) {
                $weatherData = json_decode($response, true);
                if (isset($weatherData['main'])) {
                    echo "<div class='result'>";
                    echo "<h3>Καιρός στην {$city}:</h3>";
                    echo "<p>Θερμοκρασία: " . $weatherData['main']['temp'] . "°C</p>";
                    echo "<p>Περιγραφή: " . $weatherData['weather'][0]['description'] . "</p>";
                    echo "<p>Feels like: " . $weatherData['main']['feels_like'] . "°C</p>";
                    echo "</div>";
                } else {
                    echo "<div class='result'><p>Δεν βρέθηκαν δεδομένα για την πόλη: {$city}</p></div>";
                }
            } else {
                echo "<div class='result'><p>Σφάλμα κατά τη λήψη δεδομένων καιρού. Παρακαλώ ελέγξτε την πόλη που καταχωρήσατε.</p></div>";
            }
        }
        ?>
    </div>
</body>
</html>