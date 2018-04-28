<?php

namespace SeriousGame\Model;

class Bdd
{
    protected function connect()
    {
		$pdo = new \PDO("mysql:host=35.204.244.229;dbname=seriousgame;charset=utf8;", "hackathon", "Hackathon2018") or die("erreur de connexion");
		return $pdo;
    }
}