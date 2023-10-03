<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Car Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <style>
        .addtype {
            width: 40px;
            height: 20px;
            text-decoration: none;
            border: 1px solid grey;
        }
    </style>
</head>

<body>
    <form enctype="multipart/form-data" method="POST">
        <div class="container-sm" style="margin-top: 10%;">
            <div class="mb-3 col-md-6">
                <label for="exampleFormControlInput1" class="form-label">Car Brand</label>
                <input type="text" name="car" class="form-control" aria-label="Sizing example input"
                    aria-describedby="inputGroup-sizing-default">
            </div>
            <input type="submit" name="submit" value="SUBMIT" class="btn btn-light">
        </div>
    </form>
    <?php
    include 'connection.php';

    if (isset($_POST['submit'])) {
        $car = $_POST['car'];

        $req = $db->prepare("SELECT * from carbrand where cname='$car'");
        $req->execute();
        $getdata = array();
        while ($row = $req->fetch(PDO::FETCH_ASSOC)) {
            extract($row);
            array_push($getdata, $cname);
        }

        if (in_array($car, $getdata)) {
            ?>
            <a href="cartypeAdd.php?cname=<?= $car; ?>" class="btn btn-light" style="
    margin-left: 41%;
    margin-top: -5%;
">Add Car Type</a>
            <?php
        } else {
            try {
                $sql = "INSERT INTO carbrand(cname) VALUES('$car')";
                $sq = $db->prepare(($sql));
                $sq->execute();
                echo "Data Inserted";
                ?>

                <a href="cartypeAdd.php?cname=<?= $car; ?>" class="btn btn-light" style="
    margin-left: 41%;
    margin-top: -5%;
">Add Car Type</a>

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