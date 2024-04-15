<?php

class ExceptionSexo extends Exception
{
    public function __construct($message = "Sexo não encontrado na calculadora IMC", $code = 0, Throwable $previous = null) {
        parent::__construct($message, $code, $previous);
    }

    public function gerarUmLog()
    {
        $str = 'Mensagem de erro: ' . $this->getMessage();
        file_put_contents('error.log', $str, FILE_APPEND);
    }
}

try {
    throw new ExceptionSexo();
} catch (ExceptionSexo $e) {
    echo $e;
    $e->gerarUmLog();
}
