<nav class="navbar navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="/public/images/posters/movie-logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
            Admin Panel
        </a>
    </div>
</nav>
<div class="container mt-5">
    <h3 class="text-center"><?= $title ?> Movie</h3>
</div>
<div class="container">
    <form action="/admin/movie/update/<?= $model['id'] ?>" method="post"  enctype="multipart/form-data">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="name" id="name" aria-describedby="emailHelp" placeholder="Enter name"
                   value="<?= $model['name'] ?>">
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" id="description" name="description"><?= $model['description'] ?></textarea>
        </div>
        <div class="form-group">
            <label for="poster">Upload poster</label>
            <input type="file" class="form-control-file" id="poster" name="poster">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="/admin/movie" class="btn btn-info">Back to list</a>
    </form>
</div>

