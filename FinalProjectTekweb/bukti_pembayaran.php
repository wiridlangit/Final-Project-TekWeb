<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Bukti Pembayaran</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link href="buktibayar.css" type="text/css" rel="stylesheet" />
</head>

<body>
    <div class="container_all">
        <div class="container_content">
            <div class="content-text">
                <h2>Mohon upload bukti pembayaran pada nomor rekening XXXXXXX</h2>
                <?php if (isset($_GET['error'])): ?>
                    <p><?php echo $_GET['error']; ?></p>
                <?php endif ?>
            </div>
            <div class="row">
                <form method="POST" action="uploadbukti.php" enctype="multipart/form-data">
                    <label for="formFile" class="form-label"></label>
                    <div>
                        <input class="form-control" type="file" id="formFile" name="img">
                    </div>
                    <div>
                        <input class="btn btn-primary mt-3" type="submit" name="submit" value="Upload">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>