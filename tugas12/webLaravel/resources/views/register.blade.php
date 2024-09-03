<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
</head>
<body>
    <h1>Buat Account Baru!</h1>

    <h3>Sign Up Form</h3>
    <form action="/welcome" method="post">
        @csrf
        <label for="firstName">First name: </label><br><br>
        <input type="text" name="fName" required>
        <br><br>
        <label for="lastName">Last name: </label><br><br>
        <input type="text" name="lName" required>
        <br><br>
        <label for="gender">Gender: </label> <br><br>
        <input type="radio" id="option1" name="options" value="1"> Male <br>
        <input type="radio" id="option2" name="options" value="2"> Female <br>
        <input type="radio" id="option3" name="options" value="3"> Other
        <br><br>
        <label for="nationality">Nationality: </label> <br><br>
        <select name="country">
            <option value="indonesia">Indonesia</option>
            <option value="malaysia">Malaysia</option>
            <option value="thailand">Thailand</option>
        </select>
        <br><br>
        <label for="spoken">Language Spoken: </label><br><br>
        <input type="checkbox" name="language">Bahasa Indonesia <br>
        <input type="checkbox" name="language">English <br>
        <input type="checkbox" name="language">Other 
        <br><br>
        <label for="bio">Bio: </label><br><br>
        <textarea name="bio" rows="10" cols="30"></textarea><br>
        <input type="submit" value="Sign Up">
    </form>
</body>
</html>