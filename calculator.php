<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calculator</title>
    
    <!-- Latest compiled and minified CSS & JS -->
    <link rel="stylesheet" media="screen" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
      <link rel="stylesheet" href="css.css">
</head>
<body>

   <?php 



$arrOp = array("++", "+-", "+*", "+/", "--", "-+", "-*", "-/", "**", "*+", "*-", "*/", "//", "/+", "/-", "/*");
    $arrOpFL = array("+", "-", "*", "/");
    $sizeFL = sizeof($arrOpFL);
    $size = sizeof($arrOp);
    $result = '';
    if(isset($_POST['submit'])){
        $input = $_POST['giatri'];
        $count = 0;
        $FL = 0;
        for($i = 0; $i < $size; $i++){

            if (strlen(strstr($input, $arrOp[$i]))>0){
                $count++;
            }
        }
        for ($i=0; $i<$sizeFL; $i++){
            if($input[0] == $arrOpFL[$i] || $input[strlen($input)-1] == $arrOpFL[$i]){
                $FL++;
            }
        }
        if($count == 0 && $FL == 0 ){
           $result = eval('return ' . $input . ';');
           
        }
        else
            $result = "Syntax error";

    }

    

?>
    <div class="container">
        
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <div class="maytinh">
                
               
                <form action="" method="POST" role="form">
                <div class="nhap">
                
               
               
                     <input type="text" class="giatri" name="giatri" value="" placeholder="Nhập giá trị">
                
                     <input type="text" class="ketqua" name="ketqua" value = "<?php if(isset($_POST['submit'])) echo (isset($result ))?$result:'';?>">
                     </div>
           
               
                <div class="row">
                   

                   
                
                  
                        <button type="button" class="number">1</button>
               
               
                   
               
                        <button type="button" class="number">2</button>
              
               
                   
           
                        <button type="button" class="number">3</button>
             
              

                   
                
                        <button type="button" class="number toantu">+</button>
                
            
                </div>
                <div class="row">
                  

                   
                
               
                        <button type="button" class="number">4</button>
              
                 

                   
              
                        <button type="button" class="number">5</button>
             
                
                   
               
                        <button type="button" class="number">6</button>
            
    

                   
              
                        <button type="button" class="number toantu">-</button>
                  
                </div>
                <div class="row">
                   

                   
                
                        <button type="button" class="number">7</button>
                
                

                   
                
                        <button type="button" class="number">8</button>
             
              
                   
               
                        <button type="button" class="number">9</button>
              
              

                   
               
                        <button type="button" class="number toantu">*</button>
               
                
             
                <div class="row">
                   

                   
                
                  
                        <button type="button" class="number">0</button>
                
                

                   
               
                        <button type="button" class="CE xoa">CE</button>
               
                        <button type="button" class="DE xoa">DE</button>
           
                
                   
               
                        <button type="button" class="number toantu">/</button>
               
            
                </div>
              
              
              
                
                    
                
                    <button type="submit" name ="submit" class="submit"  >Tính</button>
                </form>
                </div>
            </div>
        </div>
        
    </div>
    
<script src="//code.jquery.com/jquery.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>


 <script>
 $(document).ready(function(){
        var str ="";
        
        var text ="";
       $(".number").on('click',function(){
           var buttonpress = $(this).html();
           
         
         
            str += buttonpress;
           $(".giatri").val(str);
           console.log(str);
           
           
          
           
      
           
       });
      
       $(".CE").on('click',function(){
           str="";
           $(".giatri").val(str);
       });
       $(".DE").on('click',function(){
           text =  $(".giatri").val();
            str = text.substring(0, text.length - 1);
            $(".giatri").val(str);
          
       });
       

});
 </script>
</body>
</html>