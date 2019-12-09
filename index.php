<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>نماذج</title>
    <!-- css -->
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/earlyaccess/droidarabickufi.css"/>
    <link rel="stylesheet" type="text/css" href="font-awesome-4.2.0/css/font-awesome.min.css"/>
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
    <!-- js -->
    <script src="js/jquery-2.1.1.min.js"></script>
    <script src="js/myjquery.js"></script>

    <style>
    body{
        background-image: url('img/wallpaper.jpg');
        color:white;
        background-size:cover;
        background-repeat: no-repeat;
        overflow:hidden;
    }
    button a{
        color:white;
        text-decoration:none;
    }
    button a:hover{
        color:white;
        text-decoration:none;
    }
    
    </style>
</head>
<body>
    
    
    <div class="header"></div>
    
    <div class="content">
        
        <!-- BUTTONS START -->
        <div class="tabs">
            <div class="infotab"><span class="fa fa-users"></span></div>
            <div class="mestab"><span class="fa fa-envelope"></span></div>
            <div class="regtab"><span class="fa fa-plus"></span></div>
            <div class="logtab"><span class="fa fa-sign-in"></span></div>
        </div>
        <!-- BUTTONS END -->
        
        <!-- LOGIN FORM START -->
        <div class="log">
            <div class="formhead">تسجيل الدخول</div>
            <form id="login_form" action="#" method="post">
                <label>
                    <input type="text" id="username" placeholder="اسم المستخدم"/><span class="fa fa-user icons"></span>
                </label>
                <div class="alertms r8"></div>
                <label>
                    <input type="password" id="password" placeholder="كلمة المرور"/><span class="fa fa-lock icons"></span>
                </label>
                <div class="alertms r9"></div>
                <button class="buttonsub" type="submit"><a href="pages/Home.php">دخول لحسابك</a></button>
                <input type="checkbox" id="check" value="تذكرنى"/><span class="rem">تذكرنى</span>
                <div class="forgot"><a href="#"> نسيت كلمة المرور ؟</a></div>
            </form>
        </div>
        <!-- LOGIN FORM END -->
        
        <!-- REGISTER FORM START -->
        <div class="reg">
            <div class="formhead">حساب جديد</div>
            <form id="register_form" action="#" method="post">
                <label>
                    <input type="email" id="mail" placeholder="البريد الالكترونى"/><span class="fa fa-at icons"></span>
                </label>
                <div class="alertms r1"></div>
                <label>
                    <input type="password" id="pass" placeholder="كلمة المرور"/><span class="fa fa-lock icons"></span>
                </label>
                <div class="alertms r2"></div>
                <label>
                    <input type="password" id="pass2" placeholder="اعادة كلمة المرور"/><span class="fa fa-lock icons"></span>
                </label>
                <div class="alertms r3"></div>
                
                <div class="alertms r3"></div>
                <label class="container">رائد الأعمال
                        <input type="radio" checked="checked" name="radio">
                        <span class="checkmark"></span>
                      </label>
                      <label class="container">الجهة الداعمة
                        <input type="radio" name="radio">
                        <span class="checkmark"></span>
                      </label>
                      
                <div class="alertms r4"></div>
                <button class="buttonsub" type="submit">انشاء حساب</button>
            </form>
        </div>
        <!-- REGISTER FORM END -->
        
        <!-- CONTACT FORM START -->
        <div class="mes">
            <div class="formhead">ارسال رسالة</div>
            <form id="message_form" action="#" method="post">
                <label>
                    <input type="text" id="yourname" placeholder="اسمك"/><span class="fa fa-arrow-left icons"></span>
                </label>
                <div class="alertms r5"></div>
                <label>
                    <input type="email" id="yourmail" placeholder="البريد الالكترونى"/><span class="fa fa-arrow-left icons"></span>
                </label>
                <div class="alertms r6"></div>
                <textarea id="message" placeholder="رسالتك"></textarea>
                <div class="alertms r7"></div>
                <button class="buttonsub" type="submit">ارسال الرسالة</button>
            </form>
        </div>
        <!-- CONTACT FORM END -->
        
        <!-- INFO FORM START -->
        <div class="inf">
            <div class="formhead">تواصل معنا</div>
            <div class="about1"><span class="fa fa-phone"></span></div>
            <div class="about2"><span class="fa fa-map-marker"></span></div>
            
        </div>
        <!-- INFO FORM END -->
    </div>
    
    
</body>
</html>