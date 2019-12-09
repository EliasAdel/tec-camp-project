<html>
<head> 
<link rel="stylesheet" href="../css/style.css">
<link rel="stylesheet" href="../css/bootstrap.min.css">
<style>
    body{
        overflow:hidden;
        
    }
    .pic{
        float: right;
    }
    h1{
        color: black;
    }
    form{
        margin-top: 30px;
        margin-bottom: 30px;
        margin-right:0;
       padding-bottom:35px;
    }
    .container{
        -webkit-border-radius:3px;
    -moz-border-radius:3px;
    border-radius:10px;
    }
    button a{
        color:white;
        
    }
    button a:hover{
        text-decoration:none;
        color:white;
    }
</style>
</head>    
<body dir="rtl"> 
    <?php include "navBar.php" ?>

    <div style=" background-color: #D4995B;;"class="container">
        <form>
            <div class="pic"><img  width="175px" height="175px" src="../img/depositphotos_115690756-stock-illustration-young-and-elegant-woman-avatar.jpg"></div> 
            <h2>الإسم</h2>
            <h4>الصنف</h4>
            <p>العنوان</p>
            <p>e-mail</p></br>
            <p>نبذة عن المشروع ...................................................................</p></br></br>

            <button type="button" class="btn btn-info">price</button></br></br></br>
            <button type="button" class="btn btn-dark"><a href="projectForm.php">تعديل البيانات</a></button>
            <button type="button" class="btn btn-danger"><a href="../index.php">تسجيل الخروج</a></button>
            <button type="button" class="btn btn-success"><a href="#">محادثة </a></button>
            
            <form>
    </div>


    <?php include "footer.php" ?>
</body>
</html>
