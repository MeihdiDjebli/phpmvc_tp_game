<?php
/**
 * @var array $houses ['stark' => [...], ...]
 */
include_once "data.php";

if (!isset($_GET['id']) || !isset($houses[$_GET['id']])) {
    // Redirect to index.php. You MUST redirect before HTML or PHP echo/print_r
    header('Location:/');
}

$houseId = $_GET['id'];
$currentHouse = $houses[$houseId];
?>

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

    <div class="d-flex justify-content-start">
        <a class="btn btn-danger" href="/">
            <i class="bi bi-backspace"></i> Annuler
        </a>
    </div>

    <div class="mt-5 d-felx justify-content-center">
        <h6>Welcome to <?=$currentHouse['name']?>, choose a member (lord or lady)</h6>
    </div>

    <div class="mt-5 d-flex flex-column">
        <div class="align-self-center text-justify col-12 col-md-6">
            <details>
                <summary><?=$currentHouse['name']?> description</summary>
                <?=$currentHouse['description']?>
            </details>
        </div>
    </div>

    <div class="mt-5 d-flex justify-content-around">
        <?php
        foreach ($currentHouse['members'] as $name => $member) {
            $role = $member['role'];
            $memberId = $member['id'];
            $memberImg = "img/$memberId.jfif";
            ?>
            <div class="card" style="width: 18rem;">
                <img height="246" class="card-img-top" src="<?=$memberImg?>" alt="<?=$name?> profile">
                <div class="card-body">
                    <h5 class="card-title"><?=$name?></h5>
                </div>
                <div class="card-body">
                    <?php if ($role === 'Lady' || $role === 'Lord') { ?>
                        <a href="member.php?memberName=<?=$name?>&houseId=<?=$houseId?>" class="btn btn-primary btn-sm">Choose <?=$role?></a>
                    <?php } ?>
                    <a href="member.php?memberName=<?=$name?>&houseId=<?=$houseId?>" class="btn btn-secondary btn-sm">More infos</a>
                </div>
            </div>
        <?php } ?>
    </div>

</div>
</body>

</html>