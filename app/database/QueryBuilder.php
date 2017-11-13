<?php

// A class responsible for building database queries.
class QueryBuilder
{
    protected $db;

    public function __construct(PDO $db)
    {
        $this->db = $db;
    }

    public function selectAll(string $table, string $fetchClass=null)
    {
        $query = $this->db->prepare("select * from {$table};");
        $query->execute();
        
        if ($fetchClass) {
            return $query->fetchAll(PDO::FETCH_CLASS, $fetchClass);
        }

        return $query->fetchAll(PDO::FETCH_OBJ);
    }
}