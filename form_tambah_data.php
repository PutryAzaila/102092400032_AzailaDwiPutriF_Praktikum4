<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form menggunakan Ajax PHP</title>
</head>
<body>
    <form id="myForm">
        <label for="name">Nama:</label><br>
        <input type="text" id="name" name="name" placeholder="Masukkan Nama"><br><br>

        <label for="email">Email:</label><br>
        <input type="text" id="email" name="email" placeholder="Masukkan Email"><br><br>

        <input type="button" id="submitBtn" value="Submit">
    </form>

    <div id="message"></div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#submitBtn").click(function() {
                var name = $("#name").val();
                var email = $("#email").val();
                var errorMessage = "";

                if (name == "") {
                    errorMessage += "Nama tidak boleh kosong.<br>";
                }

                if (email == "") {
                    errorMessage += "Email tidak boleh kosong.<br>";
                }

                if (errorMessage != "") {
                    $("#message").html('<div style="color: red;">' + errorMessage + '</div>');
                } else {
                    $.ajax({
                        url: 'simpan_data_v2.php',
                        type: 'POST',
                        data: {
                            name: name,
                            email: email
                        },
                        success: function(response) {
                            $("#message").html(response);
                        }
                    });
                }
            });
        });
    </script>
</body>
</html>