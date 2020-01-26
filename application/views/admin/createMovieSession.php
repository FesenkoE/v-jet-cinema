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
    <form action="/admin/session/create" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="movie-id">Movie</label>
            <select class="form-control" id="movie-id" name="movie_id">
                <option selected>Choose movie...</option>
                <?php foreach ($allMovies as $movie) : ?>
                <option value="<?= $movie['id'] ?>"><?= $movie['name']  ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="form-group">
            <label for="movie-date">Movie date</label>
            <input type="date" class="form-control" id="movie-date" name="movie_date">
        </div>
        <div class="form-group">
            <label for="movie-time">Movie time</label>
            <select class="form-control" id="movie-time" name="movie_time">
                <option selected>Choose time...</option>
                <?php foreach ($movieTime as $time) : ?>
                    <option><?= $time ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <input type="submit" class="btn btn-primary" value="Add Movie Session">
        <a href="/admin/movie" class="btn btn-info">Back to list</a>
    </form>
</div>
