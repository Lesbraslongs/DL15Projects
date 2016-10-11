<?php

abstract class MySQLConnection{
  const PREFIX = "mysql:";
  const HOST = "127.0.0.1";
  const PORT = "3306";
  const DB = "tppdo";
  const LOGIN = "root";
  const PWD = "";

  public static function getPdo(){
    // mysql:host=127.0.0.1;port=3306;dbname=tppdo
    $dsn = self::PREFIX . "host=" . self::HOST  . ";port="  . self::PORT . ";dbname=" . self::DB;
    $pdo = new PDO($dsn, self::LOGIN, self::PWD);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    return $pdo;
  }

}
