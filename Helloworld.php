<html>
    <head><title>Hello World</title>
    </head>
        
        <body bgcolor="red"><?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$string1="hello";
$string2="world";
?>
            <h1 align="center">
                <?php echo "$string1 $string2 <br> <br>"; 
                  echo "I'm running "; echo $_SERVER['HTTP_USER_AGENT'] ; ?></h1>
        </body>
</html>     