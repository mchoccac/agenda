<?php /* Smarty version Smarty-3.1.13, created on 2013-06-01 03:35:30
         compiled from ".\application\view\tpls\home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:644051a93a2c94d202-52709109%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd78ea4e78258e0c398b295dc21b797f146799248' => 
    array (
      0 => '.\\application\\view\\tpls\\home.tpl',
      1 => 1370057720,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '644051a93a2c94d202-52709109',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51a93a2ca84ff7_06401260',
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51a93a2ca84ff7_06401260')) {function content_51a93a2ca84ff7_06401260($_smarty_tpl) {?><!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="iso-8859-1">
        <base href="//localhost/agenda/" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Agenda de Contatos</title>
        <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/bootstrap-responsive.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/agenda-style.css">
        <link rel="shortcut icon" href="assets/ico/agenda.png" />
    </head>
    <body>
        <!-- NAVBAR - INIT -->
        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container-fluid">
                    <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="brand" href="./Index/">Agenda</a>
                    <form class="navbar-search pull-right">
                        <input type="text" class="search-query" placeholder="Buscar Contato" autocomplete="off" data-provide="typeahead" id="search">
                    </form>
              </div>
          </div>
        </div>
        <!-- NAVBAR - END -->
        
        <!-- CONTAINER - INIT -->
        <div class="container">
            <div class="row">
                <div class="span3">                    
                    <div class="well">
                        <ul class="nav nav-list">
                            <li class="active"><a href="./Index/">Home</a></li>
                            <li class="nav-header">Agenda</li>
                            <li><a href="#">Adicionar Contato</a></li>
                            <li><a href="#">Buscar Contato</a></li>
                            <li class="nav-header">Adicionais</li>
                            <li><a href="#">Operadora Telefônica</a></li>
                            <li><a href="#">Cidades</a></li>
                            <li><a href="#">Estados</a></li>
                            <li class="nav-header">Usuário</li>
                            <li><a href="#">Adicionar Usuário</a></li>
                            <li><a href="#">Buscar Usuário</a></li>
                            <li class="nav-header">Login</li>
                            <li><a href="./Login/logout">Sair</a></li>
                        </ul>
                    </div>
                </div>
                <div class="span9" id="content">
                    <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

                </div>
            </div>
        </div>
        <!-- CONTAINER - END -->
        <hr>
        <footer>
            <p class="text-center">Sistema Desenvolvido por <a href="#">Alan Freire</a></p>
        </footer>
        <script type="text/javascript" src="assets/js/jquery-2.0.1.min.js.js"></script>
        <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
        <script type="text/javascript">
            $(window).resize(function(){
                $('#content').css('min-height', $(window).height() - $(".navbar").height()
                        - parseInt($("body").css("margin-top"))
                        - parseInt($("footer").css("height")) - 15
                        );  
            });
            $(window).resize();
        </script>
    </body>
</html><?php }} ?>