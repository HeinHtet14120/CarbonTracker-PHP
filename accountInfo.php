<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<?php
session_start();
include "connection.php";


$uname = $_SESSION['uname'];
$mtotal = null;
$ctotal = null;
?>
<div class="section-one col-12" style="display: inline-block;">
    <h1>Car</h1>



    <?php
    try {
        $sql_details = $db->prepare("SELECT * FROM cuserdata WHERE uname ='$uname'");
        $sql_details->execute();
        $row = $sql_details->fetchAll(PDO::FETCH_OBJ);
        ?>
        <table class="table table-striped">
            <thead class="thead-light">
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Kilometer</th>
                    <th scope="col">Date</th>
                    <th scope="col">Carbon</th>
                </tr>
            </thead>

            <?php
            foreach ($row as $output) {
                ?>

                <tr>
                    <td>
                        <?= $output->uname; ?>
                    </td>
                    <td>
                        <?= $output->kilos; ?>
                    </td>
                    <td>
                        <?= $output->date; ?>
                    </td>
                    <td>
                        <?= $ctotal = $output->carbonamount; ?>
                    </td>
                </tr>


                <?php
                $cartotal += $ctotal;
            }
    } catch (Exception $e) {
        echo $e->getMessage();
    }
    ?>

        <tr>
            <td colspan="3">Total</td>
            <td >
                <?php echo $cartotal; ?> <b>g</b>
            </td>
        </tr>
    </table>
</div>
<div class="section-two col-12" style="display: inline-block;">


    <h1>Motorcycle</h1>

    <?php

    try {
        $sql_details = $db->prepare("SELECT * FROM muserdata WHERE uname ='$uname'");
        $sql_details->execute();
        $row = $sql_details->fetchAll(PDO::FETCH_OBJ);
        ?>
        <table class="table table-striped">
            <thead class="thead-light">

                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Kilometer</th>
                    <th scope="col">Date</th>
                    <th scope="col">Carbon</th>
                </tr>
            </thead>
            <?php
            foreach ($row as $output) {
                ?>

                <tr>
                    <td>
                        <?= $output->uname; ?>
                    </td>
                    <td>
                        <?= $output->kilos; ?>
                    </td>
                    <td>
                        <?= $output->date; ?>
                    </td>
                    <td>
                        <?= $mtotal = $output->carbonamount; ?>
                    </td>
                </tr>


                <?php
                $motortotal += $mtotal;
            }
    } catch (Exception $e) {
        echo $e->getMessage();
    }
    ?>

        <tr>
            <td colspan="3">Total</td>
            <td >
                <?php echo $motortotal; ?> <b>g</b>
            </td>
        </tr>
    </table>
</div>