<html>
<head>
    <title>Lab Activity 7</title>
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
        define('LABTITLE', 'Laboratory Activity No. 7');
        define('DESCRIPTION', 'Regular Expression');
    
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
        <a href="lab6.php"><i class="fa fa-desktop" aria-hidden="true"></i>Lab 6 - String Function in PHP</a>
        <a href="lab7.php" class ="active"><i class="fa fa-desktop" aria-hidden="true"></i>Lab 7 - Regular Expression</a>
        <a href="lab8.php"><i class="fa fa-desktop" aria-hidden="true"></i>Lab 8 - Array Manipulations – Word Counter</a>
        <a href="lab9.php"><i class="fa fa-desktop" aria-hidden="true"></i>Lab 9 - Handling User Input – User Registration</a>
        <a href="lab10.php"><i class="fa fa-desktop" aria-hidden="true"></i>Lab 10 - Handling User Input – Dynamic Page</a>
    </div>


    <div class = "content_section">
        <?php
            //content section
            // SUPPLY THE MISSING PATTERN
            // $patterns IS A TWO DIMENSIONAL ARRAY CONTAINING [description, regex]
            $patterns[] = array('String containing "PHP"', 'PHP');
            $patterns[] = array('Starting with "PHP"', '^PHP');
            $patterns[] = array('Ends with "PHP"', 'PHP$');
            $patterns[] = array('String equal to "PHP"', '^PHP$');
            $patterns[] = array('Word starting with letter "C"', '^C'); 
            $patterns[] = array('Non-empty lowercase string', '^[^A-Z]+$');
            $patterns[] = array('Non-empty uppercase string', '^[^a-z]+$');
            $patterns[] = array('Minimum 10 letters Maximum 20 letters', '^[a-zA-Z]{10,20}$');
            $patterns[] = array('Minimum 10 digits Maximum 20 digits', '^[0-9]{10,20}$');
            $patterns[] = array('Minimum 10 characters Maximum 20 characters', '^s*(?:\S\s*){10,20}$');
            $patterns[] = array('Valid PHP variable name', '[$]');
            $patterns[] = array('Valid PHP constant name', '[a-zA-Z_\x7f-\xff][a-zA-Z0-9_\x7f-\xff]*');
            $patterns[] = array('Valid decimal (base-10) integer', '^\d+$');
            $patterns[] = array('Valid float number', '^-?[0-9]+(\.[0-9]+)?$');
            $patterns[] = array('5-letter string', '^[a-zA-Z]{5}$');
            $patterns[] = array('5-digit string', '^[0-9]{5}$');
            $patterns[] = array('5 ascii characters', '^[\x00-\x7F]{5}$');
            $patterns[] = array('5 non-alphanumeric characters', '^[~\P{Xan}++~u]{5}$');
            $patterns[] = array('Passing Grade (1.00,1.25,1.50 to 3.00)', '(1.00|1.25|1.50|1.75|2.00|2.25|2.50|2.75|3.00)');
            $patterns[] = array('Sub-domain Name (Ex. .edu or .ue.edu or .ccss.ue.edu)','[.]');
            echo '<form method="post">';
            
            $i=1;
            echo '<table border=1>';
            echo '<tr><td colspan=5 align=center>Regular Expression Test</td></tr>';
            echo '<tr><td>No.</td><td>Description</td><td>String</td><td>RegExPattern</td><td>Result</td>';
            
            foreach ($patterns as $pattern_item) {
                $description = $pattern_item[0];
                $pattern = $pattern_item[1];
                $value = isset($_POST["field$i"]) ? $_POST["field$i"] : '';
                
                if ($pattern == '') {
                    $result = 'Missing pattern';
                    $pattern = '&nbsp;';
                }
                else {
                    $pattern = '/' . $pattern . '/';
                    if (preg_match($pattern, $value))
                        $result = 'Valid';
                    else
                    $result = 'Invalid';
                }

                echo "<tr>";
                echo "<td>$i.</td><td>$description</td>";
                echo "<td><input type=text name=\"field$i\" value=\"$value\"></td>";
                echo "<td>$pattern</td><td>$result</td>";
                echo '<tr>';
                $i++;
            }

            echo '</table><br />';
            echo '<input type="submit" name="validate" value="Validate Data">&nbsp';
            echo '<input type="reset" value="Reset">&nbsp';
            echo '</form>';
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