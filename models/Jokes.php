<?php
class Jokes
{
    static public function getAll()
    {
        $requete = "SELECT * FROM `jokes`";

        $stmt = Db::connect()->prepare($requete);

        $stmt->execute();

        $result = $stmt->fetchAll(PDO::FETCH_OBJ);

        $stmt = null;

        return $result;
    }

    static public function getJoke($data)
    {
        $requete = "SELECT * FROM `jokes` WHERE id =:id";

        $stmt = Db::connect()->prepare($requete);

        $stmt->bindParam(':id', $data['id']);

        $stmt->execute();

        $result = $stmt->fetch();

        $stmt = null;

        return $result;
    }

    static public function add($data)
    {
        $requete = "INSERT INTO `jokes`(`joke`) VALUES (:joke)";
        $stmt = Db::connect()->prepare($requete);

        $stmt->bindParam(':joke', $data['joke']);

        $stmt->execute();
    }

    static public function update($data)
    {
        $requete = "UPDATE `jokes` SET joke=:joke WHERE id=:id";
        $stmt = Db::connect()->prepare($requete);

        $stmt->bindParam(':joke', $data['joke']);
        $stmt->bindParam(':id', $data['id']);

        $stmt->execute();
    }

    static public function delete($data)
    {
        $requete = "DELETE FROM `jokes` WHERE id=:id";
        $stmt = Db::connect()->prepare($requete);

        $stmt->bindParam(':id', $data['id']);

        $stmt->execute();
    }

    static public function search($data)
    {
        $LookFor = $data["LookFor"];

        $requete = "SELECT * FROM `jokes` WHERE id LIKE ? OR joke LIKE ?";
        $stmt = DB::connect()->prepare($requete);

        $stmt->execute(["%" . $LookFor . "%", "%" . $LookFor . "%"]);


        $jokes = $stmt->fetchAll(PDO::FETCH_OBJ);

        return $jokes;
    }
}
