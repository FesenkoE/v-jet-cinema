<nav class="navbar navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="/public/images/posters/movie-logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
            <?= $title ?>
        </a>
    </div>
</nav>
<div class="container mt-5">
    <h3 class="text-center"><?= $title ?></h3>
</div>
<div class="container mt-5">
    <div class="row">
        <div class="col-lg-6">
            <a href="/admin/movie/" class="btn btn-info btn-block"><h5>Go to Movie List</h5></a>
        </div>
        <div class="col-lg-6">
            <a href="/admin/session" class="btn btn-info btn-block"><h5>Go to Session List</h5></a>
        </div>
    </div>
</div>

