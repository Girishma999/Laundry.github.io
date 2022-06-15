<!DOCTYPE html>
<html>

<head>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
        }
        
        form {
            border: 3px solid #f1f1f1;
        }
        
        input[type=text],
        input[type=password],
        input[type=number],
        input[type=gmail] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }
        
        button {
            background-color: #04AA6D;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
        }
        
        button:hover {
            opacity: 0.8;
        }
        
        .cancelbtn {
            width: auto;
            padding: 10px 18px;
            background-color: #f44336;
        }
        
        .imgcontainer {
            text-align: center;
            margin: 24px 0 12px 0;
        }
        
        .container {
            padding: 16px;
        }
        
        span.psw {
            float: right;
            padding-top: 16px;
        }
        /* Change styles for span and cancel button on extra small screens */
        
        @media screen and (max-width: 300px) {
            span.psw {
                display: block;
                float: none;
            }
            .cancelbtn {
                width: 100%;
            }
        }
    </style>
</head>

<body>

    <h2>Login Form</h2>

    <form action="appointment.php" method="post">


        <div class="container">
            <label for="uname"><b>Full Name</b></label>
            <input type="text" placeholder="Enter Fullname" name="FullName" required>

            <label for="pn"><b>Phone Number</b></label>
            <input type="number" placeholder="Enter Phone number" name="" required>

            <label for="mail"><b>E-mail</b></label><br>
            <input type="gmail" placeholder="Enter gmail" required><br><br>

            <label for="Address"><b>Address</b></label><br>
            <input type="text" placeholder="Enter Address" required>

            <label for="pickupdate"><b>Select Your pickup date</b></label><br>
            <input type="date" placeholder="Enter date" required><br><br>

            <label for="pickuptime"><b>Select your pickup time</b></label><br>
            <select>
            <option value="">  </option>
            <option value="Between 10.00am to 11.00am"> Between 10.00am to 11.00am </option>
            <option value="Between 11.00am to 12.00noon"> Between 11.00am to 12.00noon </option>
            <option value="Between 12.00noon to 1.00pm"> Between 12.00noon to 1.00pm </option>
            <option value="Between 1.00pm to 2.00pm"> Between 1.00pm to 2.00pm </option>
            <option value="Between 2.00pm to 3.00pm"> Between 2.00pm to 3.00pm </option>
            <option value="Between 3.00pm to 4.00pm"> Between 3.00pm to 4.00pm </option>
            <option value="Between 4.00pm to 5.00pm"> Between 4.00pm to 5.00pm </option>
            <option value="Between 7.00pm to 8.00pm"> Between 7.00pm to 8.00pm </option>
            <option value="Between 8.00pm to 9.00pm"> Between 8.00pm to 9.00pm </option>
            <option value="Between 9.00pm to 10.00pm"> Between 9.00pm to 10.00pm </option>
            <option value="Between 10.pm to 11.00pm"> Between 10.pm to 11.00pm </option>
            <option value=" ">  </option>
          </select><br><br>

            <label for="typeofser"><b>Type of service</b></label><br><br>
            <input type="checkbox" value="Dry cleaning">
            <label>Dry cleaning</label><br>
            <input type="checkbox" value="Normal Wash">
            <label>Normal Wash</label><br>
            <input type="checkbox" value="Iron and Hang">
            <label>Iron and hang using hanger</label><br>
            <input type="checkbox" value="Fold and pack">
            <label>Fold and package only</label><br>


            <button type="submit" value="Submit">Submit</button>
            <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
        </div>


    </form>

</body>

</html>