<?php
if (isset($_POST["search"])) {
    $data = new JokesController;
    $jokes = $data->searchJoke();
} else {
    $data = new JokesController;

    if (isset($_POST["triage"])) {
        $jokes = array_reverse($data->getAllJokes());
    } else {
        $jokes = $data->getAllJokes();
    }
}

if (isset($_POST["idDelete"])) {
    $exitJoke = new JokesController;
    $exitJoke->deleteJoke();
}


?>
<div class="container">
    <div class="row my-4">
        <div class="col-md-10 mx-auto">
            <div class="card">
                <div class="card-body bg-light">
                    <a href="add" class="btn btn-sm btn-primary mr-2 mb-2">
                        <i class="fas fa-plus">
                        </i>
                    </a>
                    <a href="home" class="btn btn-sm btn-secondary mary mr-2 mb-2">
                        <i class="fas fa-home">
                        </i>
                    </a>
                    <form action="" method="post">
                        <button type="submit" name="triage" class="btn btn-sm btn-danger mary mr-2 mb-2">
                            <i class="fas fa-arrow-up"></i>
                        </button>
                        <button type="submit" class="btn btn-sm btn-success mary mr-2 mb-2">
                            <i class="fas fa-arrow-down"></i>
                        </button>
                    </form>
                    <a href="" class="btn btn-sm btn-info mary mr-2 mb-2">
                        <i class="fas fa-user mr-2 text-white">My name</i>
                    </a>
                    <form method="post" class="d-flex flex-row justify-content-end" action="">
                        <input type="text" name="LookFor" placeholder="Recherche">
                        <button class="btn btn-info btn-sm" name="search" type="submit"><i class="fas fa-search"></i></button>
                    </form>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">The Jokes</th>
                                <th scope="col">Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($jokes as $joke) : ?>
                                <tr>
                                    <th scope="row"><?php echo $joke->id ?></th>
                                    <td><?php echo $joke->joke ?></td>


                                    <td class="d-flex flex-row gap-2">
                                        <form action="update" method="post">
                                            <input type="hidden" name="id" value="<?php echo $joke->id ?>">
                                            <button class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></button>
                                        </form>
                                        <form method="post">
                                            <input type="hidden" name="idDelete" value="<?php echo $joke->id ?>">
                                            <button class="btn btn-sm btn-danger" onclick="return confirm('Are you sure!');"><i class="fa fa-trash"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</div>