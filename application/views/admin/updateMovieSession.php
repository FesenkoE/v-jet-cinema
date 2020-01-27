<nav class="navbar navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="/public/images/posters/movie-logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
            Admin Panel
        </a>
    </div>
</nav>
<div class="container mt-5">
    <h3 class="text-center"><?= $title ?></h3>
</div>

<div class="container">
    <form action="/admin/session/update/<?= $model['id'] ?>" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="movie-id">Movie</label>
            <select class="form-control" id="movie-id" name="movie_id">
                <option>Choose movie...</option>
                <?php foreach ($allMovies as $movie) : ?>
                <?php if ($model['movie_id'] == $movie['id']) : ?>
                    <option value="<?= $movie['id'] ?>" selected><?= $movie['name']  ?></option>
                <?php else : ?>
                    <option value="<?= $movie['id'] ?>"><?= $movie['name']  ?>></option>
                <?php endif ?>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="form-group">
            <label for="movie-date">Movie date</label>
            <input type="date" class="form-control" id="movie-date" name="movie_date" value="<?= $model['movie_date'] ?>">
        </div>
        <div class="form-group">
            <label for="movie-time">Movie time</label>
            <select class="form-control" id="movie-time" name="movie_time">
                <option>Choose time...</option>
                <?php foreach ($times as $time) : ?>
                <?php if ($time == $model['movie_time']) : ?>
                    <option selected><?= $time ?></option>
                <?php else : ?>
                    <option><?= $time ?></option>
                <?php endif; ?>
                <?php endforeach; ?>
            </select>
        </div>
        <input type="submit" class="btn btn-primary" value="Edit Movie Session">
        <a href="/admin/session" class="btn btn-info">Back to MovieSession list</a>
    </form>
</div>
