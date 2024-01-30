<?php 

    class myregular{
        public function __construct()
        {
            $string = "We are family";

            // echo $string;

                    // preg_match(delimiter,string)
            $result = preg_match("/We are family/",$string); //it's false
            $result = preg_match("/We are family/",$string); //it's true 
            $result = preg_match("/family/",$string); //it's true 
            $result = preg_match("/mily/",$string); //it's true 


            $result = preg_match("/mily$/",$string); //it's true 
            $result = preg_match("/are$/",$string); //it's false 
            $result = preg_match("/we$/",$string); //it's false
            $result = preg_match("/family$/",$string); //it's true
            $result = preg_match("/Family$/",$string); //it's false due to case sensitive 


            $result = preg_match("/^mily/",$string); //it's false 
            $result = preg_match("%^are%",$string); //it's false 
            $result = preg_match("#^we#",$string); //it's false 
            $result = preg_match("+^We+",$string); //it's true 


            $result = preg_match("-^family$-",$string); //it's false Note::string must be exactly "family"
            $result = preg_match("!^$!",$string); //it's false Note:: string must be empty 
            
            $result = preg_match("/^we/",$string); //it's false 
            $result = preg_match("/^we/i",$string); //it's true 

            $result = preg_match("/[b-d]/",$string); //it's false 
            $result = preg_match("/[a-f]/",$string); //it's true 
            $result = preg_match("/[a-z]/",$string); //it's true 
            $result = preg_match("/[A-Z]/",$string); //it's true
            $result = preg_match("/[0-4]/",$string); //it's false
            
            $string = "my lucky number is 567";

            $result = preg_match("/[0-4]/",$string); //it's false
            $result = preg_match("/[5-9]/",$string); //it's true
            $result = preg_match("/[a-z]/",$string); //it's true
            $result = preg_match("/[A-Z]/",$string); //it's false 
            $result = preg_match("/[A-Z] | [a-z]/",$string); //it's true
            $result = preg_match("/^[a-z]/",$string); //it's trueytg
            $result = preg_match("/[a-z]$/",$string); //it's false 
            $result = preg_match("/^[5-9]/",$string); //it's false 
            $result = preg_match("/[5-9]$/",$string); //it's true 


            $result = preg_match("/[^a-z]/",$string); //it's true  (it mean not include a to z , result is true cuz $string include spacing and number)
            $result = preg_match("/[^5-9]/",$string); //it's true  (it mean not include 5 to 9 , result is true cuz $string include spacing and string)
            $result = preg_match("/[^0-4]/",$string); //it's true  (it mean not include 0 to 4 , result is true cuz $string include spacing , string and 56789 )

            $result = preg_match("/@/",$string); //it's false
            
            // $string = "admin@gmail.com";

            $result = preg_match("/@/",$string); //it's true
            $result = preg_match("/m/",$string); //it's true
            $result = preg_match("/m+/",$string); //it's true
            $result = preg_match("/b+/",$string); //it's false

            $result = preg_match("/b*/",$string); //it's true
            $result = preg_match("/b?/",$string); //it's true

            $result = preg_match("/m{1}/",$string); //it's true
            $result = preg_match("/m{2}/",$string); //it's false cus not contain mm 

            $string = "adminn@gmail.com";
            $result = preg_match("/n{1}/",$string); //it's true
            $result = preg_match("/n{2}/",$string); //it's true 
            $result = preg_match("/n{3}/",$string); //it's false 
            $result = preg_match("/n{2,3}/",$string); //it's true 
            $result = preg_match("/n{2,}/",$string); //it's true 
            $result = preg_match("/\s/",$string);// it's is false


            $string = "adminn@gmail.com";
            $result = preg_match("/n{1}/", $string);//it's true
            $result = preg_match("/n{2}/", $string);//it's true
            $result = preg_match("/n{3}/", $string);//it's is false
            $result = preg_match("/n{2,3}/", $string);//it's true
            $result = preg_match("/n{2}/", $string);//it's true
            $result = preg_match("/\s/", $string);//it's is false

            $string = "V8 Engine";
            $result = preg_match("/\s/",$string); //it's true
            $result = preg_match("/\d/",$string); //it's true
            $result = preg_match("/\D/",$string); //it's true
            $result = preg_match("/\w/",$string); //it's true
            $result = preg_match("/\W/",$string); //it's true

            $string = "528";
            $result = preg_match("/\d/",$string); //it's true
            $result = preg_match("/\D/", $string); //it's is false
            $result = preg_match("/\w/", $string);  //it's true
            $result = preg_match("/\W/", $string); //it's is false

            $string = "adminn@gmail.com";
            $result = preg_match("/a\wm/",$string);//it's true
            $result = preg_match("/a\w{1}m/",$string); //it's true
            $result = preg_match("/a\w{2}m/", $string); // it's false cuz any exact 2 words 
            $result = preg_match("/a\w{2,4}m/", $string); //it's false cuz any exact 2 to 4 words 
            $result = preg_match("/a\w{2,}m/", $string); //it's false cuz any exact 2 to nth words 

            $result = preg_match("/a.m/", $string); //it's true
            $result = preg_match("/a..m/", $string); //it's false
            $result = preg_match("/a.{1}m/", $string); //it's true
            $result = preg_match("/a.{2}m/", $string); //it's false cuz any exact 2 char
            $result = preg_match("/a.{2,4}m/", $string); //it's false cuz any exact 2 to 4 char 
            $result = preg_match("/a.{2,}m/", $string); //it's true cuz any exact 2 to nth char 

            $string = "PHP";
            $result = preg_match("/.{2}/", $string); //it's true

            $string = "Vv";
            $result = preg_match("/.{2,}/", $string); //it's true
            $result = preg_match("/^.{2}$/", $string); //it's true (exact 2 characters)

            $string = "Welcome to our (i)programming class</i>";
            $result = preg_match("/<i>\w*<\/i>/",$string); //it's is false . cuz spacing exist 
            $result = preg_match("/<i>.*<\/i>/",$string);//it's is false
            $result = preg_match("/<i>(.*)<\/i>/",$string);//it's is false

            $string = "PHP";
            $result = preg_match("/<i>p(hp)*<\/i>/", $string); // it's false 
            $result = preg_match("/<i>p(hp)+<\/i>/",$string); //it's false

            $string = "admin@gmail.com";
            $result = preg_match("/^[a-z,A-Z]+@[a-z]+\.\w{3}/",$string);//it's true

            echo $result? "it's true" : "it's false";


            echo "<hr/>";

            // preg_replace(pattern,replacement,$string);
            $string = "Are you ready to learn PHP Framework";
            $result = preg_replace("/php/i","javascript",$string);
            echo "$result <br/>";//Are you ready to learn javascript Framework

            $result = preg_replace("/\s/","",$string);
            echo "$result <br/>"; // AreyoureadytolearnPHPFramework

            // Bracket Expressions 
            $string = "admin123@gmail .com";
            $result = preg_replace("/[[:space:]]/","x",$string);
            echo "$result <br/>";//admin123@gmailx.com

            $result = preg_replace("/[[:space:]]/","",$string);
            echo "$result <br/>"; //admin123@gmail.com

            $result = preg_replace("/[[:alpha:]]/","x",$string);
            echo "$result <br/>"; //xxxxx123@xxxxx .xxx

            $result = preg_replace("/[[:digit:]]/","x",$string);
            echo "$result <br/>"; //adminxxx@gmail .com

            $result = preg_replace("/[[:alnum:]]/","x",$string);
            echo "$result <br/>"; //xxxxxxxx@xxxxx .xxx

            $result = preg_replace("/[[:punct:]]/","x",$string);
            echo "$result <br/>"; //admin123xgmail xcom

            $result = preg_replace("/[[:lower:]]/","x",$string);
            echo "$result <br/>"; //xxxxx123@xxxxx .xxx

            $result = preg_replace("/[[:upper:]]/","x",$string);
            echo "$result <br/>"; //admin123@gmail .com

            $string = "Are you ready to learn PHP Framework";
            $result = preg_replace(["/PHP/","/framework/i"],["javascript","libraries"],$string);
            echo "$result <br/>"; //Are you ready to learn javascript libraries

            $string = "My lucky number is 007 but i got ticket number 5700";
            $result = preg_replace("/[0-9]/","x",$string);
            echo "$result <br/>"; //My lucky number is xxx but i got ticket number xxxx

            $result = preg_replace("/[0-9]+/","x",$string);
            echo "$result <br/>"; //My lucky number is x but i got ticket number x

                                        // no limit = 0 (or) NULL 
            // preg_split(patter,string,limit,flags);
            $string = "My lucky number is 007";
            $result = preg_split("/\s/",$string);
            echo $result; //Array 
            echo "<pre>".print_r($result,true)."</pre>";
            echo "$result[0] <br/>"; // My 
            echo "$result[2] <br/>"; // number

            $result = preg_split("/\s/",$string,3);
            // echo $result; //Array 
            echo "<pre>".print_r($result,true)."</pre>";
            echo "$result[0] <br/>"; // My 
            echo "$result[2] <br/>"; // number is 007

            $string = "My lucky number is 007, but i got ticket number 5700";

            $result = preg_split("/\s/",$string);
            echo "<pre>".print_r($result,true)."</pre>";

            $result = preg_split("/[\s]/", $string);
            echo "<pre>".print_r($result,true)."</pre>";

            $result = preg_split("/\s,/", $string);
            echo "<pre>".print_r($result,true)."</pre>";

            $result = preg_split("/[\s,]/", $string);
            echo "<pre>".print_r($result,true)."</pre>";

            $result = preg_split("/[\s,]/", $string, NULL,PREG_SPLIT_NO_EMPTY);
            echo "<pre>".print_r($result,true)."</pre>";

            $result = preg_split("//", $string, NULL,PREG_SPLIT_NO_EMPTY);
            echo "<pre>".print_r($result,true)."</pre>";

            // preg_quote() 

            $string = "He\'s my father,do you know him?";

            $result = preg_quote($string);
            echo $result;//He\\'s my father,do you know him\?

            echo "<br/>";

            $result = preg_quote($string, "o");
            echo $result;// He\\'s my father,d\o y\ou kn\ow him\?

            // preg_match_all(pattern,string,return,flags) 

            $string = "Winning numbers are 227-000 & 002-777 , but my ticket number is 007-222";

            preg_match_all("/\d+-\d+/",$string,$result,PREG_SET_ORDER);
            echo "<pre>".print_r($result,true)."</pre>";

            preg_match_all("/\d-\d/",$string,$result,PREG_PATTERN_ORDER);
            echo "<pre>".print_r($result,true)."</pre>";

            // lookahead & lookbehind 
            // (?=)  positive lookahead (or)  regax lookahead = right hand side 
            // (?!)  negative lookahead                      

            // (?<=) positive lookbehind (or) regax lookbehind = left hand side 
            // (?<!) negative lookbehind

            $string = "aungkyaw@cisco.com";
            $result = preg_match("/@(?=cisco)/",$string);  //it's true (positive lookahead)
            $result = preg_match("/(?<=@)cisco/",$string);  //it's true (positive lookbehind)

            $result = preg_match("/@(?!cisco)/",$string); //it's false (negative lookhead)
            $result = preg_match("/(?<!@)cisco/",$string); //it's false (negative lookahead)

            echo $result ? "it's true" : "it's false";

            echo "<br/>";
            
            $strongpassword = "abc#7D";

            $result = preg_match("/(?=.*[a-z])(?=.*[0-9])(?=.*([[:punct:]]))/",$strongpassword); //it's true (positive lookahead)

            echo $result ? "it's true" : "it's false";




        }
    }

    echo "This is regular expression <br/>";
    $obj = new myregular();

    echo "<hr/>";

