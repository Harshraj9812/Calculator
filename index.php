<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <!-- --------------------TITLE ICON -------------->
	<link rel = "shortcut icon" href = "image.ico">
    <title>HR CALCULATOR</title>
	<!-- ------------------------------------------ -->
    
    <!-- ---------------------JS-------------------- -->
    <script>
        function insert(num)
        {
            document.form.textview.value = document.form.textview.value+num
        }
        function equal()
        {
            var exp = document.form.textview.value;
            if(exp)
            {
                document.form.textview.value = eval(exp);
            }
        }
        function clean()
        {
            document.form.textview.value ="";
        }
        function back()
        {
            var exp = document.form.textview.value;
            document.form.textview.value = exp.substring(0,exp.length-1);
        }
    </script>
    <!-- -------------------------------------------- -->

    <!-- ----------------------CSS------------------- -->
    <style>
    *
    {
        margin: 0;
        padding: 0;
    }
    body
    {
        background:black;
    }
    .button
    {
        width: 50px;
        height: 50px;
        font-size: 25px;
        margin: 2px;
        cursor: pointer;
        background: rgb(31, 29, 29);
        color: chartreuse;
        border: none;
    }
    .button:hover
    {
        border: dotted 2px chartreuse;
        transform: scaleY(1.1);
    }

    .textview
    {
        width: 203px;
        margin: 5px;
        font-size: 25px;
        padding: 5px;
        background: rgb(31, 29, 29);
        border: solid 2px chartreuse;
        color: chartreuse;

    }
    .main
    {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translateX(-50%) translateY(-50%);
    }
    .footer
    {
	width: 99.9%;
	background-color: black;
	background-size: cover;
	border: 1px white;
	border-style: dotted;
    padding: 0;
    position: absolute;
    bottom: 0;
    display: block;
    }
    p
    {
	text-align: center;
	color: chartreuse;
	font-size: 1.4rem;
	padding: 15px;
    }
    p a
    {
	color: chartreuse;
    }
    
    </style>
    <!-- ------------------------------------------------- -->

</head>
<body>

<section>
    <div class="header">
        <p style="text-decoration: underline;font-size: 2rem; font-family: monospace;">Calculator Developed On JavaScript</p>	
    </div>		
</section>
    <div class="main">
        <form name= "form">
            <input class="textview" name="textview">
        </form>
                <table>
                    <tr>
                    <td><input class="button"  type="button" value="C" onclick="clean()"></td>
                    <td><input class="button"  type="button" value="<" onclick="back()"></td>
                    <td><input class="button"  type="button" value="/" onclick="insert('/')"></td>
                    <td><input class="button"  type="button" value="x" onclick="insert('*')"></td>
                    </tr>
                    <tr>
                        <td><input class="button"  type="button" value="7" onclick="insert(7)"></td>
                        <td><input class="button"  type="button" value="8" onclick="insert(8)"></td>
                        <td><input class="button"  type="button" value="9" onclick="insert(9)"></td>
                        <td><input class="button"  type="button" value="-" onclick="insert('-')"></td>
                    </tr>
                    <tr>
                        <td><input class="button"  type="button" value="4" onclick="insert(4)"></td>
                        <td><input class="button"  type="button" value="5" onclick="insert(5)"></td>
                        <td><input class="button"  type="button" value="6" onclick="insert(6)"></td>
                        <td><input class="button"  type="button" value="+" onclick="insert('+')"></td>
                    </tr>
                    <tr>
                        <td><input class="button"  type="button" value="1" onclick="insert(1)"></td>
                        <td><input class="button"  type="button" value="2" onclick="insert(2)"></td>
                        <td><input class="button"  type="button" value="3" onclick="insert(3)"></td>
                        <td rowspan="5px"><input class="button" style="height: 107px;"  type="button" value="=" onclick="equal()"></td>
                    </tr>
                    <tr>
                        <td colspan="2px";><input class="button" style="width: 107px;"  type="button" value="0" onclick="insert(0)"></td>
                        <td><input class="button"  type="button" value="." onclick="insert('.')"></td>
                    </tr>
                </table>
                
                
    </div>

<!-- FOOTER -->
<section>
    <div class="footer">
        <p>© 2018-<?php echo date("Y");?>.All rights reserved | Developed by 
            <a href="https://www.facebook.com/HArsh.Raj.2807">Harsh Raj</a>
        </p>	
    </div>		
</section>


</body>
</html>