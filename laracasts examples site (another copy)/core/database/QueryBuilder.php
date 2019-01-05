<?php

class QueryBuilder 
{
    protected $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function selectAll($table, $intoClass)
    {
        $statement = $this->pdo->prepare("select * from $table");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_CLASS, $intoClass);
    }

    public function insert($table, $parameters)
    {
        // die(var_dump($parameters['name']));

        $sql = sprintf(

            'insert into %s (%s) values (%s)',
            $table,
            implode(', ', array_keys($parameters)),
            ':' . implode(', :', array_keys($parameters))

        );

        var_dump($sql);

        try{

            $statement = $this->pdo->prepare($sql);

            $statement->execute($parameters);

        }catch(Exception $e){
            
            die($e->getMessage());
            
        }
    }
}