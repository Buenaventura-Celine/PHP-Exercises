<html>
<head>
    <title>Lab Activity 10</title>
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
        define('LABTITLE', 'Laboratory Activity No. 10');
        define('DESCRIPTION', 'Handling User Input – Dynamic Page');
    
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
        <a href="lab8.php"><i class="fa fa-desktop" aria-hidden="true"></i>Lab 8 - Array Manipulations – Word Counter</a>
        <a href="lab9.php"><i class="fa fa-desktop" aria-hidden="true"></i>Lab 9 - Handling User Input – User Registration</a>
        <a href="lab10.php" class = "active"><i class="fa fa-desktop" aria-hidden="true"></i>Lab 10 - Handling User Input – Dynamic Page</a>
    </div>


    <div class = "content_section">
    <?php
        //content section
        $links['lab10/lab10_home.php'] = 'Home';
        $links['lab10/lab10_vision.php'] = 'Vision';
        $links['lab10/lab10_mission.php'] = 'Mission';
        $links['lab10/lab10_history.php'] = 'History';
        echo '<table width=100% border=1>';
        // navigation section
        echo '<tr><td>';
        foreach ($links as $key => $value)
            echo '&nbsp;<a href="?page=', $key, '"> ', $value, ' </a>&nbsp;';
            echo '</td></tr>';
            // dynamic content
            echo '<tr><td><br />';
            if ( isset($_GET['page']) ) {
                $page = $_GET['page'];
                    if (is_readable($page))
                        include_once($page);
                    else
                        echo 'File <strong>', $page, '</strong> not found!';
            }
            else {
                reset($links);
                include_once(key($links));
            }
        echo '<br /><br />';
        echo '</td></tr>';
        echo '</table>';
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