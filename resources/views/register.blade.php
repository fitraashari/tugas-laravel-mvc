
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Registrasi</title>
</head>
<body>
    <h1>Buat Account Baru!</h1>
    <form action="/welcome" method="post">
    @csrf
        <h2>Sign up Form</h2>
        <div>
        <label for="fname">First name:</label><br>
        <input type="text" name="fname" id="fname"></p>
        <p>
        <label for="lname">Last name:</label><br>
        <input type="text" name="lname" id="lname"></p>
        <p>
        <label for="gender">Gender</label><br>
        <input type="radio" name="gender" id="gender" value="Male">Male <br>
        <input type="radio" name="gender" id="gender" value="Female">Female<br>
        <input type="radio" name="gender" id="gender" value="Other">Other </p>
        <p>
        <label for="nationality">Nationality</label><br>
        <select name="nationality" id="nationality">
            <option value="Indonesian">Indonesian</option>
            <option value="Singaporean">Singaporean</option>
            <option value="Malaysian">Malaysian</option>
            <option value="Australian">Australian</option>
        </select></p>
        <p>
        Language Spoken:<br>
        <input type="checkbox" name="id" id="id" value="Bahasa Indonesia"><label for="id">Bahasa Indonesia </label><br>
        <input type="checkbox" name="eng" id="eng" value="English"><label for="eng">English </label><br>
        <input type="checkbox" name="oth" id="oth" value="Other"><label for="oth">Other</label></p>
        <p>
        <label for="bio">Bio</label><br>
        <textarea name="bio" id="bio" cols="30" rows="5"></textarea></p>
        <button type="submit">Sign Up</button>
    </form>
</body>
</html>