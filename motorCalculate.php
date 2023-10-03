<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Motorcycle</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Macondo&display=swap" rel="stylesheet">
    <style>
        .container {
            display: flex;
            justify-content: left;
            align-items: center;
            margin-top: 90px;
            width: 100%;

        }

        .img {
            position: absolute;
            width: 100%;
            height: 100%;
            z-index: -1;
            left: 0;
            top: 0;
        }

        .output {
            width: 182px;
            height: 182px;
            padding: 20px;
            z-index: 1;
            text-align: center;
            position: absolute;
            background-color: #fff;
            right: 130px;
            top: 120px;
            border-radius: 10px;
            box-shadow: rgba(0, 0, 0, 0.19) 0px 10px 20px, rgba(0, 0, 0, 0.23) 0px 6px 6px;
        }

        .button {
            width: 19.5%;
            height: 40px;
            justify-content: center;
            display: inline-block;
            color: #fff;
            background: #3dc2b9;
            font-size: 1em;
            font-weight: bold;
            margin-top: 20px;
            outline: none;
            border: none;
            border-radius: 5px;
            transition: .2s ease-in;
            cursor: pointer;
            box-shadow: rgba(0, 0, 0, 0.18) 0px 2px 4px;
        }

        .button:hover {
            background: #43d5cb;
        }
    </style>
</head>

<body>
    <div class="container">

        <form action="" enctype="multipart/form-data" method="POST">
            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">Daily Driven Kilometer</span>
                <input type="text" name="kilo" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required>
            </div>

            <div class="input-group mb-3">
                <select class="form-select form-select mb-3" aria-label=".form-select-lg example" name="power" style="width: 91%;margin-top: 16px;" required>
                    <option selected>Engine Power</option>
                    <option value="400">400cc</option>
                    <option value="600">600cc</option>
                    <option value="900">900cc</option>
                    <option value="1000">1000cc</option>
                </select>
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">Date</span>
                <input type="text" name="date" placeholder="dd/mm/yy" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            </div>


            <button name="submit" class="button">
                <i class="fa-solid fa-leaf"></i>
            </button>
            <a href="main.php" class="button" style="padding: 8px 28px;margin-left: 59%;">
                <i class="fa-solid fa-house-chimney"></i>
            </a>
        </form>

    </div>
    <img src="./Images/thumb-1920-705124.jpg" alt="" class="img">

    <?php
    include 'connection.php';

    if (isset($_POST['submit'])) {

        $uname = $_SESSION['uname'];
        $date = $_POST['date'];
        $miles = $_POST['kilo'];
        $engine = $_POST['power'];

        try {
            $sql_details = $db->prepare("SELECT * FROM motorcycle WHERE type ='$engine'");
            $sql_details->execute();
            $row = $sql_details->fetch(PDO::FETCH_ASSOC);
            extract($row);
            $result = $miles * $carbon;

    ?>
            <div class="output">
                <p class="res" style="font-family: 'Macondo', cursive; font-size: 50px; font-weight:bolder;"><?php echo $result; ?><span style="font-size: 20px;">g</span></p>
                <p style="padding-bottom: 10px; color:darkgray;">Rate : <?php echo $carbon ?> g/km</p>
            </div>
            <?php
            try {
                $sql = "INSERT INTO muserdata(uname, enginepower, kilos, date, carbonamount) VALUES('$uname', '$engine', '$miles', '$date', '$result')";
                $sq = $db->prepare(($sql));
                $sq->execute();
                echo "Data Inserted";
            } catch (Exception $e) {
                echo $e->getMessage();
            }
            ?>
    <?php

        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
    ?>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>