<nav class="navbar navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="/public/images/posters/movie-logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
            Movie <?= $title ?>
        </a>
    </div>
</nav>
<div class="container mt-5">
    <h3 class="text-center">Movie <?= $title ?></h3>
</div>
<div class="container mt-3">
    <div class="add-movie text-right">
        <a href="/admin/session/create" class="btn btn-success">Add movie session</a>
        <a href="/admin" class="btn btn-info">Back to admin panel</a>
    </div>
    <table class="table mt-2">
        <thead class="thead-light">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Movie</th>
            <th scope="col">Movie date</th>
            <th scope="col">Movie time</th>
            <th scope="col">Tickets sale</th>
            <th scope="col">Tickets sold</th>
            <th scope="col">Action Column</th>

        </tr>
        </thead>
        <tbody>
        <?php foreach ($movieSessions as $movieSession) : ?>
            <tr>
                <th scope="row"><?= $movieSession['id'] ?></th>
                <td><?= $movieSession['name'] ?></td>
                <td><?= $movieSession['movie_date'] ?></td>
                <td><?= $movieSession['movie_time'] ?></td>
                <td><?= $movieSession['tickets_sale'] ?></td>
                <td><?= $movieSession['tickets_sold'] ?></td>
                <td class="text-right">
                    <a href="<?= "/admin/movie/update/" . $movieSession['id'] ?>"  class="btn btn-primary">Edit</a>
                    <a href="<?= "/admin/movie/delete/" . $movieSession['id'] ?>" class="btn btn-danger">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>
