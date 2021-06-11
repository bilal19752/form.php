<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <style>
        *{
            margin: 0;
        }
        .container{
            width: 100%;
            height: 450px;
            background-color: #81dcf1 !important;
            padding-top: 50px;
            padding-bottom: 120px;
        }
        .subc{
            display: block;
            margin-left: auto;
            margin-right: auto;
            background-color: white;
            margin-top: 20px;
            width: 50%;
            text-align: center;
            /* margin-left: 30em; */
            padding-top: 60px;
            padding-bottom: 60px;
        }
        h2{
            color: #4493f4;
            margin-right: 11.2em;
            font-family: open Sans;
            margin-bottom: 50px;
        }
        .lab{
            text-align: left;
            color: #84898e;
                margin-right: 23.8em;
                font-family: open Sans;
        }
        /* OUR FIELD */
        .field{
            background-color: #e6e6e6;
            border: #e6e6e6;
            padding:15px 150px 15px 150px;
            border-radius: 5px;
        }
        .f2{
            margin-top: 5px;
           margin-bottom: 15px;
        }
        /* OUR FIELD */

        /* <!-- SUBMIT BUTTON --> */
        #login{
            display: block;
            margin-left: auto;
            margin-right: auto;
            background-color: #3585f7;
            padding:15px 100px 15px 100px;
            width: 43%;
            /* margin-left: 53.5px; */

            border-radius: 5px;
            margin-top: 5px;
           margin-bottom: 15px;
        }
        .login2{
            background-color: #3585f7;
            border: #3585f7;
            color: white;
        /* <!-- SUBMIT BUTTON --> */
        }
        /* <!-- REMEMBER AND FORGET PASSWORD --> */
        .rm{
            /* display: flex; */
            color: #84898e;
        }  
        /* .a{
            float: left;
        } */
        .fp{
            margin-left: 15.2em;
            text-decoration: none;
        }
        /* <!-- REMEMBER AND FORGET PASSWORD --> */
    </style>
</head>
<body>
    <div class="container">
        <!-- SECOND DIV -->
        <div class="subc">
    <h2>ACCOUNT LOGIN</h2>
    <form action="form.php" method="POST" class="form">
        <label for="USERNAME" class="lab">USERNAME</label></br>
        <input type="text" name="USERNAME" class="field f2"></br>
        <label for="PASSWORD" class="lab">PASSWORD</label></br>
        <input type="password" name="PASSWORD" class="field f2"></br>
        <!-- REMEMBER AND FORGET PASSWORD -->
        <div class="rm"><input type="checkbox">
        <label for="Remember Me" class="a">Remember Me</label>
        <a href="#" class="fp">Forget Password?</a>
        </div>
         <!-- REMEMBER AND FORGET PASSWORD -->
        <!-- SUBMIT BUTTON -->
        <div id="login"><input type="submit" value="LOG IN" class="login2"></div>
        <!-- SUBMIT BUTTON -->
    </form>
</div>
<!-- SECOND DIV -->
</div>
</body>
</html>