<html>
<head>
    <title>Lab Activity 9</title>
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
        define("LABTITLE" , "Laboratory Activity No.1");
        define("DESCRIPTION" , "Hello World");
    
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
        <a href="lab9.php" class = "active"><i class="fa fa-desktop" aria-hidden="true"></i>Lab 9 - Handling User Input – User Registration</a>
        <a href="lab10.php"><i class="fa fa-desktop" aria-hidden="true"></i>Lab 10 - Handling User Input – Dynamic Page</a>
    </div>


    <div class = "content_section">
        <?php
            //content section
            function generate_textbox($name, $value) {
                return '<input type="text" name="' . $name . '" value="' . $value . '">';
            }
            function generate_password($name, $value) {
                return '<input type="password" name="' . $name . '" value="' . $value . '">';
            }
            function generate_textarea($name, $value) {
                return '<textarea name="' . $name . '">' . $value . '</textarea>';
            }
            function generate_checkbox($name) {
                return '<input type="checkbox" name="' . $name . '">';
            }
        ?>
        <?php
            // *********************************************************
            // Items 1 to 9, get form data and assign to local variable
            // Item 1 is already given
            // *********************************************************
            // Item 1: Get lastname form data
            $lastname = isset($_POST['txtlastname']) ? $_POST['txtlastname'] : '';
            $firstname = isset($_POST['txtfirstname']) ? $_POST['txtfirstname'] : ''; 
            $middlename = isset($_POST['txtmiddlename']) ? $_POST['txtmiddlename'] : ''; 
            $emailaddress = isset($_POST['txtemailaddress']) ? $_POST['txtemailaddress'] : ''; 
            $username = isset($_POST['txtusername']) ? $_POST['txtusername'] : '';
            $password = isset($_POST['txtpassword']) ? $_POST['txtpassword'] : '';
            $confirmpassword =isset($_POST['txtconfirmpassword']) ? $_POST['txtconfirmpassword'] : '';
            $comments = isset($_POST['txtcomments']) ? $_POST['txtcomments'] : '';
            $agree = isset($_POST['txtagree']) ? $_POST['txtagree'] : '';
            if (count($_POST) == 0) {
                echo '<form method="post" action="lab9.php">';
                echo '<table>';
                echo '<tr><td colspan=2><strong>Lab 9 - Form Processing (User Registration)</td></tr>';
                // **************************************************************
                // Item 10 to 18, generate html form elements using the functions
                // declared in No. 4. Item 10 is already given
                // **************************************************************
                // Item 10: Generate lastname textbox
                echo '<tr><td>Last Name</td><td>',
                    generate_textbox('txtlastname', $lastname),
                '</td></tr>';
                echo '<tr><td>First Name</td><td>',
                    generate_textbox('txtfisrtname', $firstname),
                '</td></tr>';
                echo '<tr><td>Middle Name</td><td>',
                    generate_textbox('txtmiddlename', $middlename),
                '</td></tr>';
                echo '<tr><td>Email Address</td><td>',
                    generate_textbox('txtemailaddress', $emailaddress),
                '</td></tr>';
                echo '<tr><td>Username</td><td>',
                    generate_textbox('txtusername', $username),
                '</td></tr>';
                echo '<tr><td>Password</td><td>',
                    generate_password('txtpassword', $password),
                '</td></tr>';
                echo '<tr><td>Confirm Password</td><td>',
                    generate_password('txtconfirmpassword', $confirmpassword),
                '</td></tr>';
                echo '<tr><td>Comments</td><td>',
                    generate_textarea('txtcomments', $comments),
                '</td></tr>';
                echo '<tr><td>Agree</td><td>',
                    generate_checkbox('txtagree', $agree),
                '</td></tr>';
               
                echo '<tr><td colspan=2>';
                echo '<input type="submit" name="btnRegister" value="Register">&nbsp;';
                echo '<input type="reset" name="btnReset" value="Reset">&nbsp;';
                echo '</td></tr>';
                echo '</table>';
                echo '</form>';
            }
            else {
            echo '<table>';
            echo '<tr><td colspan=2><strong>Lab 9 - Form Processing (User Registration)</td></tr>';
            echo '<tr><td colspan=2 align=center><strong>FORM SUBMITTED</td></tr>';
            // ****************************************************************
            // For items 20 to 28, display submitted form data inside <td></td>
            // Item 20 already given
            // ****************************************************************
            // Item 20: display lastname data
            echo '<tr><td>Last Name</td><td>', $lastname, '</td></tr>';
            echo '<tr><td>First Name</td><td>', $firstname, '</td></tr>';
            echo '<tr><td>Middle Name</td><td>', $middlename, '</td></tr>';
            echo '<tr><td>Email Adress</td><td>', $emailaddress, '</td></tr>';
            echo '<tr><td>Username</td><td>', $username, '</td></tr>';
            echo '<tr><td>Password</td><td>', $password, '</td></tr>';
            echo '<tr><td>Confirm Password</td><td>', $confirmpassword, '</td></tr>';
            echo '<tr><td>Comments</td><td>', $comments, '</td></tr>';
            echo '<tr><td>Agree</td><td>', $agree, '</td></tr>';
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