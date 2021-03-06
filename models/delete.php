<?php
// модель для управления страницей удаления записей
require_once('../config/database.php');
class Delete{
    private $db;
    private $pdo;

    public function __construct()
    {
        $this->db = new Database();
        $this->pdo = $this->db->getPDO();
    }

    public function delete($db, $param, $value){
        $sql = "DELETE FROM $db WHERE id=?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$value]);
    }
}

