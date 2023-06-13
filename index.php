<?php
//    if(isset($_POST['submit'])){
//        $fizzValue = $_POST['fizzValue'];
//        $buzzValue = $_POST['buzzValue'];
//        $rangeValue = $_POST['rangeValue'];
//
//
//        for ($i=0; $i <=$rangeValue; $i++){
//            if ($i % $fizzValue == 0 && $i % $buzzValue == 0) {
//            echo "<li>FizzBuzz </li>";
//        } else if ($i % $fizzValue == 0) {
//                echo "<li>Fizz</li>";
//            } else if ($i % $buzzValue == 0) {
//                echo "<li>Buzz </li>";
//            } else {
//                echo "<li>$i</li>";
//            }
//        }
//    }

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FizzBuzz</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>

<div class="d-flex justify-content-center mt-5">
<form action="index.php" method="post">
    <div class="row text-center">
        <div class="col-3">
            <input type="number" class="form-control" placeholder="FizzValue" name="fizzValue" value="3">
        </div>
        <div class="col-3">
            <input type="number" class="form-control" placeholder="BuzzValue" name="buzzValue" value="5">
        </div>
        <div class="col-3">
            <input type="number" class="form-control" placeholder="RangeValue" name="rangeValue" value="50">
        </div>
        <div class="col-3">
            <button type="submit" class="btn btn-primary" name="submit">FizzBuzz</button>
        </div>

    </div>
</form>
</div>

<div class="d-flex justify-content-center mt-5">
<table class="table w-75 table-responsive">
    <tbody>

    <?php
    if(isset($_POST['submit'])){
        $fizzValue = $_POST['fizzValue'];
        $buzzValue = $_POST['buzzValue'];
        $rangeValue = $_POST['rangeValue'];


        for ($i=1; $i <=$rangeValue; $i++){
            if (($i - 1) % 5 === 0) {
                echo '<tr>';
            }

            echo '<td>';


            if ($i % $fizzValue == 0 && $i % $buzzValue == 0) {
                echo "FizzBuzz ";
            } else if ($i % $fizzValue == 0) {
                echo "Fizz";
            } else if ($i % $buzzValue == 0) {
                echo "Buzz ";
            } else {
                echo "$i";
            }



            echo '</td>';

            if ($i % 5 === 0 || $i === $rangeValue) {
                echo '</tr>';
            }

        }
    }

    ?>


</tbody>
</table>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>