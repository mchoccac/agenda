<?php
/**
 * Description of ErroController
 *
 * @author Alan
 */
class ErroController extends Controller
{
    public function __construct()
    {
        $this->view = new ErroView();
    }
    
    public function show()
    {
        $this->view->assign("title", "P�gina n�o encontrada");
        $this->view->assign("text", "N�o foi possivel encontrar a p�gina solicitada.<br />
            Desculpe o encomodo. Estamos trabalhando para corrigir esse incoveniente<br />
            <a href='http://localhost/agenda/'>Click aqui</a> para voltar para p�gina inicial.");
        parent::show();
    }
}

?>
