<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Practice </title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    
    <div class="flex-container">

        <div class="header">     
               <?php include 'logo.inc.php' ?>         
               <?php include 'menu.inc.php' ?>	   
        </div>       
     	
        <div class="about_me">
	  <?php include 'index.php' ?>		
          <h1>  <?php  echo $p;  ?> </h1>

            <div class="data">
                <div class="myImg">
                    <?php  echo '<img src="/img/home.jpg">'; ?>                    
                </div>

                <div class="fullname">
                    <p> My name 
                    <?php echo $name, ' ', $surname . '<br>'; 
                          echo 'CITY', ' ', $city; ?>                                      
                    </p> 
           
                    <p> I`m
                    <?php  echo $age;   ?> year old         
                    </p>
                    <p> We have learned how to create variables</p>
                    <p> We have studied simple operations with them</p>
                </div>
            </div>

            <div class="knowledge">
                                   
                    <?php  include 'knowladge.inc.php'; ?>
                    <?php   echo $a, ' ', $b, ' ', $c; ?> <br>
                                       
                    <?php
                        $a = 10;
                        $b = 20;
                        $c = $a ** $b;
                        echo "a= ", $a,"b= ",$b, " a^b result = ", $c;
                    ?>   <br>                
                     <?php
                        echo $d;
                    ?> 

            </div>

            <div class="article">
                <p class="text"> Dori me interimo adapare dori me </p>
                <p class="text"> Ameno ameno lantire lantiremo dori me</p>
                <p class="text"> Ameno omenare imperavi ameno</p>
                <p class="text"> Dimere dimere mantiro mantiremo ameno</p>

            </div>
        </div>

            <?php include 'footer.inc.php' ?>

    </div>


</body>
</html>