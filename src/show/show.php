<?php
$type = "show";
$id = $_GET['id'];
if(!isset($id) || empty($id)){
    header("Location:index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once __DIR__ . "/../includes/head.php"; ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show</title>
</head>
<?php include_once __DIR__."/../includes/header.php"; ?>
<body onload="displayShow(<?php echo $id; ?>)">
    <main>
        <button type="button" class="btn btn-success m-2" onclick="window.location.href=`/src/show/updateShow.php?id=${<?php echo $id?>}`;">Update</button>
        <div class="py-3 text-center container">
            <div class="row">
                <div class="col-lg-6 col-md-8 mx-auto">
                    <h1 class="fw-light" id="show-name"></h1>
                    <img class="poster" id="show-image">
                    <hr>
                </div>
            </div>
            <p id="show-description"></p>
        </div>
        <div class="d-flex justify-content-center py-3">
            <ul class="nav nav-pills">
                <li class="nav-item d-flex border-end px-4"><p>Release date : </p><p class="mx-1" id="show-release-date"></p></li>
                <li class="nav-item d-flex border-end border-start px-4"><p>Producer : </p><p class="mx-1" id="show-producer"></p></li>
                <li class="nav-item d-flex border-start px-4"><p>Director : </p><p class="mx-1" id="show-director"></p></li>
            </ul>
        </div>
        
        <div class="d-flex">
            <div class="text-center list-group w-25 m-4">
                <p class="">Summary</p>
                <a href="#bot" class="list-group-item list-group-item-action">Bot</a>
                <a href="#actor" class="list-group-item list-group-item-action">Actor</a>
                <a href="#artefact" class="list-group-item list-group-item-action">Artefact</a>
                <a href="#anecdote" class="list-group-item list-group-item-action">Anecdote</a>
            </div>
            <div class="text-center flex-fill m-4">
                <p>Informations</p>
            </div>    
        </div>

        <div class="text-center container my-4" id="bot">
            <h2>Bot</h2>
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Screen time</th>
                        <th>Voice Actor</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    <tr>
                        <td>
                            <div>
                                <div class="my-2">
                                    <a class="link-offset-2 link-underline link-underline-opacity-0 link-dark" href="/../src/bot/bot.php?id=1">Optimus Prime</a>
                                </div>
                                <div>
                                    <img type="button" onclick="window.location.href='/../src/bot/bot.php?id=1'" class="table-bot-poster" src="/../../images/bot/20231001204906.jpg">
                                    <img type="button" onclick="window.location.href='/../src/alt/alt.php?id=1'" class="table-alt-poster" src="/../../images/alt/20231001210735.jpg">
                                </div>
                            </div>
                        </td>
                        <td style="vertical-align: baseline;">xx:xx:xx</td>
                        <td>
                            <div class="my-2">
                                <a class="link-offset-2 link-underline link-underline-opacity-0 link-dark" href="/../src/voiceactor/voiceactor.php?id=1">Petter Cullen</a>
                            </div>
                            <div>
                                <img type="button" onclick="window.location.href='/../src/voiceactor/voiceactor.php?id=1'" class="table-bot-poster" src="/../../images/bot/20231001204906.jpg">
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="text-center my-4" id="actor">
            <h2>Actor</h2>
        </div>
        <div class="text-center my-4" id="artefact">
            <h2>Artefact</h2>
        </div>
        <div class="text-center my-4" id="anecdote">
            <h2>Anecdote</h2>
        </div>
    </main>
</body>
</html>