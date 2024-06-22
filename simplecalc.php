
    <?php
    if($_SERVER["REQUEST_METHOD"] =="POST"){
        $x=(int)$_POST["num1"];
        $y=(int)$_POST["num2"];


        // echo "Sum:".$x+$y."<br>Dif:".$x-$y."<br>Mul:".$x*$y."<br>Div:".$x/$y."<br>";
        $op=$_POST["operation"];
        switch($op){
            case 'sum':$res=$x+$y;   
            break;
            case 'diff':$res=$x-$y;   
            break;
            case 'mul':$res=$x*$y;   
            break;
            case 'div':
                if($y!=0){
                $res=$x/$y;  
            }else{
                $res=" Error:DivisionByzero";
            } 
            break;
            default: $res=0;
        }

        echo "Result: ".$res;
    }
    // if($_SERVER["REQUEST_METHOD"] == "GET"){
    //     $sum=$_GET["sum"];
    // }
    
    ?>
  