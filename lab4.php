<html>
<head>
    <title>Lab Activity 4</title>
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
                define("LABTITLE" , "Laboratory Activity No.4");
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
        <a href="lab3.php"><i class="fa fa-desktop" aria-hidden="true"></i>Lab 3 - Working with Data Types and Operators</a>
        <a href="lab4.php" class = "active"><i class="fa fa-desktop" aria-hidden="true"></i>Lab 4- Function and Control Structures - Number to Words</a>
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
            $number = (int)(isset($_POST['number']) ? $_POST['number'] : 0);
            if (($number < 1) or ($number > 999))
                {if (count($_POST) > 0) 
                    {$words = 'Sorry, I can process 1 to 999 only!';}
                else {$words = '&nbsp;';}}
            else
                {$words = $number . ' in words is ' . NumberToWords($number);}
            echo '<form action="" method="post">';
            echo '<table cellpadding=4 border=1 style="border-collapse:collapse">';
            echo '<tr><td align="center"><strong>Number to Words</strong></td></tr>';
            echo '<tr><td>Enter a number (1-999)&nbsp;<input type=text name=number>&nbsp;';
            echo '<input type="submit" value="Convert to words"></td></tr>';
            echo '<tr><td align="center"><strong>', $words, '</strong></td></tr>';
            echo '</table>';
            echo '</form>';
               
            function NumberToWords($number) 
                {
                    $words = " ";
                    $hundreds_words = " ";
                    $tens_words = " ";
                    $ones_words = " ";  
                    $hundreds = floor($number / 100);
                    $tens = floor($number % 100);
           
                    //hundreds place
                    if($hundreds == 0){$hundreds_words = "";}
                    elseif($hundreds == 1){$hundreds_words = "One Hundred ";}
                    elseif($hundreds == 2){$hundreds_words = "Two Hundred ";}
                    elseif($hundreds == 3){$hundreds_words = "Three Hundred ";}
                    elseif($hundreds == 4){$hundreds_words = "Four Hundred ";}
                    elseif($hundreds == 5){$hundreds_words = "Five Hundred ";}
                    elseif($hundreds == 6){$hundreds_words = "Six Hundred ";}
                    elseif($hundreds == 7){$hundreds_words = "Seven Hundred ";}
                    elseif($hundreds == 8){$hundreds_words = "Eight Hundred ";}
                    else{$hundreds_words = "Nine Hundred";}
           
                    if ($tens > 19){
                        $tens1 = floor($tens / 10);
                        $ones = floor($tens % 10);
                        if($tens1 == 2){$tens_words = "Twenty ";}
                        elseif($tens1 == 3){$tens_words = "Thirty ";}
                        elseif($tens1 == 4){$tens_words = "Forty ";}
                        elseif($tens1 == 5){$tens_words = "Fifty ";}
                        elseif($tens1 == 6){$tens_words = "Sixty ";}
                        elseif($tens1 == 7){$tens_words = "Seventy ";}
                        elseif($tens1 == 8){$tens_words = "Eighty ";}
                        else{$tens_words = "Ninety ";}
                          
                        if ($ones == 0){$ones_words = "";}
                        elseif ($ones == 1){$ones_words = "One";}
                        elseif ($ones == 2){$ones_words = "Two";}
                        elseif ($ones == 3){$ones_words = "Three";}
                        elseif ($ones == 4){$ones_words = "Four";}
                        elseif ($ones == 5){$ones_words = "Five";}
                        elseif ($ones == 6){$ones_words = "Six";}
                        elseif ($ones == 7){$ones_words = "Seven";}
                        elseif ($ones == 8){$ones_words = "Eight";}
                        else{$ones_words = "Nine";}
           
                           
                    }else{
                        if ($tens == 0){$tens_words = "";}
                        elseif ($tens == 1){$tens_words = "One";}
                        elseif ($tens == 2){$tens_words = "Two";}
                        elseif ($tens == 3){$tens_words = "Three";}
                        elseif ($tens == 4){$tens_words = "Four";}
                        elseif ($tens == 5){$tens_words = "Five";}
                        elseif ($tens == 6){$tens_words = "Six";}
                        elseif ($tens == 7){$tens_words = "Seven";}
                        elseif ($tens == 8){$tens_words = "Eight";}
                        elseif ($tens == 9){$tens_words = "Nine";}
                        elseif ($tens == 10){$tens_words = "Ten";}
                        elseif ($tens == 11){$tens_words = "Eleven";}
                        elseif ($tens == 12){$tens_words = "Twelve";}
                        elseif ($tens == 13){$tens_words = "Thirteen";}
                        elseif ($tens == 14){$tens_words = "Fourteen";}
                        elseif ($tens == 15){$tens_words = "Fifteen";}
                        elseif ($tens == 16){$tens_words = "Sixteen";}
                        elseif ($tens == 17){$tens_words = "Seventeen";}
                        elseif ($tens == 18){$tens_words = "Eighteen";}
                        else{$tens_words = "Nineteen";}
                    }
                    
                    $words = $hundreds_words. $tens_words.  $ones_words;
                    return $words;
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