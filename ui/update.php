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
    <link rel="stylesheet" href="bootstrap/css/bootstrap.rtl.min.css"  >

    <title>Api_Ui</title>
</head>
<body>
<?php
include 'static/hader.php';
?>

<?php
foreach ($array as $re)
{
if($_GET['id']==$re['id']){



?>
<form method="post" action="Action/update.php?id=<?=$re['id']?>" style="width: 80% ;margin: 8%">


            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">نام</label>
                <input type="text" name="name" class="form-control" id="exampleInputEmail1" value="<?=$re['name']?>" aria-describedby="emailHelp" required>

            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">توضیحات</label>
                <textarea class="form-control" name="description" id="exampleFormControlTextarea1"  rows="3" required> <?=$re['description']?></textarea>

            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">قیمت</label>
                <input type="text" name="price" class="form-control" id="exampleInputEmail1" value="<?=$re['price']?>" aria-describedby="emailHelp" required>

            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">آیدی دسته بندی</label>
                <input type="number" name="category_id" class="form-control" value="<?=$re['category_id']?>" id="exampleInputEmail1" aria-describedby="emailHelp" required>

            </div>
            <button type="submit" name="sand" class="btn btn-primary">ارسال</button>
        <?php
    }
    }
    ?>


</form>


<!-- Optional JavaScript-->
<script src="bootstrap/js/bootstrap.bundle.min.js" ></script>

<script src="bootstrap/js/bootstrap.min.js"  ></script>

</body>
</html>
