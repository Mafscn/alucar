<?php
    namespace App\DAO;

    class UserDAO extends Connection{
        public function __construct() {
            parent::__construct();
        }

        public function getUsers() {
            $where = [
                "sql"=>"",
                "bindings"=>[]
            ];
    
    
            $search = $this->PDO->prepare(<<<SQL
            SELECT
                `id`,
                `tipo`,
                `usuario`,
                `senha`,
            FROM
                `conta`
            SQL
            );
            
            $search->execute();
            $data = $search->fetchAll(\PDO::FETCH_ASSOC);
    
            echo $data;
            return $data;
        }
    }