<?php

include 'connection.php';
$cname = $_GET['cname'];

$sql_m = $db->prepare("SELECT * FROM carbrand WHERE cname='$cname'");
$sql_m->execute();
$outputs = $sql_m->fetchAll(PDO::FETCH_OBJ);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Car Type Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <div class="container-sm" style="margin-top: 10%;">
        <form action="" enctype="multipart/form-data" method="POST">
            <?php foreach ($outputs as $output) { ?>

                <div class="mb-3 col-md-6">

                    <span class="input-group-text" id="inputGroup-sizing-default">
                        <?= $output->cname; ?>
                    </span>
                </div>

                <div class="mb-3 col-md-6">
                    <label for="exampleFormControlInput1" class="form-label">Car ID</label>
                    <input type="text" name="carid" class="form-control" value="<?= $output->id; ?>"
                        aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" disabled>
                </div>

                <div class="mb-3 col-md-6">
                <label for="exampleFormControlInput1" class="form-label">Car Name</label>

                    <input type="text" name="name" class="form-control" aria-label="Sizing example input"
                        aria-describedby="inputGroup-sizing-default">
                </div>

                <div class="mb-3 col-md-6">
                    
                    <label class="form-label">Car Type</label>
                    <select class="form-select" id="inputGroupSelect01" name="cartype">
                        <option selected>Choose...</option>
                        <option value="Sedan">Sedan</option>
                        <option value="Hatchback">Hatchback</option>
                        <option value="SUV">SUV</option>
                        <option value="Crossover">Crossover</option>
                        <option value="Convertible">Convertible</option>
                        <option value="Coupe">Coupe</option>
                        <option value="Sport">Sport</option>
                        <option value="Truck">Truck</option>
                    </select>
                </div>

                <div class="mb-3 col-md-6">
                <label class="form-label">Carbon Amount</label>
                    <input type="text" name="carbon" class="form-control" aria-label="Sizing example input"
                        aria-describedby="inputGroup-sizing-default">
                </div>

            <?php } ?>
            <input type="submit" name="submit" value="SUBMIT" class="btn btn-light">
        </form>
    </div>
    <?php
    include 'connection.php';

    if (isset($_POST['submit'])) {
        $carid = $_POST['carid'];
        $cartype = $_POST['cartype'];
        $carbon = $_POST['carbon'];
        $carname = $_POST['name'];

        $req = $db->prepare("SELECT * from cartype where carname='$carname'");
        $req->execute();
        $getdata = array();
        while ($row = $req->fetch(PDO::FETCH_ASSOC)) {
            extract($row);
            array_push($getdata, $type);
        }
        if (in_array($cartype, $getdata)) {
            ?>
            <a href="carAdd.php?cartype=<?= $cartype; ?>">Add Car Data</a>
            <?php
        } else {
            try {
                $sql = "INSERT INTO cartype(type, cid, carbonamount,carname) VALUES('$cartype', '$carid', '$carbon','$carname')";
                $sq = $db->prepare(($sql));
                $sq->execute();
                echo "Data Inserted"; ?>
                <a href="carAdd.php?cartype=<?= $cartype; ?>">Add Car Data</a>
                <?php
            } catch (Exception $e) {
                echo $e->getMessage();
            }
        }
    }
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
</body>

</html>