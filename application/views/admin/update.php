<nav class="navbar navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="/public/images/movie-logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
            Admin Panel
        </a>
    </div>
</nav>
<div class="container mt-5">
    <h3 class="text-center">Add Movie</h3>
</div>

<div class="container">
    <form action="admin/update" method="post">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Enter name">
        </div>
        <div class="form-group">
            <label for="show-time">Password</label>
            <select class="form-control" id="exampleFormControlSelect1">
                <?php foreach ($times as $time) : ?>
                    <option><?= $time ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="/admin" class="btn btn-info">Back to list</a>
    </form>
</div>

