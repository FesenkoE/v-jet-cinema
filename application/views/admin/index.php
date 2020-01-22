<nav class="navbar navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="/public/images/movie-logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
            <?= $title ?>
        </a>
    </div>
</nav>
<div class="container mt-5">
    <h3 class="text-center">Movies List</h3>
</div>

<div class="container mt-3">
    <div class="add-movie text-right">
        <a href="admin/create" class="btn btn-success">Add movie</a>
    </div>
    <table class="table mt-2">
        <thead class="thead-light">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Show Time</th>
            <th scope="col">Amount of Tickets</th>
            <th scope="col">Action Column</th>

        </tr>
        </thead>
        <tbody>
        <?php foreach ($movies as $movie) : ?>
            <tr>
                <th scope="row"><?= $movie['id'] ?></th>
                <td><?= $movie['name'] ?></td>
                <td><?= $movie['show_time'] ?></td>
                <td><?= $movie['tickets_count'] ?></td>
                <td class="text-right">
                    <a href="<?= "admin/update/" . $movie['id'] ?>"  class="btn btn-primary">Edit</a>
                    <a href="admin/delete" class="btn btn-danger">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>
