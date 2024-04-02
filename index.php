<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tugas 5 - Form Nilai Ujian</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class="container">
    <h1 class="text-center ">Form Nilai Ujian</h1>
    <hr>
    <form class="mb-4 " action="" method="POST">
        <div class="form-group">
            <label for="nim">NIM</label>
            <input class="form-control " name="nim" type="text">
        </div>
        <div class="form-group mt-2 ">
            <label for="name">Nama</label>
            <input class="form-control " name="name" type="text">
        </div>
        <div class="form-group mt-2 ">
            <label for="university">Kuliah</label>
            <input class="form-control " name="university" type="text">
        </div>
        <div class="form-group mt-2 ">
            <label for="subject">Mata Kuliah</label>
            <select class="form-select" name="subject" aria-label="Default select example">
                <option selected>-- Pilih Mata Kuliah --</option>
                <option value="uiux">UI/UX</option>
                <option value="mobileprogramming">Mobile Programming</option>
                <option value="webproggraming">Web Programming</option>
                <option value="androidprogramming">Android Programming</option>
            </select>
        </div>
        <div class="form-group mt-2 ">
            <label for="nilai">Nilai</label>
            <input class="form-control " name="nilai" type="number">
        </div>
        <button class="btn btn-primary mt-3 " type="submit">Simpan</button>
    </form>

    <?php
    include_once './objmahasiswa.php';
    ?>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>

</html>