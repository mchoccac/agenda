<?php
/**
 * Description of LoginView
 *
 * @author Alan
 */
class LoginView extends View
{
    public function __construct() {
        parent::__construct();
    }
    
    public function show() {
        $this->smarty->display('loginHome.tpl');
    }
}

?>
