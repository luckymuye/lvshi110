 <?php 
defined('IN_PHPCMS') or exit('Access Denied');
defined('UNINSTALL') or exit('Access Denied');
$liuyan_db = pc_base::load_model('liuyan_model');
$liuyanid = $liuyan_db->delete(array('module'=>'liuyan'));
if(!$liuyanid) return FALSE;
 ?>