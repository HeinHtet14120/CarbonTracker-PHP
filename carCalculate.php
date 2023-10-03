<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Macondo&display=swap" rel="stylesheet">
    <style>
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 40px;
            width: 100%;

        }

        .img {
            position: absolute;
            width: 100%;
            height: 100vh;
            z-index: -1;
            left: 0;
            top: 0;
        }

        .button {
            width: 10%;
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


        .output {
            width: 182px;
            height: 182px;
            padding: 20px;
            z-index: 1;
            text-align: center;
            position: absolute;
            background-color: #fff;
            right: 100px;
            top: 30px;
            border-radius: 10px;
            box-shadow: rgba(50, 50, 93, 0.25) 0px 2px 5px -1px, rgba(0, 0, 0, 0.3) 0px 1px 3px -1px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row" style="width: 100%; padding-left:15%;">
            <form action="" method="POST">
                <div class="row">
                    <div class="col-md-6">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-default">Date</span>
                            <input type="text" name="date" placeholder="dd/mm/yy" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"  required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-default">Daily Driven Kilometer</span>
                            <input type="text" name="kilo" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required>
                        </div>
                    </div>
                </div>
                <h3>Choose your car</h3>
                <section class="course-section">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="input-group mb-3">
                                <label class="input-group-text" for="inputGroupSelect01">Brand</label>
                                <select class="form-select" id="brand" type="text" name="carbrand" required>
                                    <option value="">Choose...</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="input-group mb-3">
                                <label class="input-group-text" for="inputGroupSelect01">Name</label>
                                <select class="form-select" id="type" type="text" name="cartype" required>
                                    <option value="">Choose...</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <button name="submit" class="button">
                        <i class="fa-solid fa-leaf"></i>
                    </button>
                    <a href="main.php" class="button" style="padding: 8px 42px;margin-left: 28%;">
                        <i class="fa-solid fa-house-chimney"></i>
                    </a>
                </section>
            </form>



        </div>
    </div>
    <img src="./Images/carbon-neutral-and-esg-concepts-carbon-emission-clean-energy-globe-balancing-between-a-green.jpg_s1024x1024wisk20cUZjMAOHpGtWFVw7D3JgEpa2RWgw4gL0OQFSV2AkPD1c.jpg" alt="" srcset="" class="img">

    <?php
    include 'connection.php';
    if (isset($_POST['submit'])) {
        $uname = $_SESSION['uname'];
        $carname = $_POST['carbrand'];
        $miles = $_POST['kilo'];
        $cartype = $_POST['cartype'];
        $date = $_POST['date'];

        try {
            $sql_details = $db->prepare("SELECT * FROM cartype WHERE id ='$cartype'");
            $sql_details->execute();
            $row = $sql_details->fetch(PDO::FETCH_ASSOC);
            extract($row);
            $result = $miles * $carbonamount;
    ?>
            <div class="output">
                <p class="res" style="font-family: 'Macondo', cursive; font-size: 50px;"><?php echo $result; ?><span style="font-size: 20px;">g</span></p>
                <p style="padding-bottom: 10px; color:darkgray;">Rate : <?php echo $carbonamount ?> g/km</p>
            </div>
            <?php

            try {
                $sql = "INSERT INTO cuserdata(uname, carbrandID, cartypeid, kilos, date, carbonamount) VALUES('$uname', '$cid', '$cartype', '$miles', '$date', '$result')";
                $sq = $db->prepare(($sql));
                $sq->execute();
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


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            function loadData(type, brand_id) {
                $.ajax({
                    url: "load-cs.php",
                    type: "POST",
                    data: {
                        type: type,
                        id: brand_id
                    },
                    success: function(data) {
                        if (type == "typeData") {
                            $("#type").html(data);
                        } else {
                            $("#brand").append(data);
                        }
                    }
                });
            }

            loadData();

            $("#brand").on("change", function() {
                var brand = $("#brand").val();

                loadData("typeData", brand);
            })
        });
    </script>
</body>

</html>