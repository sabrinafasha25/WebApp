<html>

<head>
    <title>Student Details</title>
    <!--
you can also include CSS and JavaScript inside the head
block
-->
</head>

<body>
    <!--
content of your webpage can be static or dynamic
-->
    <font face"arial" size="2" color="#000000">
        <form method="post" action="student_details.php">
            <table align="center">
                <tr>
                    <td>Name</td>
                    <td>:</td>
                    <td><input type="text" name="name" size="30"></td>
                </tr>

                <tr>
                    <td>Matric No</td>
                    <td>:</td>
                    <td><input type="text" name="matricNo" size="30"></td>
                </tr>

                <tr>
                    <td>Gender</td>
                    <td>:</td>
                    <td><input type="radio" name="gender">Male</td>
                    <td><input type="radio" name="gender">Female</td>
                </tr>

                <tr>
                    <td>Date of Birth</td>
                    <td>:</td>
                    <td><input type="text" name="dateOfBirth" size="30"></td>
                </tr>

                <tr>
                    <td>Citizenship</td>
                    <td>:</td>
                    <td><input type="text" name="citizenship" size="30"></td>
                </tr>

                <tr>
                    <td>Marital Status</td>
                    <td>:</td>
                    <td><input type="radio" name="maritalStatus">Single</td>
                    <td><input type="radio" name="maritalStatus">Married</td>
                </tr>

                <tr>
                    <td>Religion</td>
                    <td>:</td>
                    <td>
                        <select name="religion" id="religion">
                            <option value="0">Select</option>
                            <option value="1">Islam</option>
                            <option value="2">Christ</option>
                            <option value="3">Buddha</option>
                            <option value="4">Hindu</option>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td>Student Activity Status</td>
                    <td>:</td>
                    <td><input type="radio" name="activityStatus">Active</td>
                    <td><input type="radio" name="activityStatus">Inactive</td>
                </tr>

                <tr>
                    <td>Current Year of Study</td>
                    <td>:</td>
                    <td><input type="text" name="currentYear" size="30"></td>
                </tr>

                <tr>
                    <td>Identity No</td>
                    <td>:</td>
                    <td><input type="text" name="idNo" size="30"></td>
                </tr>

                <tr>
                    <td>Email</td>
                    <td>:</td>
                    <td><input type="text" name="email" size="30"></td>
                </tr>

                <tr>
                    <td colspan="2" align="center"><input type="submit" value="Submit">
                    <td align="center"><input type="reset" value="Clear">
                </tr>
            </table>
        </form>
    </font>
</body>

</html>