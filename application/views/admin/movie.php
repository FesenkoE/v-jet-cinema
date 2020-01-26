<nav class="navbar navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="/public/images/posters/movie-logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
            <?= $title ?>
        </a>
    </div>
</nav>
<div class="container mt-5">
    <h3 class="text-center">Movies List</h3>
</div>

<div class="container mt-3">
    <div class="add-movie text-right">
        <a href="/admin/movie/create" class="btn btn-success">Add movie</a>
        <a href="/admin" class="btn btn-info">Back to admin panel</a>
    </div>
    <table class="table mt-2">
        <thead class="thead-light">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Description</th>
            <th scope="col">Poster</th>
            <th scope="col">Action Column</th>

        </tr>
        </thead>
        <tbody>
        <?php foreach ($movies as $movie) : ?>
            <tr>
                <th scope="row"><?= $movie['id'] ?></th>
                <td><?= $movie['name'] ?></td>
                <td><?= $movie['description'] ?></td>
                <td><img src="/public/images/posters/<?= $movie['id'] ?>.jpg" alt="" style="width: 50px; height: auto"></td>
                <td class="text-right">
                    <a href="<?= "/admin/movie/update/" . $movie['id'] ?>"  class="btn btn-primary">Edit</a>
                    <a href="<?= "/admin/movie/delete/" . $movie['id'] ?>" class="btn btn-danger">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>
