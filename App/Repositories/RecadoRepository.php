<?php 

namespace App\Repositories;

use App\Connection\ConnectionFactory;
use PDO;

class RecadoRepository {

    public $connection;

    public function __construct()
    {
        $factory = new ConnectionFactory();
        $this->connection = $factory->getConnection();
    }

    public function getAll(){
        $sql = "SELECT * FROM tb_recados";

        $table = $this->connection->query($sql); 
        $resultados = $table->fetchAll(PDO::FETCH_ASSOC);

        return $resultados;
    }

    public function getByDate(string $ini_date){

       $sql = "SELECT * FROM tb_recados t WHERE t.data >= ?";

        $table = $this->connection->prepare($sql); 

        $table->bindParam(1, $ini_date);
        $table->execute();

        $resultados = $table->fetchAll(PDO::FETCH_ASSOC);

        return $resultados;
    }

    public function getById(int $id){
        $sql = "SELECT * FROM tb_recados WHERE id = :id";

        $table = $this->connection->prepare($sql); 
        $table->bindParam(":id", $id);

        $table->execute();

        $resultados = $table->fetch(PDO::FETCH_ASSOC);

        return $resultados;
    }

    public function create(string $texto){

        $sql = "INSERT INTO tb_recados (texto) VALUES('$texto')";

        $statement = $this->connection->exec($sql);

        $id = $this->connection->lastInsertId();

        return $id;
    }
}