<html>
<head>
    <title>Lab Activity 6</title>
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
        define("LABTITLE" , "Laboratory Activity No.6");
        define("DESCRIPTION" , "String Function in PHP");
    
        $school ='Polytechnic University of the Philippines';
        $course ='Bachelor of Science in Computer Engineering';
        $yearlevel ='3rd Year';
        $dateofbirth ='October 5, 2000';
        $gender ='Female';
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
        <a href="lab3.php"><i class="fa fa-desktop" aria-hidden="true"></i>Lab 3 - Working with Data Types and Operators</a>
        <a href="lab4.php"><i class="fa fa-desktop" aria-hidden="true"></i>Lab 4- Function and Control Structures - Number to Words</a>
        <a href="lab5.php"><i class="fa fa-desktop" aria-hidden="true"></i>Lab 5 - Functions and Control Structures – Magic Square</a>
        <a href="lab6.php" class = "active"><i class="fa fa-desktop" aria-hidden="true"></i>Lab 6 - String Function in PHP</a>
        <a href="lab7.php"><i class="fa fa-desktop" aria-hidden="true"></i>Lab 7 - Regular Expression</a>
        <a href="lab8.php"><i class="fa fa-desktop" aria-hidden="true"></i>Lab 8 - Array Manipulations – Word Counter</a>
        <a href="lab9.php"><i class="fa fa-desktop" aria-hidden="true"></i>Lab 9 - Handling User Input – User Registration</a>
        <a href="lab10.php"><i class="fa fa-desktop" aria-hidden="true"></i>Lab 10 - Handling User Input – Dynamic Page</a>
    </div>


    <div class = "content_section">
        <?php
            $string = isset($_POST['string']) ? $_POST['string'] : ' ';
            echo '<form method=post action="">';
            echo '<h1>String Functions in PHP</h2>';
            echo '<input type="text" name="string" value="', $string, '" size=100><br /><br />';
            echo '<input type="submit" name="btnApply" value="Apply Functions">&nbsp;';
            echo '<input type="reset" value="Reset"><br />';
            echo '</form>';
    
            $string = htmlspecialchars($string);
            
             //"Apply Functions" clicked
            if (isset($_POST["btnApply"])){
                if (empty($string)){
                    echo '<h1>Please enter a string</h2>';
                }else{
                    echo "<table>";
                        echo '<tr>
                            <td>1.</td>
                            <td>Original Value of $string</td>
                            <td>*',$string, '*</td>
                            </tr>';
                        
                        echo '<tr>
                            <td>2.</td>
                            <td>Number of characters</td>
                            <td>*', strlen($string), '*</td>
                        </tr>';

                        echo '<tr>
                            <td>3.</td>
                            <td>Number of words</td>
                            <td>*', str_word_count($string), '*</td>
                        </tr>';

                        echo '<tr>
                            <td>4.</td>
                            <td>First character to uppercase</td>
                            <td>*', ucfirst($string), '*</td>
                        </tr>';

                        echo '<tr>
                            <td>5.</td>
                            <td>First character of each word to uppercase</td>
                            <td>*', ucwords($string), '*</td>
                        </tr>';

                        echo '<tr>
                            <td>6.</td>
                            <td>To lowercase</td>
                            <td>*', strtolower($string), '*</td>
                        </tr>';

                        echo '<tr>
                            <td>7.</td>
                            <td>To uppercase</td>
                            <td>*', strtoupper($string), '*</td>
                        </tr>';

                        echo '<tr>
                            <td>8.</td>
                            <td>Without leading spaces</td>
                            <td>*', ltrim($string), '*</td>
                        </tr>';

                        echo '<tr>
                            <td>9.</td>
                            <td>Without trailing spaces</td>
                            <td>*', rtrim($string), '*</td>
                        </tr>';

                        echo '<tr>
                            <td>10.</td>
                            <td>Without leading and trailing spaces</td>
                            <td>*', trim($string), '*</td>
                        </tr>';

                        echo '<tr>
                            <td>11.</td>
                            <td>MD5 value of $string</td>
                            <td>*', md5($string), '*</td>
                        </tr>';

                        echo '<tr>
                            <td>12.</td>
                            <td>Base64 value of $string</td>
                            <td>*', base64_encode($string), '*</td>
                        </tr>';

                        echo '<tr>
                            <td>13.</td>
                            <td>First 16 characters</td>
                            <td>*', substr($string, 0, 16), '*</td>
                        </tr>';

                        echo '<tr>
                            <td>14.</td>
                            <td>Last 4 characters</td>
                            <td>*', substr($string,  -4), '*</td>
                        </tr>';

                        echo '<tr>
                            <td>15.</td>
                            <td>4 characters starting from 20th position</td>
                            <td>*', substr($string, 20), '*</td>
                        </tr>';

                        echo '<tr>
                            <td>16.</td>
                            <td>Position of the word "guide"</td>
                            <td>*', stripos($string, "guide"), '*</td>
                        </tr>';

                        $stringbool = false;
                        if (stripos($string, "UE") >= 0 ){
                            $stringbool = true;
                        }
                        echo '<tr>
                            <td>17.</td>
                            <td>Position of the Word "UE"</td>
                            <td>*', var_dump($stringbool), '*</td>
                        </tr>';

                        
                        echo '<tr>
                            <td>18.</td>
                            <td>"HTML" word in uppercase</td>
                            <td>*', str_replace("html", "HTML", $string), '*</td>
                        </tr>';

                        $s ='"<INPUT>" word in uppercase';
                        echo '<tr>
                            <td>19.</td>
                            <td>', htmlspecialchars($s), '</td>
                            <td>*', str_replace("input", "INPUT", $string), '*</td>
                        </tr>';

                        $stringEx = explode(" ", $string);
                        echo '<tr><td>20.</td><td>Strings Converted To Array</td>';
                        echo '<td>';
                        for ($i = 1; $i < str_word_count($string, 0); $i++){
                            echo '',$stringEx[$i],'';
                            echo '<br />';
                        }
                        echo '</td></tr>';
                    echo "</table>"; 
                }
            }
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