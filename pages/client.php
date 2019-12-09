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
    background: #D4995B;
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
h4 a{
    color: #D4995B;
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
        
        <h4> <a href="">avinash kr</a></h4>
        <small>طرابلس</small>
        <pre>
            <b>
<small>أطعمة</small></b>
     <img src="../img/depositphotos_115690756-stock-illustration-young-and-elegant-woman-avatar.jpg">
       
    </div>
    <div class=" profie-box">
    
        <h4> <a href="">avinash kr</a></h4>
        <small>بنغازي</small>
    <pre>
    <b>
<small>تقنيةالمعلومات</small></b>

     <img src="../img/depositphotos_115690756-stock-illustration-young-and-elegant-woman-avatar.jpg"> 

    </div>
        <div class=" profie-box">
        
            <h4> <a href="projectProfile.php">avinash kr</a></h4>
            <small>الزاوية</small>
            <pre>
                <b>
<small>تقنيةالمعلومات</small></b>
         <img src="../img/depositphotos_115690756-stock-illustration-young-and-elegant-woman-avatar.jpg"> 

        </div>
  <div class=" profie-box">
        
        <h4> <a href="">avinash kr</a></h4>
            <small>سبها</small>
            <pre>
                <b>
<small>الموصلات</small>
        </b>
         <img src="../img/depositphotos_115690756-stock-illustration-young-and-elegant-woman-avatar.jpg"> 
                
        </div>
        <div class=" profie-box">
        
            <h4> <a href="">avinash kr</a></h4>
            <small>سرت</small>
            <pre>
                <b>
<small>السياحة</small></b>
         <img src="../img/depositphotos_115690756-stock-illustration-young-and-elegant-woman-avatar.jpg">
           
        </div>
        <div class=" profie-box">
        
            <h4> <a href="">avinash kr</a></h4>
            <small>مصراته</small>
            <pre>
                <b>
<small>مواد غدائية</small></b>
         <img src="../img/depositphotos_115690756-stock-illustration-young-and-elegant-woman-avatar.jpg">
           
        </div>
        <div class=" profie-box">
        
            <h4> <a href="">avinash kr</a></h4>
            <small>مرزق</small>
            <pre>
                <b>
<small>الثروة الحيوانية</small></b>
     

             <img src="../img/depositphotos_115690756-stock-illustration-young-and-elegant-woman-avatar.jpg">
         
        </div>
        <div class=" profie-box">
        
            <h4> <a href="">avinash kr</a></h4>
            <small>زوارة</small>
            <pre>
                <b>
<small>مواصلات</small></b>
         <img src="../img/depositphotos_115690756-stock-illustration-young-and-elegant-woman-avatar.jpg">
           
        </div>
        
        </div>
    </div>
<?php
include "footer.php";
?>

</body>
</html> 






  