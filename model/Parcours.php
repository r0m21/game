<?php

namespace SeriousGame\Model;

require_once("Bdd.php");

class Parcours extends Bdd
{
    private $pdo;

    public function __construct()
    {
        $this->pdo = $this->connect();
    }
    public function getAllParcours()
    {
        $req = $this->pdo->query('SELECT * FROM parcours');
        $result = $req->fetchAll();

        return $result;
    }
    /*public function createParcours()
    {
        $req1 = $this->pdo->prepare('SELECT id, username, password FROM user WHERE username = :username');
        $req1->bindParam('username', $_SESSION['username']);
        $user = $req1->fetch();

        $req = $this->pdo->prepare("BEGIN;
        INSERT INTO quiz (question, solution)
          VALUES(:question, :solution);
        INSERT INTO reponse (libelle, idquiz) 
          VALUES(:libelle ,LAST_INSERT_ID());
        COMMIT;");
        $req->bindParam('question', $_POST['question']);
        $req->bindParam('solution', $_POST['solution']);
        $req->bindParam('libelle', $_POST['libelle']);
        $quizID = $req->lastInsertId();
        $req->execute();

        $req2 = $this->pdo->prepare("BEGIN;
        INSERT INTO theme (libelle)
          VALUES(:theme);
        INSERT INTO  (libelle, idquiz) 
          VALUES(:libelle ,LAST_INSERT_ID());
        COMMIT;");
    }*/
}