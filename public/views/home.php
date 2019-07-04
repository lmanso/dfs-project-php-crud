<?php require_once 'public/layouts/header.php';

$articles = getAllArticles();
$categories = getAllCategories();

?>

<div class="container">
    <div class="row">
        <div class="col-9 overflow" >
            <h1 class="">Liste des articles :</h1>
            <?php foreach ($articles as $key => $value) : ?>
                <div class=""style="max-height: 90vh; max-width: 45vh" >
                    <div class="card-content align-center shadow-2dp card text-white bg-dark mb-3">
                        <div class="center-text card-header"> <?= $value["title"] ?> </div>
                        <div class="card-body">
                            <img class="img-home" src="<?= $value['img'] ?>?random=<?= $key ?>" alt="Card image <?= ++$key ?>">
                            <h4 class="card-title"></h4>
                            <p class="card-text"> <?= substr($value["content"], 0, 140) ?></p>
                        </div>
                        <div class="card-footer text-muted ">
                            <h5 class="mb-2 text-white"><?= $value["category"] ?> </h5>
                            <h6 class="mb-2 text-white"> <?= $value["date"] ?> - <?= $value["author"] ?></h6>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
        </div>

        <div class="col-3" >
            <h2 class="my-4">Catégories articles</h2>
            <?php foreach ($categories as $key => $value) : ?>
                <div class="list-group" style="max-height: 90vh; max-width: 55vh">
                    <a href="#" class="center-text list-group-item disabled shadow-2dp"> <?= $value["name"] ?> </a>
                </div>
            <?php endforeach ?>
        </div>
    </div>
    <!-- <div class="col-lg-9">
            <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <img class="d-block img-fluid" src="public/img/slide-1.jpg" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block img-fluid" src="public/img/slide-2.jpg" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block img-fluid" src="public/img/slide-3.jpg" alt="Third slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div> -->

</div>

<?php require_once 'public/layouts/footer.php'; ?>