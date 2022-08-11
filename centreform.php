<html>
<body>
    <title>Register as Centre Owner</title>
    <h2>Register as an Adoption Centre Owner</h2>
    <h4>Please enter your details below: </h4>
    <br>
    <form action="centreinsert.php" method="post">
        <p>
        userID(placeholder):
        <input type="text" name="userID" required="required">
        </p>
        <p>
        Centre name:
        <input type="text" name="centreName" required="required">
        </p>
        <p>
        SSM:
        <input type="text" name="centreSSM" required="required">
        </p>
        <p>
        Address:
        <textarea type="text" name="address" required="required"> </textarea>
        </p>
        <p>
        Phone number:
        <input type="tel" name="centrePhone" required="required">
        </p>
        <p>
        Your email:
        <input type="email" name="centreEmail" required="required">
        </p>
        <p>
        Centre description:
        <textarea type="text" name="centreDesc"> </textarea>
        </p>
        <input type="submit" value="Submit Application">
    </form>
</body>
</html>

