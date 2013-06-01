<?php

/**
 * Classe Controller
 * Cria uma abstra��o para gerenciar a
 * jun��o da camada de visualiza��o e a cadamade de persist�ncia
 * @author Alan
 */
class Controller
{
    /**
     * Recebe um objeto tipo View
     * @var View 
     */
    protected $view;
    
    /**
     * Recebe um objeto tipo Model
     * @var Model
     */
    protected $model;
    
    /**
     * M�todo show
     * Imprime o conte�do na tela
     */
    public function show()
    {
        // Executa o m�todo show do objeto View
        $this->view->show();
    }
}

?>
