<?php

/**
 * Classe View
 * Cria uma abstra��o para gerenciamento de templates
 * @author Alan
 */
class View
{
    /**
     * Atributo que recebe a instancia da biblioteca Smarty
     * @var Smarty
     */
    protected $smarty;
    
    /**
     * Atributo que recebe o conte�do para impress�o na tela
     * dentro da parte de conte�do do template principal
     * @var String
     */
    private $template;
    
    /**
     * M�todo construtor
     * Inst�ncia a biblioteca Smarty
     */
    public function __construct()
    {
        // Instancia a biblioteca Smarty
        $this->smarty = new Smarty();                
        // Define os valores padr�o para diretorios do Smarty
        
        // Ativa ou desativa o debugador
        //$this->smarty->debugging = true;
        // Ativa ou desativa o cache
        //$this->smarty->caching = true;
        // Atribui o tempo do vida dos arquivos de cache
        //$this->smarty->cache_lifetime = 120;

        // Seta o diretorio dos templates
        $this->smarty->template_dir = './application/view/tpls';
        // Seta o diret�rio dos arquivos compilados
        $this->smarty->compile_dir  = './application/cache';
        // Seta o diret�rio dos arquivos de configura��o
        $this->smarty->config_dir   = './application/config';
        // Seta o diret�rio do arquivos de cache
        $this->smarty->cache_dir    = './application/cache';
    }
    
    /**
     * M�todo assign
     * Associa a vari�vel que esta no template ao valor passado em $value
     * @param string $variable
     * @param string $value
     */
    public function assign ($variable, $value)
    {
        // Faz a associa��o das variaveis do template ao seu valor
        $this->smarty->assign($variable, $value);
    }
    
    /**
     * M�todo display
     * Pega a conte�do do display com todos os valores j� passado
     * pelo m�todo assign() e coloca no atributo $template atrav�s de um buffer
     * @param template $template
     */
    public function display($template)
    {
        // Inicia o buffer
        ob_start();
        // Imprime o template
        $this->smarty->display($template.'.tpl');
        // Pega o conte�do impresso e o coloca em $this->template
        $this->template = ob_get_contents();
        // Encerra o baffer e o limpa
        ob_end_clean();
    }
    
    /**
     * M�todo show()
     * Imprime o conte�do na tela do dispositivo
     */
    public function show()
    {
        // Verifica se $this->template foi definido
        if (isset($this->template))
        {
            // Associa o conte�do de $this->template
            // ao local de conte�do do template principal
            $this->smarty->assign('content', $this->template);
        }
        // Caso n�o tenha nada em $this->template
        else
        {
            // Coloca "Nenhum conte�do selecionado!" no local de conte�do do
            // template principla
            $this->smarty->assign('content', 'Nenhum conte�do selecionado!');
        }
        
        // Imprime o template principal
        $this->smarty->display('home.tpl');
    }
}

?>
