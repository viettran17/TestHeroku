<!DOCTYPE html>
<html>
<head>
    <title>Register the course</title>
</head>
<body>
    <form action="doRegister.php" method="post">
    <table border="0" width="50%">
        <tr>
            <td>Your name:</td>
            <td><input type="text" name="txtName"></td>
        </tr>
        <tr>
            <td>Course:</td>
            <td>
                <select name="cbCourse">
                    <option value="C#">C#</option>
                    <option value="Java">Java</option>
                    <option value="Cloud">Cloud</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Birthday:</td>
            <td><input type="date" name="dob"></td>
        </tr>
        <tr>
            <td>Gender:</td>
            <td>
                <input type="radio" name="gender" value="male"> Male
                <input type="radio" name="gender" value="female"> Female
                <input type="radio" name="gender" value="other"> Other
            </td>
        </tr>
        <tr>
            <td>Favorites</td>
            <td>
                <input type="checkbox" name="book" value="book">Books
                <input type="checkbox" name="car" value="car">Cars
            </td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="Register" value="Submit"></td>
        </tr>
    </table>
    </form>
</body>
</html>