<style>
*{
margin: 0;
padding: 0;
}

body{
    background:#efefef;
    font-family: sans-serif;

}
.profie-box{
    width: 280px;
    height: 320px;
    background: #fff;
    border-radius: 4px;
    margin-bottom: 30px;
    box-shadow: 0 10px 10px 10px rgba(115, 193, 225, 0.1) ;
    padding: 20px;
    position: relative;
    transition: background 0.7s;
    overflow:hidden;

}

.profie-box img{
    width: 100px;
    position: absolute;
    top: 20px;
    right: 10px ;
    border-radius: 4px;
    transition: 5s;
    
}
.profie-box h4{
    margin-top: 25px;
margin-bottom: 5px;
color: #2196f3;

}
small{
    color: #555;

}
.profie-box p{
    text-align: center;
    line-height: 177px;
    color:#555 ;


     

}
.team-row{
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
    width: 65%;
    margin: auto;
     
}

.profie-box:hover{
    background: #2196f3;
}
.profie-box:hover h4 a{
    color: #ffffff;

}
.profie-box:hover p{
    color: #efefef;
}
.profie-box:hover small{
    color: #efefef;
}
.profie-box:hover.team-row{
     background: #fff;

}
.maindiv{
    margin-top :25px;
}
h4 a:hover{
    text-decoration: none;
}

</style>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <title>اصحاب المشاريع</title>
</head>
<body>
    <?php
    include "navBar.php"
    ?>
<div class="maindiv">
<div class="team-row">
<div class=" profie-box">
            
            <h4> <a href="">مصرف الجمهورية</a></h4>
            <small>الوجبات السريعة</small>
</br>
<small>التمويل :150,000د.ل</small>
                                
            <img src="../img/depositphotos_115690756-stock-illustration-young-and-elegant-woman-avatar.jpg">
        
        
        </div>
    <div class=" profie-box">
            
            <h4> <a href="">مصرف الأمان</a></h4>
            <small>معدات رياضية</small>
</br>
<small>التمويل :200,000د.ل</small>
                                
            <img src="../img/depositphotos_115690756-stock-illustration-young-and-elegant-woman-avatar.jpg">
        
        
        </div>
    <div class=" profie-box">
            
            <h4> <a href="">مؤسسة خيري</a></h4>
            <small>أعمال خيرية</small>
</br>
<small>التمويل :20,000د.ل</small>
                                
            <img src="../img/depositphotos_115690756-stock-illustration-young-and-elegant-woman-avatar.jpg">
        
        
        </div>
        <div class=" profie-box">
            
            <h4> <a href="">مؤسسة النفط  </a></h4>
            <small>السيارات</small>
</br>
<small>التمويل :260,000د.ل</small>
                                
            <img src="../img/depositphotos_115690756-stock-illustration-young-and-elegant-woman-avatar.jpg">
        
        
        </div>
        <div class=" profie-box">
            
            <h4> <a href="">حسني بي</a></h4>
            <small>التعليم</small>
</br>
<small>التمويل :1,500,000د.ل</small>
                                
            <img src="../img/depositphotos_115690756-stock-illustration-young-and-elegant-woman-avatar.jpg">
        
        
        </div>
        <div class=" profie-box">
            
            <h4> <a href="">مصرف النوران</a></h4>
            <small>العقارات</small>
</br>
<small>التمويل :500,000د.ل</small>
                                
            <img src="../img/depositphotos_115690756-stock-illustration-young-and-elegant-woman-avatar.jpg">
        
        
        </div>
        
        
        </div>
    </div>
<?php
include "footer.php";
?>

</body>
</html> 