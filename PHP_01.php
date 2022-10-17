<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP_01</title>
</head>

<body>
    <?php
    // define variables and set to empty values
    $namaErr = $alamatErr = $genderErr = $nomorErr = "";
    $nama = $alamat = $gender = $nomor = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["nama"])) {
            $namaErr = "nama is required";
        } else {
            $nama = test_input($_POST["nama"]);
        }

        if (empty($_POST["alamat"])) {
            $alamatErr = "alamat is required";
        } else {
            $alamat = test_input($_POST["alamat"]);
        }

        if (empty($_POST["nomor"])) {
            $nomorErr = "nomor is required";
        } else {
            $nomor = test_input($_POST["nomor"]);
        }

        if (empty($_POST["gender"])) {
            $genderErr = "Gender is required";
        } else {
            $gender = test_input($_POST["gender"]);
        }
    }

    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>

    <h2>PHP Form Validation Example</h2>
    <p><span class="error">* required field</span></p>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        Nama: <input type="text" name="nama">
        <span class="error">* <?php echo $namaErr; ?></span>
        <br><br>
        Alamat: <input type="text" name="alamat">
        <span class="error">* <?php echo $alamatErr; ?></span>
        <br><br>
        Nomor: <input type="number" name="nomor">
        <span class="error">*<?php echo $nomorErr; ?></span>
        <br><br>
        Gender:
        <input type="radio" name="gender" value="female">Female
        <input type="radio" name="gender" value="male">Male
        <input type="radio" name="gender" value="other">Other
        <span class="error">* <?php echo $genderErr; ?></span>
        <br><br>
        <input type="submit" name="submit" value="Submit">
    </form>


</body>

</html>