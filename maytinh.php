<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>máy tính</title>
    
    <!-- Latest compiled and minified CSS & JS -->
    <link rel="stylesheet" media="screen" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
        
</head>
<body>
<form method="post">
            <input type="text" name="numb1">
            <input type="text" name="numb2">
            <select name="operator" id="">
               <option value="0">None</option>
               <option value="1">Cộng</option>
               <option value="2">Trừ</option>
               <option value="3">Nhân</option>
               <option value="4">Chia</option>
               <option value="5">Bình Phương</option>
            </select>
            <button type="submit" name="submit" value="submit">Calculate</button>
         </form>

   Kết quả:

        <?php 

            if (isset($_POST['submit'])) {
                $result1 = $_POST['numb1'];
                $result2 = $_POST['numb2'];
                $operator = $_POST['operator'];
                switch ($operator) {
                    case '0':
                        echo "You need to select any operator";
                        break;
                    case '1':
                        echo $result1 + $result2;
                        break;
                    case '2':
                        echo $result1 - $result2;
                        break;
                    case '3':
                        echo $result1 * $result2;
                        break;
                    case '4':
                        if($result2 == 0){
                            echo "lỗi chia không!!! nhập lại giá trị";
                        }
                        else{
                            echo $result1 / $result2;
                           
                        }
                        break;
                        
                    case '5':
                        echo $result1 ** $result2;
                        break;
                }
            }


         ?>
        

    
<script src="//code.jquery.com/jquery.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

</body>
</html>