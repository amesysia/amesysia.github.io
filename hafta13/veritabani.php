<?php
$servername = "localhost";
$username = "root";
$password = "";
$dnmame = "myDB" ;
// Create connection
$conn = new mysqli($servername, $username, $password, $dnmame);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['gonder'])) {
    $ad = $_POST['name'];
    $soyad = $_POST['surname'];
    $email = $_POST['email'];
    
    $sql = "INSERT INTO MyGuests (firstname, lastname, email) 
            VALUES ('$ad', '$soyad', '$email')";

    if ($conn->query($sql) === TRUE) {
        echo "Yeni kayıt başarıyla oluşturuldu.";
    } else {
        echo "Hata: " . $sql . "<br>" . $conn->error;
    }
}

mysqli_close($conn);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <style>
        body {
            font-family: sans-serif;
            background-color: #f0f2f5;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding-top: 50px;
        }
        .container {
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            width: 300px;
        }
        input {
            width: 100%;
            padding: 8px;
            margin: 10px 0;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            background-color: #007bff;
            color: white;
            border: none;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
        .basari { color: green; font-weight: bold; margin-bottom: 10px; }
    </style>
</head>
<body>

    <div class="container">
        <?php if(isset($mesaj)) echo "<p class='basari'>$mesaj</p>"; ?>
        
        <form method="POST">
            <h3>Kişi Kayıt Formu</h3>
            Ad: <input type="text" name="name" required>
            Soyad: <input type="text" name="surname" required>
            Email: <input type="email" name="email" required>
            <input type="submit" name="gonder" value="Veritabanına Gönder">
        </form>
    </div>

</body>
</html>
