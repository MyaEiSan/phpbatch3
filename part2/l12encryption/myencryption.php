<?php 

ini_set('display_errors',1);

interface encrypt{
    public function setpassword($plaintext);
    public function passworddef();
    public function passwordbcr();
    public function passwordvry();
    // public function passwordrehash();

    // public function strongpassword();

    // public function getciphermethod();
    // public function customencrypt();
    // public function customdecrypt();

    public function gethashingalgorithm();
    public function customstrongencrypt();
    // public function customstrongdecrypt();

}


// password_hash(string,mixed)
// =keywords 
// PASSWORD_DEFAULT 
// PASSWORD_BCRYPT
class myencryption implements encrypt{
    private $passcode; 

    public function setpassword($plaintext){
        $this->passcode = $plaintext;
    }

    public function passworddef(){
        $newpasscode = password_hash($this->passcode, PASSWORD_DEFAULT);
        echo "Before encrypt = $this->passcode <br/> After encrypt = $newpasscode <br/>";
    }

    public function passwordbcr(){
        $newpasscode = password_hash($this->passcode, PASSWORD_BCRYPT);
        echo "Before encrypt = $this->passcode <br/> After encrypt = $newpasscode <br/>";
    }

    public function passwordvry(){
        
        // => Decryption 
        // password_verify(String,hash);

        $plaintextone = "password123";
        $enccodeone = password_hash($plaintextone, PASSWORD_DEFAULT);
        echo "password hash with PASSWORD_DEFAULT = ".$enccodeone;
        echo "<br/>";

        $plaintexttwo = "password12345";
        $enccodetwo = password_hash($plaintexttwo, PASSWORD_BCRYPT);
        echo "password hash with PASSWORD_BCRYPT = ".$enccodetwo;
        echo "<br/>";

        $verify = password_verify($plaintextone,$enccodeone);

        if($verify){
            echo "OKI";
        }else{
            echo "Failed";
        }
    }

    public function passwordmd5(){

        // Message-Digest
        // => md5(string, raw)
        // NOTE :: Raw Optional 
        // TRUE/true = Raw 16 characters binary format
        // FALSE/false = DEFAULT. 32 Character hax number

        $passcode = "howareyou";
        
        echo "Before encrypt with md5 = ". $passcode."<br/>";
        echo "After encrypt with md5 = ". md5($passcode)."<br/>";
        echo "After encrypt with md5 by FALSE = ". md5($passcode,FALSE)."<br/>";
        echo "After encrypt with md5 by TRUE = ". md5($passcode,TRUE)."<br/>";

        $getpassword = "b47123e4109e6839adb7ae2a28300d96";

        if($getpassword === md5($passcode)){
            echo "Password Match with md5 32 chars hax number";
        }elseif($getpassword === md5($passcode, TRUE)){
            echo "Password Match with md5 16 raw chars binary format"; // can't match cuz it's b
        }else{
            echo "Password do not match";
        }


    }

    public function passwordsha1(){
        // Secure Hash Algorithm
        // => sha1(string, raw)
        // NOTE :: Raw Optional (TRUE,true,FALSE,false)
        // TRUE/true = Raw 20 characters binary format
        // FALSE/false = DEFAULT. 40 Character hax number

        $passcode = "goodluck";
        echo "Before encrypt with sha1 = ". $passcode."<br/>";
        echo "After encrypt with sha1 = ". sha1($passcode)."<br/>";
        echo "After encrypt with sha1 by FALSE = ". sha1($passcode,FALSE)."<br/>";
        echo "After encrypt with sha1 by TRUE = ". sha1($passcode,TRUE)."<br/>";

        $getpassword = "748ad6ccd32e4e52718445bb1cadc01eb08a0df6";

        if($getpassword === sha1($passcode)){
            echo "Password Match with sha1 40 chars hax number";
        }elseif($getpassword === sha1($passcode, TRUE)){
            echo "Password Match with sha1 20 raw chars binary format"; // can't match cuz it's b
        }else{
            echo "Password do not match";
        }
    }

    public function passwordcrypt(){
        // => crypt(string,key)

       $passcode  = "ilovemyjob";
       $cryptkey = "1234abcde";
       echo "Before encrypt wit crypt = ".$passcode."<br/>";
       echo "After encrypt with crypt = ".crypt($passcode,$cryptkey)."<br/>";

       $getpassword = "12HfyUaX52St6";

       if($getpassword === crypt($passcode,$cryptkey)){
        echo "Password Match";
       }else{
        echo "Password do not match";
       }

    }

