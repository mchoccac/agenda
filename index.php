<?php
session_start();
// Inclui o arquivo com as configura��es do sistema
require_once './application/config/config.inc.php';

if (empty($_SESSION['login']) && empty($_SESSION['nome']))
{
    if (!empty($_GET['k']))
    {
        $url = explode ('/', $_GET['k']);
    }
    
    $home = new LoginController();
    
    if (@$url[1])
    {
        $home->$url[1]();
    }
    
    $home->show();
}
else
{
    // Verifica se foi passa alguma coisa pela URL
    if (isset($_GET['k']) && strlen($_GET['k']) > 0)
    {
        // Separa a url em class, m�todo e parametro
        // Exemplo: site.com/classe/m�todo/parametro/parametro
        $url = explode('/', $_GET['k']);

        // Separa a classe
        $class = empty($url[0])? NULL: (string) $url[0]. 'Controller';
        // Separa o m�todo
        $method = empty($url[1])? NULL: (string) $url[1];
        // Contador para controle dos parametros
        $i = 0;

        // Percorre o vetor para pegar os parametros
        foreach ($url as $value)
        {
            // S� pega os valores referentes a parametros
            // Exemplo: site.com/class/m�todo/parametro/parametro
            if ($i > 1)
            {
                $param[] = $value;
            }
            $i++;
        }

        // Verifica se a classe existe!
        if (class_exists($class))
        {
            // Instancia a classe
            $instance = new $class;
            // Verifica se o m�todo existe
            if (method_exists($instance, $method))
            {
                // Verifica quantos parametros foram passador
                // aceitando no m�ximo 3
                switch (count(@$param))
                {
                    case 1:
                        // Execura o m�todo com 1 parametro
                        $instance->$method($param[0]);
                        break;
                    case 2:
                        // Execura o m�todo com 2 parametros
                        $instance->$method($param[0], $param[1]);
                        break;
                    case 3:
                        // Execura o m�todo com 3 parametros
                        $instance->$method($param[0], $param[1], $param[2]);
                        break;
                    default :                    
                        // Execura o m�todo sem parametros
                        $instance->$method();
                }
            }
            // Se n�o for passado um m�todo n�o existente
            // ou n�o for passado nenhum m�todo,
            // executa o m�todo show() por padr�o
            else
            {
                // Imprime o conte�do da classe por padr�o
                $instance->show();
            }
        }
        // Caso n�o existe a classe passada na URL
        // mostra o erro 404
        else
        {
            // Instancia a Classe com os erros
            $erro = new ErroController();
            // Imprime na tela
            $erro->show();
        }
    }
    // Caso nada tenha sido passado pela UrL, mostra a p�gina inicial
    else
    {
        // Instancia a Classe da p�gina inicial
        $home = new IndexController();
        // Imprime na tela
        $home->show();
    }
}