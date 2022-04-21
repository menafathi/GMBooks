<html>

<head>
    <title>عرض الكتب</title>
    <link rel="icon" href="image/icon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
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

    <?php
    foreach ($data as $d) {
    ?>
        <button style="width:100%;" type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
            عرض التفاصيل
        </button>
        <div class="modal" id="myModal">
            <div class="modal-dialog">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">
                            <p class="badge badge-success">اسم الكتاب :</p><?php echo ($d->name); ?>
                        </h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        <p>التفاصيل</p>
                        <h5> مؤلف الكتاب : <a href="/user?id=<?php echo ($d->id_user); ?>"><?php echo ($user); ?></a></h5>
                        <h5><?php echo ($d->description); ?></h5>
                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">
                            اغلاق
                        </button>
                        <a href="<?php echo ($d->book); ?>" type="button" class="btn btn-success">
                            تحميل
                        </a>
                    </div>

                </div>
            </div>
        </div>
        <iframe src="https://docs.google.com/gview?url=https://menafathigm.000webhostapp.com/<?php echo ($d->book) ?>&embedded=true" width="100%" height="100%"></iframe>
    <?php
    }
    ?>
    <footer  class="bg-light text-center text-lg-start">
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