?>

<!-- $ must be in end (case sensitive) -->
<!-- ^ caret or circumflex , must be in start (cs) -->
<!-- i no case sensitive  -->
<!-- [] range a-z A-Z 0-9 -->
<!-- m+ must contain m and more  -->
<!-- b* contain b or not and more  -->
<!-- b? contain b or not and more  -->
<!-- m{nth} contain sample place m as per nth and more   -->
<!-- m{nth,nth} contain sample place m as per nth and more   -->
<!-- m{nth,} contain sample place m as per nth and more   -->
<!-- \s = space  -->
<!-- \d = digit  -->
<!-- \D = have any no digit  -->
<!-- \w = any word [a-z] [A-Z] [0-9] -->
<!-- \W = any word #@$*  -->
<!-- . = any characters  -->
<!-- () mean this  -->
<!-- + mean must  -->
<!-- p(hp)* can be contain hp  -->
<!-- p(hp)+ must be contain hp  -->
<!-- [[:space:]] mean space  -->
<!-- [[:alpha:]] mean alphabetic characters  -->
<!-- [[:digit:]] mean digit  -->
<!-- [[:alnum]] mean alphanumeric characters  -->
<!-- [[::punct:]] mean Punctuation characters  -->
<!-- [[:lower:]] mean Lower-case characters  -->
<!-- [[:upper:]] mean Upper-case characters  -->