<?php
class JokesController
{

    public function getAllJokes()
    {

        $jokes = Jokes::getAll();
        return $jokes;
    }

    public function getOneJoke()
    {
        if (isset($_POST["id"])) {
            $data = array(
                'id' => $_POST["id"]
            );

            $joke = Jokes::getJoke($data);

            return $joke;
        }
    }

    public function addJoke()
    {
        if (isset($_POST["Add"])) {
            $data = array(
                'joke' => $_POST["joke"]
            );
        }
        Jokes::add($data);
        Session::set('success', 'Joke Ajouter');
        Redirect::to('home');


    }
    public function updateJoke()
    {
        if (isset($_POST["update"])) {
            $data = array(
                'id' => $_POST["id"],
                'joke' => $_POST["joke"]
            );

            Jokes::update($data);
            Session::set('success', 'Joke Modifier');
            Redirect::to('home');


        }
    }

    public function deleteJoke()
    {
        if (isset($_POST["idDelete"])) {
            $data = array(
                'id' => $_POST["idDelete"]
            );
            Jokes::delete($data);
            Session::set('success', 'Joke Suprimer');
            Redirect::to('home');

        }
    }

    public function searchJoke()
    {
        if (isset($_POST["LookFor"])) {
            $data = array(
                'LookFor' => $_POST["LookFor"]
            );
        }

        $jokes = Jokes::search($data);

        return $jokes;
    }
}
