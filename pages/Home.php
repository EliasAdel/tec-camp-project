<html>
    <head>
    <title>
        home
    </title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">


    <style>
          .al{
            padding: 10px;
            margin-bottom: 5px;
          }
          .cate{
              float: right;
              color:black;
          }
        .container{
            margin-top:50px;
            background-color: white;
            border-radius: 10px;
            padding-top: 20px;
            opacity:90%;
            margin-bottom:180px;
        }
        div a{
            color:black;
        }
    
img{
    border-radius:10px ;
} 
          
    </style>

    </head>
    <body style="background-color:#fefefe ;">
            <?php
            include "navBar.php"
            ?>
                
                <div style="background-color: #D4995B"; class="container">
                <div class ="al">
                    <img class ="im" src="../img/wallpaper.jpg" width="100%" height="40%">
                    <a href="client.php">See More</a>
                    <p class="cate">Information Technology</p>
                </div> 
                
                <div class ="al">
                    <img class ="im" src="../img/wallpaper.jpg" width="100%" height="40%">
                    <a href="">See More</a>
                    <p class="cate">Information Technology</p>
                </div> 
                
                </div> 
                

            <?php
            include "footer.php";
            ?>

                

    </body>

</html>