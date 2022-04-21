$.getJSON("/department", function (data) {
    for (i = 0; i < data.length; i++) {
        $("#dep").append(
            `
        <div class="col-sm-12 col-md-6 col-lg-4" style="padding-bottom:10px;">
        <div class="card">
            <img class="card-img-top" src="image/books.jpg" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">`+ data[i].name_dep + `</h5>
                <p class="card-text">`+ data[i].description + `</p>
                <a href="departbook?id=`+ data[i].id + `" class="btn btn-primary">عرض الكتب</a>
            </div>
        </div>
       </div>
        `
        )
    }
});

