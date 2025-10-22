<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form menggunakan Ajax PHP</title>
</head>
<body>
    <form id="myform">
        <label for= "name">Nama:</label><br>
        <input type = "text" id="name" placeholder="Masukkan Nama"><br><br>

        <label for="email">Email: </label><br>
        <input type="text" id="email" placeholder="Masukkan Email"><br><br>

        <input type="button" id="submitBtn" value="Submit">
    </form>
    <div id="message"></div>
    <h2>Menampilkan Data</h2>
    <div id="tampilData"></div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function(){
    $('#submitBtn').click(function(){
        var name = $('#name').val();
        var email = $('#email').val();
        var errorMessage = '';

        if (name == ''){
            errorMessage += 'Nama tidak boleh kosong.<br>';
        }
        if (email == ''){
            errorMessage += 'Email tidak boleh kosong.<br>';
        }

        if (errorMessage != ''){
            $('#message').html('<div style="color:red;">' + errorMessage + '</div>');
        } else {
            $.ajax({
                url:'simpan_data.php',
                type:'POST',
                data:{
                    name:name,
                    email:email
                },
                success:function(response){
                    $('#message').html(response);
                    $('#name').val('');
                    $('#email').val('');
                    loadData();
                }
            });
        }
    });

    function loadData(){
        $.ajax({
            url:'tampil_data_v3.php',
            type:'GET',
            success:function(response){
                $('#tampilData').html(response);
            }
        });
    }
    loadData();
});
</script>

</body>
</html>