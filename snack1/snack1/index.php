<?php 
$matches = [
    [
        "hometeam" =>"cagliari",
        "hostteam" => "roma",
        "hometeam_score" => "16",
        "hostteam_score" => "12",
    ],
    [
        "hometeam" =>"milano",
        "hostteam" => "napoli",
        "hometeam_score" => "20",
        "hostteam_score" => "14",
    ],
    [
        "hometeam" =>"bologna",
        "hostteam" => "trieste",
        "hometeam_score" => "25",
        "hostteam_score" => "22",
    ],
    [
        "hometeam" =>"cagliari",
        "hostteam" => "roma",
        "hometeam_score" => "19",
        "hostteam_score" => "14",
    ],
]
 ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>snack1</title>
</head>
<body>

    <?php 
    for ($i = 0; $i < count($matches); $i++) {
    $match = $matches[$i]; 
    ?>   
       <p> <?php  echo $match["hometeam"] ?> - <?php  echo $match["hostteam"]?> | <?php echo $match["hometeam_score"]?>-<?php echo $match["hostteam_score"]?></p>
        
    <?php } ?>

</body>

</html>
