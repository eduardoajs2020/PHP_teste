<?php

function defineNivelColesterol(string $nome, string $idade, string $resultado) : ?string
{
    $colesterol = [];
    $colesterol[] = 'desejavel';
    $colesterol[] = 'alterado';

    if(validaResultado($resultado))
    {

        if($resultado >= 170)
        {
            for($i = 0; $i <= count($colesterol); $i++)
            {
                if($colesterol[$i] == 'alterado')
                {
                    print_r("==> O paciente ".$nome. " está com o Colesterol " .$colesterol[$i]. "<==");
                    return 1;
                }
            }
        }

        else
        {
            for($i = 0; $i <= count($colesterol); $i++)
            {
                if($colesterol[$i] == 'desejavel')
                {
                    print_r("==> O paciente ".$nome. " está com o Colesterol " .$colesterol[$i]. "<==");
                    return 1;
                }
            }
        }
    }
}
