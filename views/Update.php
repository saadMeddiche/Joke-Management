<?php

if (isset($_POST["id"])) {
    $exitJoke = new JokesController();
    $joke = $exitJoke->getOneJoke();
}

if (isset($_POST["update"])) {
    $exitJoke = new JokesController();
    $exitJoke->updateJoke();
    Redirect::to('home');
}

?>
<div class="container">
    <div class="row my-4">
        <div class="col-md-8 mx-auto">
            <div class="card">
                <div class="card-header">Modifier The Joke</div>

                <div class="card-body bg-light">
                    <a href="home" class="btn btn-sm btn-primary mr-2 mb-2">
                        <i class="fas fa-home">

                        </i>
                    </a>
                    <form method="post" action="">
                        <input type="hidden" name="id" value="<?php echo $joke[2] ?>">
                        <div class="form-group p-2">
                            <label for="joke">Joke</label>
                            <input type="text" name="joke" class="form-control" value="<?php echo $joke[0]; ?>">
                        </div>
                        <div class="form-group">
                            <button type="submit" name="update" class="btn btn-primary">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>