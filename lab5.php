<html>
<head>
    <title>Lab Activity 5</title>
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
        define('LABTITLE', 'Laboratory Activity No. 5');
        define('DESCRIPTION', 'Functions and Control Structures –Magic Square');
    
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
        <a href="lab5.php" class = "active"><i class="fa fa-desktop" aria-hidden="true"></i>Lab 5 - Functions and Control Structures – Magic Square</a>
        <a href="lab6.php"><i class="fa fa-desktop" aria-hidden="true"></i>Lab 6 - String Function in PHP</a>
        <a href="lab7.php"><i class="fa fa-desktop" aria-hidden="true"></i>Lab 7 - Regular Expression</a>
        <a href="lab8.php"><i class="fa fa-desktop" aria-hidden="true"></i>Lab 8 - Array Manipulations – Word Counter</a>
        <a href="lab9.php"><i class="fa fa-desktop" aria-hidden="true"></i>Lab 9 - Handling User Input – User Registration</a>
        <a href="lab10.php"><i class="fa fa-desktop" aria-hidden="true"></i>Lab 10 - Handling User Input – Dynamic Page</a>
    </div>


    <div class = "content_section">
        <?php
            echo '<form action="" method="post">';
            echo '<table cellpadding=4 border=1 style="border-collapse:collapse">';
            echo '<tr><td align="center"><strong>Magic Square</strong></td></tr>';
            echo '<tr><td>Enter an odd number &nbsp;<input type=text name=number>&nbsp;';
            echo '<input type="submit" value="Generate Magic Square"></td></tr>';
            echo '</table>';
            echo '</form>';

            if (count($_POST) > 0) {
                $number = (int)(isset($_POST['number']) ? $_POST['number'] : 3);
                print_magicsquare($number);
            }
        
            function print_magicsquare($number) {
                $matrix;
                //procedure a and b
                if($number < 1){
                    $number == 3;
                }
                if ($number > 1 && $number % 2 == 0){
                    $number = $number ++;
                }


                //procedure c
                for ($row = 0; $row < $number; $row++){
                    for ($column = 0; $column < $number; $column++){
                        $matrix[$row][$column] = 0;
                    }
                }

                //procedure d and e
                $matrix_size = $number * $number;
                $matrix_element = 1;
                $row = 0;
                $column = floor($number / 2);

                while($matrix_element <= $matrix_size){
                    $matrix[$row][$column] = $matrix_element;
                    $row--;
                    $column--;
                    if ($matrix_element % $number == 0){
                        $column++;
                        $row = $row + 2;
                    }
                    if($column == -1){
                        $column = $number - 1;
                    }
                    if($row == -1){
                        $row = $number - 1;
                    }
                    $matrix_element++;
                }

                //displaying the matrix
                echo "<table>";
                for ($row = 0; $row < $number; $row++)
					{
					    echo "<tr>";
						for ($column = 0; $column < $number; $column++){
                            echo "<td>".$matrix[$row][$column]. " "."</td>";
                        }
						echo "</tr>";
					}
                echo "</table>";   
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