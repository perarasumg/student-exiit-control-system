<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Siddharth Security System</title>
    <link rel="icon" type="image/x-icon" href="photos/sietk-logo.png">

    <style>
        body {
            margin-top: 350px;
            padding: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-image: url('photos/1.png');
            background-size:cover;
            background-repeat: no-repeat;
            background-position: center;
        }

        #login {
            background-color: rgba(255, 255, 255, 0.8);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.9);

        }

        h2,h3 {
            color: #333333;
            text-align: center;
            margin-bottom: 20px;
        }
       .box,#container{
        position:relative;
        top:-100px;
       }
h2{
    position: relative;
    top:-250px;
}
        table {
            width: 100%;

        }

        label {
            font-weight: bold;
            color: black;
            display: block;
            margin-bottom: 8px;
        }

        select,
        input[type="number"],input[type="password"] {
            width: calc(100% - 20px);
            padding: 10px;
            border: 1px solid #dddddd;
            border-radius: 5px;
            margin-top: 5px;
            margin-bottom: 15px;
            box-sizing: border-box;
        }

        input[type="radio"] {
            margin-right: 5px;
        }

        #submit {
            background-color: #0275d8;
            padding: 10px;
            border: none;
            border-radius: 5px;
            color: white;
            cursor: pointer;
            width: 100%;
        }

        #submit:hover {
            background-color: #025aa5;
        }

        /* Requires discs as characters */
        input[type="number"] {
            -webkit-text-security: disc !important;
        }

        /* Removes Spin Button */
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            /* display: none; <- Crashes Chrome on hover */
            -webkit-appearance: none;
            margin: 0;
            /* <-- Apparently some margin are still there even though it's hidden */
        }

        .box {
            height: max-content;
            max-width: max-content;
            background-color: rgba(205,205,205,0.8);
            border-radius: 10px;
            padding: 20px;

        }

        #container {
            justify-content: center;
            align-items: center;
            display: flex;
            /* margin: 20px; */
            /* background-color: #025aa5; */
            gap: 10%;
            /* margin-top: -300px; */

        }

        #sname {
            width: calc(100% - 20px);
            padding: 10px;
            border: 1px solid #dddddd;
            border-radius: 5px;
            margin-top: 5px;
            margin-bottom: 15px;
            box-sizing: border-box;
        }
        #security{
            height: 300px; 
            max-width: inherit;
        }
        #security-form{
            margin-top:50px;
        }
        #icon{
            justify-content: center;
            align-items: center;
            display: flex;
            /* background-color:green; */
            height:50px;
            width:50px;
        }
        #icon img{
            height: inherit;
            width: inherit;
           
        }
    </style>
    <script>
        function validation() {
            var password = Faculty_Login.password.value;
            var length = password.length;
            if (length != 6) {
                alert("password length must be 6 digits");
                return false;
            } else {
                return true;
            }
        }
        function validation2() {
            var password = security_login.password.value;
            var length = password.length;
            if (length != 6) {
                alert("password length must be 6 digits");
                return false;
            } else {
                return true;
            }
        }
    </script>
</head>

<body>

    <h2>Student Exit Autharization System</h2>
    <div id="container">
        
        <div class="box">
            <form action="creating_session.php" method="post" id="loginform" onsubmit="return validation()"
                name="Faculty_Login">
                <table >
                    <tr>
                        <td colspan="2" align="center">
                            <div id="icon">
                                <img src="photos/deparment.png" alt="department-image">
                            </div>
                        </td>
                    <tr>
                        <td colspan="2">
                            <h3>Department Login</h3>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="department"> Department</label></td>

                        <td> : <select id="department" name="course_name" required="required">
                                <option label="--click here--" selected></option>
                                <option label="MCA" value="MCA"></option>
                                <option label="MBA" value="MBA"></option>
                                <option label="M-tech" value="M-tech"></option>
                                <option label="B-tech" value="B-tech"></option>
                            </select>
                        </td>
                    </tr>

                    <tr>
                        <td> <label for="year">Year </label></td>
                        <td>1<sup>st</sup> :<input type="radio" name="year" value="1" required="required">
                            2<sup>nd</sup> :<input type="radio" name="year" value="2" required="required">
                            3<sup>rd</sup> :<input type="radio" name="year" value="3" required="required">
                            4<sup>th</sup> :<input type="radio" name="year" value="4" required="required">
                        </td>
                    </tr>
                    <tr>
                        <td><label for="pin" class="my-1 mr-2 strong">Password </label></td>
                        <td>: <input class="form-control pin" id="pin" type="number" inputmode="numeric"
                                autocomplete="off" name="password" required="required" maxlength="6"
                                oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <input type="submit" id="submit">
                        </td>
                    </tr>
                </table>
            </form>
        </div>

        <!-- ........................................... -->
        <div class="box" id="security">
            <form action="security.php" method="post" name="security_login" onsubmit="return validation2()" id="security-form">
                <table>
                     <tr>
                        <td colspan="2" align="center">
                            <div id="icon">
                                <img src="photos/security.png" alt="department-image">
                            </div>
                        </td>
                    <tr>
                    <tr>
                        <td colspan="2">
                            <h3>Security Login</h3>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="pin" class="my-1 mr-2 strong">Password </label></td>
                        <td> : <input class="form-control pin" id="pin" type="number" inputmode="numeric"
                                autocomplete="off" name="password" required="required" maxlength="6"
                                oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
                        </td>
                    </tr>

                    <tr>
                        <td colspan="2" id="sub-but"><input type="submit" id="submit"></td>
                    </tr>
                </table>
            </form>
        </div>
        <!-- ................................... -->
        <div class="box">
            <form action="Student_session.php" method="post" id="loginform" onsubmit="return validation()"
                name="Faculty_Login">
                <table>
                     <tr>
                        <td colspan="2" align="center">
                            <div id="icon">
                                <img src="photos/student.png" alt="department-image">
                            </div>
                        </td>
                    <tr>
                    <tr>
                        <td colspan="2">
                            <h3>Student Login</h3>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="department"> Student ID</label></td>
                        <td> : <input type="text" name="Sid" id="sname"></td>
                    </tr>


                    <tr>
                        <td><label for="pin" class="my-1 mr-2 strong">Password </label></td>
                        <td>: <input class="form-control pin" id="pin" type="password" 
                                autocomplete="off" name="password" required="required" maxlength="11"
                                >
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <input type="submit" id="submit">
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</body>

</html>
 <style>
