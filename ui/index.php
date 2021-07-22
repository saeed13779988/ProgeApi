<?php

$url = 'http://localhost/api/items/read';
$ch = curl_init($url);
$data= "";
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($ch);

$array = json_decode($result, true);




?>
<!doctype html>
<html lang="ar" dir="rtl">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.rtl.min.css"  crossorigin="anonymous">

    <title>Api_Ui</title>
</head>
<body>
<?php
include 'static/hader.php';
?>
<div class="card">

    <div class="card-body">
        <li class="list-group-item"  style="border: none;margin:5%;margin-bottom:-60px;width: 90%">  <a href="create.php" class="btn btn-primary">اضافه کردن کتاب</a></li>
        <table dir="ltr" style="margin:5%;width: 90%"  class="table table-hover">


            <thead>

            <tr>
                <th scope="col">#</th>
                <th scope="col">نام</th>
                <th scope="col">توضیحات</th>
                <th scope="col">قیمت</th>
                <th scope="col">ویرایش</th>
                <th scope="col">حذف</th>

            </tr>
            </thead>
            <tbody>
            <?php
            foreach ($array as $re)
            {
                ?>

                <tr>
                    <th scope="row">
                        <?=  $re['id']?>
                    </th>
                    <td>
                        <?=$re['name']?>
                    </td>
                    <td>
                 <textarea id="w3review" name="w3review" rows="4" cols="50">
            <?=$re['description']?>
                 </textarea>
                    </td>
                    <td>
                        <?=$re['price']?>
                    </td>
                    <td>
                        <?php



                        ?>
                        <a href="update.php?id=<?=$re['id'] ?>"  class="btn btn-primary">ویرایش</a>
                    </td>
                    <td>
                        <a href="Action/delete.php?id=<?= $re['id']?>" class="btn btn-danger">حذف</a>
                    </td>
                </tr>
                <?php
            }

            ?>
            </tbody>


        </table>
    </div>
</div>











<!-- Optional JavaScript-->
<script src="bootstrap/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>

<script src="bootstrap/js/bootstrap.min.js"  crossorigin="anonymous"></script>

</body>
</html>
<?php
curl_close($ch);
?>