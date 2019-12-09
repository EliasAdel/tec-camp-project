<html>
<head>
<link rel="stylesheet" href="../css/bootstrap.min.css">
<style>
.active-pink-4 input[type=text]:focus:not([readonly]) {
border: 1px solid #D4995B;
box-shadow: 0 0 0 1px #D4995B;

}
.searchB{
  margin-left:350px;
}
.home{
  margin-top:0px;
}
ul{
  margin-top:10px;
}


</style>
</head>

<body dir="rtl">
<nav  class="navbar navbar-expand-lg bg-dark fixed">
  <a class="navbar-brand text-light home" href="home.php">الرئيسية</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li  class="searchB"><div class="active-pink-4 mb-4 ">
  <input class="form-control" type="text" placeholder="Search" aria-label="Search">
</div></li>
      <li class="nav-item active">
        <a class="nav-link text-light" href="projectProfile.php">صفحتي <span class="sr-only">(current)</span></a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link text-light" href="client.php">المشاريع</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-light active" href="../index.php">تسجيل الدخول</a>
      </li>
    </ul>
  </div>
</nav>

</body>
</html>