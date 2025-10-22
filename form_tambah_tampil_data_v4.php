<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form menggunakan Ajax PHP</title>
</head>
<body>
    <form id="myForm">
        <label for= "name">Nama:</label><br>
        <input type = "text" id="name" placeholder="Masukkan Nama"><br><br>

        <label for="email">Email: </label><br>
        <input type="text" id="email" placeholder="Masukkan Email"><br><br>

        <input type="button" id="submitBtn" value="Submit">
    </form>
    <div id="message"></div>
    
    <h2>Menampilkan Data</h2>
    <div id="tampilData"></div>
    <!-- Data produk akan ditampilkan di sini melalui AJAX -->
</body>
</html>