<?php

class Code
{
    private int $idCode;

    private string $code;

    public function __construct()
    {
    }

    public function getIdCode(): int
    {
        return $this->idCode;
    }

    public function setCode(string $code)
    {
        $this->code = $code;
    }
}
?>