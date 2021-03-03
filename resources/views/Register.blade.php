<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pendaftaran</title>
</head>

<body>

    <h1>BUAT ACCOUNT BARU!</h1>

    <h3>Sign Up Form</h3>

    <form action="Welcome.html" method="POST">
        <label for="fname">First Name :</label>
        <br> <br> <input type="text" name="fname" id="fname">
        <br> <br> <label for="lname">Last Name :</label>
        <br> <br> <input type="text" name="lname" id="lname">
        <br>

        <p>Gender :</p>
        <input type="radio" name="male" id="male">
        <label for="male">Male</label> <br>
        <input type="radio" name="female" id="female">
        <label for="female">Female</label> <br>
        <input type="radio" name="other" id="other">
        <label for="other">Other</label> <br>

        <p>Nationality :</p>
        <select name="Nationality" id="Nationality">
            <option value="INDONESIA">INDONESIA</option>
            <option value="SINGAPURA">SINGAPURA</option>
            <option value="MALAYSIA">MALAYSIA</option>

        </select>
        <p>Language Spoken :</p>
        <input type="checkbox" name="BahasaIndonesia" id="BahasaIndonesia">
        <label for="BahasaIndonesia">Bahasa Indonesia</label> <br>
        <input type="checkbox" name="English" id="English">
        <label for="English">English</label> <br>
        <input type="checkbox" name="Other" id="Other">
        <label for="Other">Other</label> <br>

        <p>Bio :</p>
        <textarea name="Bio" id="Bio" cols="30" rows="8"></textarea>
        <br> <input type="submit" value="Sign Up">
    </form>

</body>

</html>