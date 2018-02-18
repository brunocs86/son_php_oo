<?php
/**
 * Created by PhpStorm.
 * User: bcs
 * Date: 17/02/2018
 * Time: 10:07
 */

namespace Source;

class Product
{
    private $db;

    public function __construct(IConn $db)
    {
        $this->db = $db->connect();
    }

    public function list()
    {
        $query = "SELECT * FROM produtos";

        $stmt = $this->db->prepare($query);

        $stmt->execute();

        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

}