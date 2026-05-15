<?php
session_start();

if(!(isset($_SESSION["nama"]))){
    header("Location: ../login.php?status=trespass");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <div class="row mx-2">
            <div class="col">
                <div class="mb-3">
                    <label>Isi Konten</label>
                    <textarea type="text" class="form-control"></textarea>
                    <div class="form-text">Ekspresikan dirimu!</div>
                </div>
            </div>
            <div class="col">
                <div class="mb-3">
                    <input type="submit" value="Posting" class="btn btn-info">
                </div>
            </div>
        </div>
        
        
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
    crossorigin="anonymous"></script>
</body>
</html>