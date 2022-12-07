<?php
$array = [
    [
        "A1",
        "A2",
        "A3",
        "A4",
        "A5",
        "A6",
        "A7",
        "A8",
    ],
    [
        "B1",
        "B2",
        "B3",
        "B4",
        "B5",
        "B6",
    ],
    [
        "C1",
        "C2",
        "C3",
        "C4",
           "C5",
        "C6",
    ],
    [
        "D1",
        "D2",
        "D3",
        "D4",
        "D5",
        "D6",
    ],
    [
        "E1",
        "E2",
        "E3",
        "E4",
        "E5",
        "E6",
    ],
    [
        "F1",
        "F2",
        "F3",
        "F4",
        "F5",
        "F6",
    ],
];
    $inarray = ["E5", "F1"];
?>
<script>
function add() {
    <?php
    if (isset($key)) {
        array_push($inarray, $key);
    }
    ?>
}
</script>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">

    <title>Document</title>
</head>

<body>
    <div class="movie-container">

        <h3 align="center">Chức năng đặt vé</h3>


        <div class="container" align="center">
            <div class="screen"></div>
            <?php foreach ($array as $item => $value) { ?>
                <div class="row">
                    <?php foreach ($value as $item => $key) { ?>
                        <div class="seat <?php echo in_array($key, $inarray) ? 'occupied' : '';  ?>" onclick="add()"><?= $key ?></div>

                    <?php } ?>
                </div>
            <?php } ?>




            <form method="post">
                <button name="btn" class="namebutton">Next</button>
            </form>

        </div>
    </div>

    <script src="main.js"></script>
    
</body>

</html>