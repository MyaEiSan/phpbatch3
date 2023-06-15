<?php  

$getdate = getdate();
$getyear = $getdate["year"];
// echo "$getyear";

$getwday = $getdate["wday"];
// echo $getwday;


?>
<!DOCTYPE html>
<htm>
    <head>
        <title>Work with HTML</title>
    </head>
    <body>
        <h1>Welcome to our class</h1>

        <?php 
        date_default_timezone_set('Asia/Yangon');

        $time = time();
        // $hours = date("G",$time);
        $hours = date("H",$time);
        echo $hours;

        if($hours < 12){
            echo "Good Morning";
        }elseif($hours < 18){
            echo "Good Afternoon";
        }elseif($hours < 22){
            echo "Good Evening";
        }else{
            echo "Good Night";
        }
        ?>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>

        <hr/>

        <?php 
        // if($getwday == 0){
        //     echo "Today is Sunday";
        // }elseif($getwday == 1){
        //     echo "Today is Monday";
        // }elseif($getwday == 2){
        //     echo "Today is Tuesday";
        // }elseif($getwday == 3){
        //     echo "Today is Wednesday";
        // }elseif($getwday == 3){
        //     echo "Today is Thursday";
        // }elseif($getwday == 3){
        //     echo "Today is Friday";
        // }elseif($getwday == 3){
        //     echo "Today is Saturday";
        // }
        ?>

        

    <?php if($getwday == 0): ?>
        Today is Sunday
    <?php elseif($getwday == 1): ?>
        Today is Monday
    <?php elseif($getwday == 2): ?>
        Today is Tuesday
    <?php elseif($getwday == 3): ?>
        Today is Wednesday
    <?php elseif($getwday == 4): ?>
        Today is Thursday
    <?php elseif($getwday == 5): ?>
        Today is Friday
    <?php elseif($getwday == 6): ?>
        Today is Saturday
    <?php else: ?>
        Something Wrong
    <?php endif; ?>
    

        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>

        <footer>
            <small>Copyright <?php echo $getyear; ?>. All right reserved.</small>
        </footer>
    </body>
</htm>