<?php

namespace SeriousGame\Model;

require_once("Bdd.php");

class Security extends Bdd
{
    private $pdo;

    public function __construct()
    {
        $this->pdo = $this->connect();
    }
    public function login()
    {
        $req = $this->pdo->query('SELECT username, password FROM user');
        $userInfos = $req->fetchAll();
        $mdp_hash = hash('sha256', $_POST['password']);
            foreach($userInfos as $u){
                if($u['username'] == $_POST['username'] && $u['password'] == $mdp_hash)
                {
                    $_SESSION['result'] = true;
                    $_SESSION['username'] = $u['username'];
                    return true;
                } else {
                    return false;
                }
        }
    }
    public function register()
    {
        $mdp = hash('sha256', $_POST['password']);
        
        $post = $this->pdo->prepare('INSERT INTO user (username, password, email) VALUES (:username, :password, :email)');
        
        $post->bindParam(':username', $_POST['username']);
        $post->bindParam(':password', $mdp);
        $post->bindParam(':email', $_POST['email']);

        $post->execute();

        return true;
    }
    public function disconnect()
    {
        session_destroy();
    }
}