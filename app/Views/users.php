<html>

<head>
    <title>عرض الكتب</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="icon" href="image/icon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
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
    <style>
        .table td,
        .table th {
            padding: 0.75rem;
            vertical-align: top;
            border-top: none;
        }

        .table thead th {
            vertical-align: none;
            border-bottom: none;
            border-top: none;

        }

        .table th {
            padding: 0.75rem;
            vertical-align: none;
            border-top: none;
        }
    </style>
    <div class="bg">
        <?php
        foreach ($data_user as $value) {
        ?>
            <h1 class="text-center">الناشــــــر</h1>
            <table class="table text-center" style="color:white">
                <thead>
                    <tr>
                        <th>الاسم</th>
                        <th>نبذة</th>
                        <th>عدد الكتب</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?php echo ($value->username); ?></td>
                        <td><?php echo ($value->description); ?></td>
                        <td><?php print_r($all_num); ?></td>
                    </tr>
                </tbody>
            </table>
        <?php
        }
        ?>
    </div>
    <div class="container">
        <div class="row" id="ee">
            <?php
            foreach ($all_books as $key) {
            ?>
                <div class='col-sm-12 col-md-6 col-lg-3' style='padding-bottom:10px;'>
                    <div class='card'>
                        <img class='card-img-top' src='image/books1.jpg' alt='Card image cap'>
                        <div class='card-body'>
                            <h5 class='card-title'><?php echo ($key->name); ?></h5>
                            <a href='/book?id=<?php echo ($key->id); ?>' class='btn btn-primary'>عرض الكتب</a>
                        </div>
                    </div>
                </div>

            <?php
            }
            ?>
        </div>
        <?php
        echo ($but_user);
        ?>
    </div>
    <script>
        function add_more(value, offset) { //ee
            if (value > offset) {
                $("#end").html("<h1 class='badge badge-danger'>نهاية</h1>");
            } else {
                a = value + 4
                $("#add_more").attr("onclick", "add_more(" + a + "," + offset + ")");
                $.getJSON("/view_all_books_with_user",

                    {
                        "id": <?php echo ($_GET["id"]); ?>,
                        "param": value
                    },
                    function(data) {
                        for (i = 0; i < data.length; i++) {
                            $("#ee").append(
                                `
                    <div class='col-sm-12 col-md-6 col-lg-3' style='padding-bottom:10px;'>
                    <div class='card'>
                        <img class='card-img-top' src='image/books1.jpg' alt='Card image cap'>
                        <div class='card-body'>
                            <h5 class='card-title'>` + data[i].name + `</h5>
                            <a href='/book?id=` + data[i].id + ` 'class='btn btn-primary'>عرض الكتب</a>
                        </div>
                    </div>
                   </div>
                    `
                            )
                        }
                    })
                if (a > offset) {
                    $("#end").html("<p class='alert alert-danger'>لا يتوفر كتب</p>");
                }
            }
        }
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
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