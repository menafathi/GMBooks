<html>

<head>
    <title>عرض الكتب</title>
    <link rel="icon" href="image/icon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<script
  src="https://code.jquery.com/jquery-3.6.0.js"
  integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
  crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="style.css" />
<script src="js/json.js"></script>
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

    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" style="height:400px;" src="image/a1.jpg" alt="First slide">
                <div class="carousel-caption">
                    <h3>تحميل او قراء اونلاين</h3>
                    <p class="badge badge-dark">يمكنك قراء الكتاب اونلاين او تحميل علي الجهاز</p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" style="height:400px;" src="image/a2.jpg" alt="Second slide">
                <div class="carousel-caption">
                    <h3 class="text-dark">كتب التكولوجيا</h3>
                    <p class="badge badge-dark"> يوجد العديد من كتب التكولوجيا الي تطوير مهارتك في البرمجة</p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" style="height:400px;" src="image/a3.jpg" alt="Third slide">
                <div class="carousel-caption">
                    <h3 class="text-dark">انواع الكتب</h3>
                    <p class="badge badge-dark">يوجد العديد من انواع الكتب للاستمتاع و التعلم و تصفية العقل</p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" style="height:400px;" src="image/a4.jpg" alt="Third slide">
                <div class="carousel-caption">
                    <h3 class="text-dark">انواع الكتب</h3>
                    <p class="badge badge-dark">يوجد العديد من انواع الكتب للاستمتاع و التعلم و تصفية العقل</p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <div class="bg text-center">
        <h1>انواع الكتب </h1>
        <p>يوجد العديد من انواع الكتب منها عن التكولوجيا و لادابية و العلمية</p>
    </div>
    <div class="container">
        <div class="row" id="dep">
      
        </div>
    </div>
    <footer class="bg-light text-center text-lg-start">
        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            برمجة بواسطة مينا فتحي
            <a class="text-dark" href="https://www.mediafire.com/file/onh6fx4nxbhms8v/_GMBooks_15434846.apk/file?fbclid=IwAR0j8UwwRFgxRQlT40gpmJR0a2i3KW3yHj30p7c-r7QEVANWPj3-SJHJ3Dc">GMBooks.apk</a>
        </div>
        <!-- Copyright -->
    </footer>
    <style>
        .disclaimer{
            display:none;
        }
    </style>
</body>

</html>