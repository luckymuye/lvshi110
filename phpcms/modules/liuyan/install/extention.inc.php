<?php
defined('IN_PHPCMS') or exit('Access Denied');
defined('INSTALL') or exit('Access Denied');
$parentid = $menu_db->insert(array('name'=>'liuyan', 'parentid'=>29, 'm'=>'liuyan', 'c'=>'liuyan', 'a'=>'init', 'data'=>'', 'listorder'=>0, 'display'=>'1'), true);
$menu_db->insert(array('name'=>'add_liuyan', 'parentid'=>$parentid, 'm'=>'liuyan', 'c'=>'liuyan', 'a'=>'add', 'data'=>'', 'listorder'=>0, 'display'=>'0')); 

 
$language = array('liuyan'=>'留言模块', 'add_link'=>'添加liuyan', 'edit_link'=>'编辑留言信息');
?>