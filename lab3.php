<html>
<head>
    <title>Lab Activity 3</title>
    <link rel = "stylesheet" href = "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <link rel = "stylesheet" href = "style_a.css">
</head>
</head>
<body>
        <?php  
                define("NAME" , "Celine Joie V. Buenaventura");
                define("STUDENT NUMBER" , "2018-02573-MN-0");
                define("ADDRESS" , "B38 L64 Southfairway Homes Landayan, San Pedro, Laguna");
                define("EMAILADDRESS" , "buenaventuraceline277@gmail.com");
                define("CONTACTNUMBER" , "09392948571");
                define("WEBADDRESS" , "None");
                define("LABTITLE" , "Laboratory Activity No.3");
                define("DESCRIPTION" , "Working with Data Types and Operators");
    
                $myinteger = 10;
                $myfloat = 10.57;
                $mystring = '10 apples';
                $myboolean = TRUE;
                $mynull = NULL;
                $myarray = array(1,2,3);
        ?>
    <div class = "header">
        <?php
            //header
            echo LABTITLE."<br>";
            echo DESCRIPTION."<br>";
            echo NAME."<br>";
            echo ADDRESS."<br>";
            echo EMAILADDRESS."<br>";
            echo CONTACTNUMBER."<br>";
            echo WEBADDRESS."<br>";
    
        ?>
    </div>

    <div class = "navigation_section">
        <a href="lab1.php" ><i class="fa fa-desktop" aria-hidden="true"></i>Lab 1 - Hello World</a>
        <a href="lab2.php"><i class="fa fa-desktop" aria-hidden="true"></i>Lab 2 -Creating Basic PHP Script</a>
        <a href="lab3.php" class = "active"><i class="fa fa-desktop" aria-hidden="true"></i>Lab 3 - Working with Data Types and Operators</a>
        <a href="lab4.php"><i class="fa fa-desktop" aria-hidden="true"></i>Lab 4- Function and Control Structures - Number to Words</a>
        <a href="lab5.php"><i class="fa fa-desktop" aria-hidden="true"></i>Lab 5 - Functions and Control Structures – Magic Square</a>
        <a href="lab6.php"><i class="fa fa-desktop" aria-hidden="true"></i>Lab 6 - String Function in PHP</a>
        <a href="lab7.php"><i class="fa fa-desktop" aria-hidden="true"></i>Lab 7 - Regular Expression</a>
        <a href="lab8.php"><i class="fa fa-desktop" aria-hidden="true"></i>Lab 8 - Array Manipulations – Word Counter</a>
        <a href="lab9.php"><i class="fa fa-desktop" aria-hidden="true"></i>Lab 9 - Handling User Input – User Registration</a>
        <a href="lab10.php"><i class="fa fa-desktop" aria-hidden="true"></i>Lab 10 - Handling User Input – Dynamic Page</a>
    </div>


    <div class = "content_section">
        <?php
                //content section
                echo '<table width="95%" border=3 style="border-collapse: collapse;">
                        <tr><td width="50%">1a. $myinteger</td><td>', var_dump($myinteger), '</td></tr>
                        <tr><td width="50%">1b. $myfloat</td><td>', var_dump($myfloat), '</td></tr>
                        <tr><td width="50%">1c. $mystring</td><td>', var_dump($mystring), '</td></tr>
                        <tr><td width="50%">1d. $myboolean</td><td>', var_dump($myboolean), '</td></tr>
                        <tr><td width="50%">1e. $mynull</td><td>', var_dump($mynull), '</td></tr>
                        <tr><td width="50%">1f. $myarray</td><td>', var_dump($myarray), '</td></tr>
                </table>';
                echo "<br>";

                echo '<table width="95%" border=3 style="border-collapse: collapse;">
                        <tr><td width="50%">2a. $myinteger + 10</td><td>', var_dump($myinteger + 10), '</td></tr>
                        <tr><td width="50%">2b. $myinteger - 5</td><td>', var_dump($myinteger - 5), '</td></tr>
                        <tr><td width="50%">2c. $myinteger * 2</td><td>', var_dump($myinteger * 2), '</td></tr>
                        <tr><td width="50%">2d. $myinteger / 3</td><td>', var_dump($myinteger / 3), '</td></tr>
                        <tr><td width="50%">2e. $myboolean + 1</td><td>', var_dump($myboolean + 1), '</td></tr>
                        <tr><td width="50%">2f. $mystring * 2</td><td>', var_dump($mystring * 2), '</td></tr>
                </table>';
                echo "<br>";

                echo '<table width="95%" border=3 style="border-collapse: collapse;">
                        <tr><td width="50%">3a. $myinteger & 8</td><td>', var_dump($myinteger & 8), '</td></tr>
                        <tr><td width="50%">3b. $myinteger | 8</td><td>', var_dump($myinteger | 8), '</td></tr>
                        <tr><td width="50%">3c. $myinteger << 1</td><td>', var_dump($myinteger << 1), '</td></tr>
                        <tr><td width="50%">3d. $myinteger >> 1</td><td>', var_dump($myinteger >> 1), '</td></tr>
                </table>';
                echo "<br>";

                echo '<table width="95%" border=3 style="border-collapse: collapse;">
                        <tr><td width="50%">4a. $myinteger == 10</td><td>', var_dump($myinteger == 10), '</td></tr>
                        <tr><td width="50%">4b. $myinteger > 10</td><td>', var_dump($myinteger > 10), '</td></tr>
                        <tr><td width="50%">4c. $myinteger >= 10</td><td>', var_dump($myinteger >= 10), '</td></tr>
                        <tr><td width="50%">4d. $myinteger < 20</td><td>', var_dump($myinteger  < 20), '</td></tr>
                        <tr><td width="50%">4e. $myinteger <= 20</td><td>', var_dump($myinteger <= 20), '</td></tr>
                        <tr><td width="50%">4f. $myinteger == $mystring</td><td>', var_dump($myinteger == $mystring), '</td></tr>
                        <tr><td width="50%">4g. $myinteger === $mystring</td><td>', var_dump($myinteger === $mystring), '</td></tr>
                </table>';
                echo "<br>";

                echo '<table width="95%" border=3 style="border-collapse: collapse;">
                        <tr><td width="50%">5a. $myinteger >= 10 and $myinteger <= 20</td><td>', var_dump($myinteger >= 10 and $myinteger <= 20), '</td></tr>
                        <tr><td width="50%">5b. $myinteger == 10 or $myinteger == 20</td><td>', var_dump($myinteger == 10 or $myinteger == 20), '</td></tr>
                        <tr><td width="50%">5c. $myinteger == 10 xor $myinteger == 20</td><td>', var_dump($myinteger == 10 xor $myinteger == 20), '</td></tr>
                </table>';
                echo "<br>";
        ?>
    </div>

    <div class = "footer">
        <?php
            //footer
            echo '&copy; ', date('Y'), ' ', NAME, ' :: Rundate ', date('m/d/Y');
        ?>
    </div>
</body>
</html>