<html>

<head>
    <title>عرض الكتب</title>
    <link rel="icon" href="image/icon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="js/json.js"></script>
    <link rel="stylesheet" href="style.css" />
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top ">
        <a class="navbar-brand" href="/Home">GM Books</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" href="/Home">انواع الكتب <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/all_users">ناشرين الكتب</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/add_users">طلب عضوية نشر</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0" action="/serch">
                <input class="form-control mr-sm-2" type="search" name="name" placeholder="بحث" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">اسم الكتاب</button>
            </form>
        </div>
    </nav>
    <div class="example-box text-center" style="padding:10%">
        <h3>تسجل دخول و انشاء حساب</h3>
        <p>يمكناك نشر كتباك الخاص بك من خلال موقعنا و انشاء حساب خاص بينا</p>
        <div class="background-shapes">

        </div>
    </div>
    <form class="form-inline" style="padding:2%;" action="/action_page.php">

        <label for="email" class="mr-sm-2">اسم المستخدم</label>
        <input type="email" class="form-control mb-2 mr-sm-2" placeholder="اسم المستخدم" id="email">
        <label for="pwd" class="mr-sm-2">كلمة المرور</label>
        <input type="password" class="form-control mb-2 mr-sm-2" placeholder="كلمة المرور" id="pwd">
        <button type="submit" class="btn btn-primary mb-2">تسجيل</button>
    </form>
    <div class="example-box1 text-center">
        <div class="background-shapes">

        </div>
        <h3 class="text-center">انشاء حساب</h3>
    </div>
    <form method="get" style="padding: 2%;">
        <?php
        if ($send == "send" || $send == "fill") {
            if ($username == "" || $password == "") {
        ?>
                <div class="alert alert-danger">
                    برجاء ملي الفراغات
                </div>
            <?php
            } else {
            }
        } else if ($send == "1") {

            ?>
            <div class="alert alert-success">
                تم تسجيل بنجاح
            </div>
            <?php
        } else if ($send == "0") {
            ?>
   <div class="alert alert-warning">
       موجود مسبقا
    </div>
            <?php
            }
            ?>
            <div class="form-group">
                <label for="exampleInputEmail1">اسم المستخدم</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="اسم المستخدم ">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">كلمة المرور</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="كلمة المرور">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">كلمة المرور</label>
                <textarea name="description" class="form-control" id="exampleInputPassword1" placeholder="نبذه"></textarea>
            </div>
            <button type="submit" value="send" name="send" class="btn btn-primary">انشاء</button>
    </form>
    <footer class="bg-light text-center text-lg-start">
        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            برمجة بواسطة مينا فتحي
            <a class="text-dark" href="https://www.mediafire.com/file/onh6fx4nxbhms8v/_GMBooks_15434846.apk/file?fbclid=IwAR0j8UwwRFgxRQlT40gpmJR0a2i3KW3yHj30p7c-r7QEVANWPj3-SJHJ3Dc">GMBooks.apk</a>
        </div>
        <!-- Copyright -->
    </footer>
    <style>
        .disclaimer {
            display: none;
        }
    </style>
</body>

</html>