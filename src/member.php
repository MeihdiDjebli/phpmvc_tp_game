<?php
/**
 * @var array $houses ['stark' => [...], ...]
 */
include_once "data.php";

if (!isset($_GET['memberName'], $_GET['houseId'])) {
    // Redirect to index.php. You MUST redirect before HTML or PHP echo/print_r
    header('Location:/');
}

if (!isset($houses[$_GET['houseId']], $houses[$_GET['houseId']]['members'][$_GET['memberName']])) {
    // Redirect to index.php. You MUST redirect before HTML or PHP echo/print_r
    header('Location:/');
}

$houseId = $_GET['houseId'];
$currentHouse = $houses[$houseId];
$currentMember = $currentHouse['members'][$_GET['memberName']];

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
        <a class="btn btn-danger" href="/house.php?id=<?=$houseId?>">
            <i class="bi bi-backspace"></i> Annuler
        </a>
    </div>

    <div class="mt-5 d-flex justify-content-center">
        <h3 class="text-success">Congratulation, you choose <?=$currentMember['name']?> !</h6>
    </div>

    <div class="mt-5 d-flex flex-column">
        <div class="align-self-center text-justify col-12 col-md-6">
            <details>
                <summary><?=$currentHouse['name']?> description</summary>
                <?=$currentHouse['description']?>
            </details>
        </div>
    </div>

    <div class="mt-5 d-flex flex-column">
        <div class="align-self-center text-justify col-12 col-md-6">
            <details>
                <summary><?=$currentMember['name']?> details</summary>
                <table class="table">
                    <tr>
                        <td>Nickname</td><td><?=$currentMember['nickname']?></td>
                    </tr>
                    <tr>
                        <td>Role</td><td><?=$currentMember['role']?></td>
                    </tr>
                </table>
            </details>
        </div>
    </div>

</div>
</body>

</html>