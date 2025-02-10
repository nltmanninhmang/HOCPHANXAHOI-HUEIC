<?php
require_once '../../../config/config.php';

class AccountModel {
    private $conn;

    public function __construct() {
        $db = new Database();
        $this->conn = $db->getConnection();
    }

    public function createAccount($username, $password, $name, $level, $class, $account_type) {
        $sql = "INSERT INTO accounts (username, password, name, level, class, account_type) VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute([$username, $password, $name, $level, $class, $account_type]);
    }
}
?>
