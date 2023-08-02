<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php foreach($data as $data) {?>
        <div class="col-lg-4 col-md-6 service-item-top wow fadeInUp" data-wow-delay="0.1s">
        <a class="btn btn-primary btn-lg d-block" type="text" href="<?= '/detail/'.$data['id'] ?>"><?= $data['pertanyaan'] ?> <i class="fa fa-arrow-right"></i></a>
        </div>
    <?php } ?>
</body>
</html>