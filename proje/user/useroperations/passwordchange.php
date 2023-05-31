<?php


?>


<!DOCTYPE html>
<html>

<head>
    <title>Password Update</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet'>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Lato', sans-serif;
            background-color: #f6f6f6;
        }

        h1 {
            font-size: 3em;
            text-align: center;
            color: #444;
            margin-top: 50px;
            margin-bottom: 30px;
        }

        .container {
            max-width: 400px;
            margin: 0 auto;
            padding-top: 50px;
        }

        form {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
            padding: 40px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
            color: #444;
        }

        input[type=email],
        input[type=password],
        input[type=text] {
            width: 100%;
            padding: 15px 20px;
            margin: 8px 0;
            border-radius: 30px;
            border: none;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            background-color: #f9f9f9;
            font-size: 1.1em;
            outline: none;
        }

        input[type=submit] {
            background-color: #4CAF50;
            color: white;
            padding: 14px 28px;
            margin: 20px 0 10px;
            border: none;
            border-radius: 30px;
            cursor: pointer;
            font-size: 1.2em;
            transition: background-color 0.3s ease-in-out;
            outline: none;
        }

        input[type=submit]:hover {
            background-color: #3e8e41;
        }

        @media only screen and (max-width: 480px) {
            h1 {
                font-size: 2em;
                margin-top: 30px;
            }

            .container {
                max-width: 95%;
                padding-top: 30px;
            }

            form {
                padding: 30px;
            }

            input[type=email],
            input[type=password],
            input[type=text] {
                padding: 10px 15px;
                font-size: 1em;
            }

            input[type=submit] {
                padding: 12px 18px;
                font-size: 1.1em;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Password Reset</h1>
        <form action="passwordchange.php" method="post">


            <label for="password">Current Password</label>
            <input placeholder="current password" type="text" id="password" name="currentpassword" required>

            <label for="password">New Password</label>
            <input placeholder="new password" type="text" id="password" name="newpassword" required>

            <label for="password">Confirm Password</label>
            <input placeholder="confirm new password" type="text" id="password" name="confirmpassword" required>

            <input type="submit" value="Update Password">
        </form>
    </div>
</body>

</html>