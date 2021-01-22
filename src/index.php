<!doctype html>

<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Game of Thrones</title>
    <link href="images/favicon.ico" rel="icon" type="image/x-icon" />
    <link href="style/bootstrap.min.css" rel="stylesheet">
    <link href="style/bootstrap-icons.css" rel="stylesheet">
</head>

<body>

<?php
include_once "data.php";
?>
<div class="container-fluid">
    <div class="d-none d-lg-flex justify-content-center">
        <h1 class="display-4">
            <span><i class="bi bi-suit-spade-fill"></i> Game of Thrones <i class="bi bi-suit-heart-fill"></i></span>
        </h1>
    </div>
    <div class="d-lg-none d-flex justify-content-center">
        <h1>
            <span><i class="bi bi-suit-spade-fill"></i> Game of Thrones <i class="bi bi-suit-heart-fill"></i></span>
        </h1>
    </div>
    <div class="d-flex justify-content-center">
        <h4>The battle</h4>
    </div>

    <div class="mt-5 d-flex justify-content-center">
        <h6>Welcome to Westeros, choose one house</h6>
    </div>
    <div class="mt-5 d-flex flex-grow-0 flex-shrink-1 justify-content-around">
        <?php
        /**
         * @var array $houses ['stark' => [...], ...]
         */
        include_once "data.php";
        foreach ($houses as $houseId => $house) {
            $houseName = $house['name'];
            $houseImg = "img/$houseId.jfif";

            ?>
            <div class="card" style="width: 18rem;">
                <img height="246" class="card-img-top" src="<?=$houseImg?>" alt="<?=$houseName?> banner">
                <div class="card-body">
                    <h5 class="card-title"><?=$houseName?></h5>
                </div>
                <div class="card-body">
                    <a href="house.php?id=<?=$houseId?>" class="btn btn-primary btn-sm">Choose <?=ucfirst($houseId)?></a>
                    <a href="houseDetail.php?id=<?=$houseId?>" class="btn btn-secondary btn-sm">More infos</a>
                </div>
            </div>
        <? } ?>
    </div>
</div>
</body>

</html>