    public function customencrypt(){
        // openssl_encrypt(p,c,p,o,iv);
        // openssl_encrypt(plaintext,cipher,passphrase,option);
    
        $plaintext = "ilovemyfriend";
        
        echo "Before Encrypt = ".$plaintext."<br/>";

        // cipher method
        $cipher = "aes-128-ctr";

        // passphrase (encryption key)
        $encryptionkey = "abcdefg12345";

        // options
        $options = OPENSSL_ZERO_PADDING; // OPENSSL_ZERO_PADDING is equal with 0 / or OPENSSL_RAW_DATA 

        $iv = "12345678910";

        $finalencrypt = openssl_encrypt($plaintext,$cipher,$encryptionkey,$options,$iv);

        echo "After Encrypt = ".$finalencrypt."<br/>";
        echo strlen($finalencrypt)."<br/>"; //20

        
    
    }

    public function customdecrypt(){
        // openssl_decrypt(e,c,p,o,iv);
        // openssl_decrypt(encrypt,cipher,passphrase,option,initalization vector);

        $encrypted= "p/3kpGqOTamzzTXhNw==";

        // cipher method 
        $ciphar = "aes-128-ctr";

        // passphrase (encryption key)
        $encryptionkey = "abcdefg12345";

        // options
        $options = 0;

        $iv = "12345678910";

        $finaldecrypt = openssl_decrypt($encrypted,$ciphar,$encryptionkey,$options,$iv);

        echo "After Decrypt =".$finaldecrypt."<br/>";
    }


    public function gethashingalgorithm(){
        $hashalgorithm = hash_hmac_algos(); //keyed_hash message authentication code
        echo "<pre>".print_r($hashalgorithm,true)."</pre>";
    }

    public function customstrongencrypt(){
        // openssl_encrypt(p,c,p,o,iv);

        $plaintext = "ilovemyfriend";
        echo "Before Encrypt = ".$plaintext."<br/>";

        $cipher = "aes-128-ctr";

        $encryptionkey = "abcdefg12345";

        $options = OPENSSL_ZERO_PADDING;

        $ivlen = openssl_cipher_iv_length($cipher); //we don't need to attention uz is an arbitrary number
        echo $ivlen ."<br/>";
        $iv = openssl_random_pseudo_bytes($ivlen);// to get dynamic pseudo 
        echo $iv ."<br/>";


        $hash = openssl_encrypt($plaintext,$cipher,$encryptionkey,$options,$iv);
        echo "$hash"."<br/>";

        // hash_hmac(a,h,p,b)
        // hash_hmac(algorithm,hash,passphrase,binary)
        $hmac = hash_hmac('sha256',$hash,$encryptionkey,true);
        echo $hmac."<br/>";
        echo strlen($hmac); //32

        $finalencrypt = base64_encode($iv.$hmac.$hash);

        echo "After Encrypt = ".$finalencrypt."<br/>";
        echo strlen($finalencrypt)."<br/>"; // 92

        
    }

    public function customstrongdecrypt(){
    //    openssl_decrypt(e,c,p,o,iv);

    $encrypted = base64_decode("PcZINu3Y4PW4wUqXQ0LXUca64yFUba6lMxosLo8Nr/CcNHsNShWV8s0CyshF9JD+dmtOUXoxRzZiMzRzN3krZUpBPT0=");
    // echo $encrypted."<br/>";

    $cipher = "aes-128-ctr";

    $encryptionkey = "abcdefg12345";

    $options =  OPENSSL_ZERO_PADDING;

    $ivlen = openssl_cipher_iv_length($cipher); //we don't need to attention cuz is an arbitrary number

    // echo $ivlen."<br/>"; //16
    // substr(e,0,);
    // substr(encrypted,start,end)
    $iv = substr($encrypted,0,$ivlen);
    echo $iv."<br/>";

    $algolen = 32;

    $gethash = substr($encrypted,$ivlen+$algolen);
    echo $gethash."<br/>";

    echo strlen($gethash)."<br/>"; // 20

    $finaldecrypt = openssl_decrypt($gethash,$cipher,$encryptionkey,$options,$iv);

    echo "After Decrypt = ". $finaldecrypt."<br/>";
    }
}

echo "This is Encryption <br/>";


$obj = new myencryption();
$obj->setpassword('password123');
$obj->passworddef();
$obj->passwordbcr();

echo "<hr/>";

$obj->passwordvry();

echo "<hr/>";

$obj->passwordmd5();

echo "<hr/>";

$obj->passwordsha1();

echo "<hr/>";

$obj->passwordcrypt();

echo "<hr/>";

$obj->customencrypt();

echo "<hr/>";

$obj->customdecrypt();

echo "<hr/>";

$obj->gethashingalgorithm();

echo "<hr/>";

$obj->customstrongencrypt();

echo "<hr/>";

$obj->customstrongdecrypt();


// 16PC

?>

<!-- 4EN -->

<!-- 25HA -->