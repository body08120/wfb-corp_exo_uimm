<?php

class CodeRepository extends Connect
{
    public function __construct()
    {
        parent::__construct();
    }

    public function checkCodeExists(string $code): bool
    {
        $sql = "SELECT * FROM `code` WHERE `code` =?";
        $stmt = $this->getDb()->prepare($sql);
        $stmt->execute([$code]);

        $code = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($code !== false) {
            return true;
        }
        return false;
    }
}
?>