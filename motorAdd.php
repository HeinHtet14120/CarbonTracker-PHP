<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <form action="" enctype="multipart/form-data" method="POST">
    <div class="container-sm" style="margin-top: 10%;">
        <div class="mb-3 col-md-6">
        <label for="exampleFormControlInput1" class="form-label">Engine Power</label>
            <input type="text" name="engine" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        </div>
        <div class="mb-3 col-md-6">
        <label for="exampleFormControlInput1" class="form-label">Carbon Amount</label>
            <input type="text" name="carbon" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        </div>
        <input type="submit" name="submit" value="SUBMIT" class="btn btn-light">
    </div>
    </form>
    <?php
    include 'connection.php';

    if (isset($_POST['submit'])) {
        $engine = $_POST['engine'];
        $carbon = $_POST['carbon'];

        try {
            $sql = "INSERT INTO motorcycle(type, carbon) VALUES($engine, $carbon)";
            $sq = $db->prepare(($sql));
            $sq->execute();
            echo "Data Inserted";
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>