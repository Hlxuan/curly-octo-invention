<?php

class Database
{
    public $conn;

    /**
     * Database 类构造器
     * @param array $config
     */
    public function __construct($config)
    {
        $dsn = "mysql:host={$config['host']};dbname={$config['dbname']}";

        $options = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
        ];

        try {
            $this->conn = new PDO($dsn, $config['username'], $config['password'], $options);
        } catch (PDOException $e) {
            throw new Exception("数据库连接失败：{$e->getMessage()}");
        }
    }

    /**
     * 执行数据库请求
     * @param string $query
     * @return PDOStatement
     * @throws PDOException
     */
    public function query($query)
    {
        try {
            $sth = $this->conn->prepare($query);
            $sth->execute();
            return $sth;
        } catch (PDOException $e) {
            throw new Exception("数据库请求执行失败：{$e->getMessage()}");
        }
    }
}