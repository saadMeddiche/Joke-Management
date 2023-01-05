<?php
if (isset($_POST["Add"])) {
    $newJoke =  new JokesController;
    $newJoke->addJoke();
}


// print_r($employes);

?>

<div class="container">
    <div class="row my-4">
        <div class="col-md-8 mx-auto">
            <div class="card">
                <div class="card-header">Ajouter un employer</div>

                <div class="card-body bg-light">
                    <a href="home" class="btn btn-sm btn-primary mr-2 mb-2">
                        <i class="fas fa-home">

                        </i>
                    </a>
                    <form method="post" action="">
                        <div class="form-group p-2">
                            <label for="joke">joke</label>
                            <input type="text" name="joke" class="form-control" placeholder="joke ...">
                        </div>
                        <div class="form-group">
                            <button type="submit" name="Add" class="btn btn-primary">Add</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>