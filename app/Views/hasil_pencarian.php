<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pencarian Google</title>
    <link href="<?= base_url('css/bootstrap.min.css') ?>" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500" rel="stylesheet" />
    <link href="https://cdn.datatables.net/v/dt/jq-3.7.0/dt-1.13.6/datatables.min.css" rel="stylesheet">
  
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
        }

        /* Gaya untuk container hasil pencarian */
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }

        /* Gaya untuk judul pertanyaan */
        h2 {
            margin: 0;
            font-size: 24px;
            font-weight: normal;
        }

        /* Gaya untuk tautan pertanyaan */
        h2 a {
            color: #fdfcff; /* Warna biru Google */
            text-decoration: none;
        }

        /* Gaya untuk tautan pertanyaan saat dihover */
        h2 a:hover {
            text-decoration: underline;
        }

        /* Gaya untuk ikon panah kanan */
        .fa-arrow-right {
            margin-left: 5px;
        }

        /* Gaya untuk teks jawaban */
        p {
            color: #545454; /* Warna abu-abu */
            margin-top: 5px;
        }

        /* Gaya untuk efek fadeIn */
        .service-item-top {
            opacity: 0;
            transition: opacity 0.5s;
        }

        .service-item-top.wow.fadeInUp {
            opacity: 1;
        }
    </style>
</head>
<body>
<div class="container mt-2">
        <div class="row">
            <div class="col">
                <?php foreach($data as $data) {?>
                    <a href="<?= '/detail/'.$data['id'] ?>">
                    <div class="card shadow mt-3">
                        <div class="card-header bg-primary">
                            <div class="d-flex">
                                <h2 class='text-light'>
                                    
                                        <?= $data['pertanyaan'] ?>
                                        <i class="fa fa-arrow-right"></i>
                                    
                                </h2>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="d-flex">
                                <p><?= substr($data['jawaban'], 0, 100) . '...'; ?></p> 
                            </div>
                        </div>
                    </div>
                    </a>
                <?php } ?>
            </div>
        </div>
    </div>
    <script src="<?= base_url('js/bootstrap.bundle.min.js') ?>"></script>  
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="https://cdn.datatables.net/v/dt/jq-3.7.0/dt-1.13.6/datatables.min.js"></script>
    <script>
      new DataTable('#myTable', {
        info: true,
        ordering: true,
        paging: true
      });
    </script>  
</body>
</html>
