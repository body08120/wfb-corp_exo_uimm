<?php

class Code
{
    private int $idCode;

    private string $code;

    public function __construct()
    {
    }

    public function getCode(): string
    {
        return $this->code;
    }

    public function setCode(string $code)
    {
        $this->code = $code;
    }
}
?>