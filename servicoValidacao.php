<?php

function validaNome(string $nome) : bool
{
    if(empty($nome))
    {
        echo('O nome não pode ser vazio, por favor preencha-o novamente');
        return false;
    }
    else if(strlen($nome) < 3)
    {
        echo('O nome não pode conter menos de 3 caracteres');
        return false;
    }
    else if(strlen($nome) > 40)
    {
        echo('O nome não pode conter mais de 40 caracteres');
        return false;
    }
    return true;
}
function validaIdade(string $idade) : bool
{
    if(!is_numeric($idade))
    {
        echo('Informe um número para idade');
        return false;
    }
    return true;
}
function validaResultado(string $resultado) : bool
{
    if(!is_numeric($resultado))
    {
        echo('Informe um número para resultado');
        return false;
    }
    return true;
}
