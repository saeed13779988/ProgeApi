
    <!doctype html>
    <html lang="ar" dir="rtl">
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.rtl.min.css"  >

        <title>Api_Ui</title>
    </head>
    <body>
    <?php
    include 'static/hader.php';
    ?>


    <form method="post" action="Action/create.php" style="width: 80% ;margin: 8%">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">نام</label>
            <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>

        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">توضیحات</label>
            <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3" required></textarea>

        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">قیمت</label>
            <input type="text" name="price" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>

        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">آیدی دسته بندی</label>
            <input type="number" name="category_id" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>

        </div>

        <button type="submit" name="sand" class="btn btn-primary">ارسال</button>
    </form>


    <!-- Optional JavaScript-->
    <script src="bootstrap/js/bootstrap.bundle.min.js" ></script>

    <script src="bootstrap/js/bootstrap.min.js"  ></script>

    </body>
    </html>
