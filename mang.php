<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mảng</title>
</head>
<body>
    <?php
    // $mang = array(1,2,3,22,56);
    // $leng = count($mang);
    // for($i=0; $i< $leng; $i++){
    //     echo "giá trị phần tử thứ ".$i. "là:".$mang[$i] ."<br/>";
    // }
    // $tongchan=0;
    // $tongle=0;
    // for($i=0; $i< $leng; $i++){
    //    if($mang[$i] % 2 ==0){
    //        echo "các phần tử chẵn trong mảng là:".$mang[$i] ."<br/>";
    //        $tongchan += $mang[$i];
           
    //    }
     
    // }
    // for($i=0; $i< $leng; $i++){
    //     if($mang[$i] % 2 !==0){
    //     echo "các phần tử lẻ là:" .$mang[$i];
    //         $tongle += $mang[$i];
    // }}
    // echo "tổng lẻ là:".$tongle;

    // echo "tổng chẵn là:".$tongchan;
    // function giaithua($n){
    //    $giaithua = 1;
    //     for($i =  2 ; $i <= $n ; $i++){
           
    //        $giaithua = $giaithua *$i;
           
    //     }
    //     return $giaithua;
    // } 
      
    // $giaithua = giaithua(5);
    // echo "giai thừa của 5:".$giaithua;
    // function daonguoc($str){
    //     return strrev($str);
    // }
    // $str ="hello";
    // echo "chuỗi sau khi đảo ngược là:" .daonguoc($str);
    // function tongbp($a, $b){
    //     return $a*$a + $b*$b;
    // }
    // echo "tong bình phương của 3 và 5 là:" .tongbp(3,5);
    // function ktthuong($str){
    //     $chuoikt = $str;
    //     if(strtolower($chuoikt) == $str){
    //         return 1;
    //     }
    //     else{
    //         return 0;
    //     }
    // }
    // $chuoi ="tôi tên là:Toán Lê";
    //  if(ktthuong($chuoi)==1){
    //      echo "chuỗi toàn chữ thường";
    //  }else{
    //      echo "chuỗi không phải toàn chữ thường";
    //  }
     function sapxep($array){
         $leng = sizeof($array);
         for($i = 0; $i < $leng-1; $i++){
            for($j = $i+1  ;$j < $leng ;$j++){
                if($array[$i] > $array[$j]){
                    $tem = $array[$i];
                    $array[$i]=$array[$j];
                    $array[$j]=$tem;
                }
            }
         }
         for($i =0; $i < $leng;$i ++){
             echo "phần tử mảng sau khi sắp xếp tăng dần là:".$array[$i] ."<br/>";
         }
     }
     function sapxepgiam($array){
        $leng = sizeof($array);
        for($i = 0; $i < $leng-1; $i++){
           for($j = $i+1  ;$j < $leng ;$j++){
               if($array[$i] < $array[$j]){
                   $tem = $array[$i];
                   $array[$i]=$array[$j];
                   $array[$j]=$tem;
               }
           }
        }
        for($i =0; $i < $leng;$i ++){
            echo "phần tử mảng sau khi sắp xếp giảm dần là:".$array[$i] ."<br/>";
        }
    }
     $array = array(1,23,3,0,24,10,50);
     sapxep($array);
     sapxepgiam($array);
    ?>
   <input type="text" name="dulieu">
   <button type="button" name="submit">tính</button>

</body>
</html>