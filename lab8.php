<html>
<head>
    <title>Lab Activity 8</title>
    <link rel = "stylesheet" href = "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <link rel = "stylesheet" href = "style.css">
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
        define('LABTITLE', 'Laboratory Activity No. 8');
        define('DESCRIPTION', 'Array Manipulations – Word Counter');
    
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
        <a href="lab7.php"><i class="fa fa-desktop" aria-hidden="true"></i>Lab 7 - Regular Expression</a>
        <a href="lab8.php" class = "active"><i class="fa fa-desktop" aria-hidden="true"></i>Lab 8 - Array Manipulations – Word Counter</a>
        <a href="lab9.php"><i class="fa fa-desktop" aria-hidden="true"></i>Lab 9 - Handling User Input – User Registration</a>
        <a href="lab10.php"><i class="fa fa-desktop" aria-hidden="true"></i>Lab 10 - Handling User Input – Dynamic Page</a>
    </div>


    <div class = "content_section">
        <?php
            $text = (isset($_POST['text'])) ? $_POST['text'] : '';
            echo '<form method="post">';
            echo 'Enter text:<br />';
            echo '<textarea name="text" style="width:500px">';
            echo $text;
            echo '</textarea><br />';
            echo '<input type=submit value="Process">&nbsp;';
            echo '<input type=reset>&nbsp;';
            echo '</form>';
            $text = preg_replace('/[^a-zA-Z0-9 ]/','',trim($text));
            $colors[1] = '#00CCFF';
            $colors[2] = '#C0C0C0';
            $colors[3] = '#808080';
            $colors[4] = '#FFA500';
            $colors[5] = '#FFA500';
            $colors[6] = '#A52A2A';
            $colors[7] = '#800000';
            $colors[8] = '#008000';
            $colors[9] = '808000';
            $colors[10] = '#00FF00';
            $colors[11] = '#ADD8E6';

            if ($text <> '') {
                $text = strtolower($text);
                // No. 3. Explode $text into array and assign to $allwords
                $allwords = explode(' ', $text);
                // No. 4. Remove duplicate items and assign to $uniquewordlist
                $uniquewordlist = array_unique($allwords);
                // No. 5. sort the array $uniquewordlist
                sort($uniquewordlist);
                // No. 6. Check the first element of $uniquewordlist if equal to space
                if ($uniquewordlist == '') {
                // No. 7. Remove the first element from $uniquewordlist
                $deleteditem = array_shift($uniquewordlist);
            }
            
            foreach ($uniquewordlist as $word)
                $counter[$word] = 0;
                $totalwords = 0;
            foreach ($allwords as $word) {
                if ($word != '') {
                    $counter[$word]++;
                    $totalwords++;
                }
            }

            echo '<table border=1 style="width:500px">';
            echo '<tr><td colspan=4 align=center>Array Manipulation - Word
            Counter</td></tr>';
            echo
            '<tr><td>No.</td><td>Word</td><td>Frequency</td><td>Percent</td></tr>';
            $i=1;
            foreach ($uniquewordlist as $word) {
                // No. 8. Get the current element of array $colors (IAP function)
                $color = current($colors);
                $length = number_format($counter[$word] / $totalwords * 100.00,2);
                echo '<tr>';
                echo '<td>',$i, '.</td>';
                echo '<td>', $word, '</td>';
                echo '<td>', $counter[$word],'</td>';
                echo '<td style="background:',$color,'">',$length,'%</td>';
                echo '</tr>';

                // No. 9. Move the internal array pointer of $colors to next element
                next($colors);

                if (current($colors) == false) {
                    // No. 10. Reset internal array pointer of $colors
                    reset($colors);
                }

                $i++;
            }

            echo '</table>';
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