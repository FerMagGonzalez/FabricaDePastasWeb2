<<<<<<< HEAD
<?php /* Smarty version Smarty-3.1.14, created on 2015-11-23 23:14:59
         compiled from ".\templates\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1929156538fe3cfc943-41218057%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
=======
<?php /* Smarty version Smarty-3.1.14, created on 2015-11-23 22:12:20
         compiled from ".\templates\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:380756538134adb427-50703907%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
>>>>>>> d3574cbe8597aa6f1720f517d5dea11d0ad98efa
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0390f83576cc40b989c12a7362afcba143967e43' => 
    array (
      0 => '.\\templates\\login.tpl',
      1 => 1448313041,
      2 => 'file',
    ),
  ),
<<<<<<< HEAD
  'nocache_hash' => '1929156538fe3cfc943-41218057',
=======
  'nocache_hash' => '380756538134adb427-50703907',
>>>>>>> d3574cbe8597aa6f1720f517d5dea11d0ad98efa
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'errores' => 0,
    'error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
<<<<<<< HEAD
  'unifunc' => 'content_56538fe3d518c6_48182158',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56538fe3d518c6_48182158')) {function content_56538fe3d518c6_48182158($_smarty_tpl) {?>    <div class="container">
=======
  'unifunc' => 'content_56538134beeb17_37003842',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56538134beeb17_37003842')) {function content_56538134beeb17_37003842($_smarty_tpl) {?>    <div class="container">
>>>>>>> d3574cbe8597aa6f1720f517d5dea11d0ad98efa

      <form class="form-signin" method="POST" action="index.php?action=login">
        <h3 class="form-signin-heading">Acceder para continuar</h3>
        <label for="txtEmail" class="sr-only">Email</label>
        <input type="email" id="txtEmail" name="txtEmail" class="form-control" placeholder="Email" required autofocus>
        <label for="txtPassword" class="sr-only">Password</label>
        <input type="password" id="txtPassword" name="txtPassword" class="form-control" placeholder="Password" required>
        <?php if (count($_smarty_tpl->tpl_vars['errores']->value)>0){?>
          <div class="alert alert-danger" role="alert">
            <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
            <span class="sr-only">Error:</span>
            <?php  $_smarty_tpl->tpl_vars['error'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['error']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['errores']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['error']->key => $_smarty_tpl->tpl_vars['error']->value){
$_smarty_tpl->tpl_vars['error']->_loop = true;
?>
              <?php echo $_smarty_tpl->tpl_vars['error']->value;?>

            <?php } ?>
          </div>
        <?php }?>
        <button  type="button" class="btn btn-lg btn-warning btn-block" type="submit">Acceder</button>
      </form>

    </div> <!-- /container -->
      </form>
<?php }} ?>