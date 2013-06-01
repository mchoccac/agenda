<?php
/**
 * Description of IndexController
 *
 * @author Alan
 */
class IndexController extends Controller
{
    public function __construct()
    {
        $this->view = new IndexView();
    }
}

?>
