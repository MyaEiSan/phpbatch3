<?php 

interface greeting{
    public function speak();
}

class myanmar implements greeting{

    public function speak(){
        echo "Mingalarpar!";
    }
}

class thailand implements greeting{

    public function speak(){
        echo "Sawadikap!";
    }
}


class english implements greeting{

    public function speak(){
        echo "Hello!";
    }
}

function results($objs){

    foreach($objs as $obj){
        echo $obj->speak(). "<br/>";
    }
}



echo "This is Polymorphism Concept with interface <br/>";

$datas = [
    new myanmar(),
    new thailand(),
    new english()
];

results($datas);

echo "<hr/>";

?>