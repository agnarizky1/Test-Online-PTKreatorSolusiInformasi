<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP_02</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/Build/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>

<body>

    <h2>PHP Form Validation Example</h2>

    <form id="input_form">
        Nama: <input type="text" name="nama" placeholder="nama" id="nama">

        <br><br>
        Alamat: <input type="text" name="alamat" placeholder="alamat" id="alamat">

        <br><br>
        Nomor: <input type="text" name="nomor" placeholder="nomor" id="nomor">
        <br><br>
        Gender:
        <input type="radio" name="gender" id="gender" value="female">Female
        <input type="radio" name="gender" id="gender" value="male">Male
        <input type="radio" name="gender" id="gender" value="other">Other
        <br><br>

        <input type="button" value="Submit" id="submit">
    </form>

    <div class="ajax-data"></div>

    <script type="text/javascript">
        $('#submit').on('click', function() {
            //alert()
            $.ajax({
                type: 'post',
                url: 'server.php',
                data: $('#input_form').serialize(),
                success: function(response) {
                    $('ajax').html(response)
                },
                error: function() {
                    alert('error')
                }
            })
        })
    </script>

</body>

</html>