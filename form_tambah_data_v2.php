<!DOCTYPE html>
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

    <div id="messageBox" style="display:none; padding:10px; border-radius:5px; margin-top:10px;"></div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
    $(document).ready(function() {
        $('#submitBtn').click(function() {
            var name = $('#name').val();
            var email = $('#email').val();
            var errorMessage = '';

            if (name == '') {
                errorMessage += 'Nama tidak boleh kosong.<br>';
            }
            if (email == '') {
                errorMessage += 'Email tidak boleh kosong.<br>';
            }

            if (errorMessage != '') {
                $('#messageBox').html(errorMessage)
                    .css({
                        'background-color': 'red',
                        'color': 'white'
                    })
                    .fadeIn();
            } else {
                $.ajax({
                    url: 'simpan_data.php',
                    type: 'POST',
                    data: {
                        name: name,
                        email: email
                    },
                    success: function(response) {
                        $('#messageBox').html(response)
                            .css({
                                'background-color': 'green',
                                'color': 'white'
                            })
                            .fadeIn();
                    },
                    error: function() {
                        $('#messageBox').html('Terjadi kesalahan saat menyimpan data.')
                            .css({
                                'background-color': 'red',
                                'color': 'white'
                            })
                            .fadeIn();
                    }
                });
            }

            setTimeout(function() {
                $('#messageBox').fadeOut();
            }, 5000);
        });
    });
    </script>
</body>
</html>
