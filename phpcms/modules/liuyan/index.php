<?php
defined('IN_PHPCMS') or exit('No permission resources.'); 
class index {
	function __construct() {
		$this->liuyan_db = pc_base::load_model('liuyan_model');
		$this->_username = param::get_cookie('_username');
		$this->_userid = param::get_cookie('_userid');
		$this->_nickname = param::get_cookie('_nickname');
		$this->_userpic = param::get_cookie('_userpic');
		define("SITEID",$siteid);
		//读取配置，设置分页条数
		$setting = new_html_special_chars(getcache('liuyan','commons'));
		$this->set = $setting[SITEID];
		 
	}
	
	public function init() {

		$_userid = $this->_userid;
		$_username = $this->_username;
		$_nickname = $this->_nickname;
		$_userpic = $this->_userpic;
		//读取配置，设置分页条数
		$setting = new_html_special_chars(getcache('liuyan','commons'));
		$set = $setting[SITEID];
		$pagesize =  15;
		$where="ispass=1 or regip='".ip()."' ";
		$page=isset($_GET['page'])&&intval($_GET['page'])?intval($_GET['page']):1;
		$infos=$this->liuyan_db->listinfo($where,'lydate desc',$page,$pages=$pagesize);
		$infos=new_html_special_chars($infos);
		$pages=$this->liuyan_db->pages;
		pc_base::load_sys_class('form','',0);
		include template('liuyan','index');
		 
	}	
	public function ly() {
		if(isset($_POST['mnickname'])){ 
			if(isset($_POST['code'])){
				$session_storage = 'session_'.pc_base::load_config('system','session_storage');
				pc_base::load_sys_class($session_storage);
				if(!isset($_SESSION)) {
						session_start();
				}
				$code = isset($_POST['code']) && trim($_POST['code']) ? trim($_POST['code']) : showmessage(L('input_code'), HTTP_REFERER);
				if ($_SESSION['code'] != strtolower($code)) {
					showmessage(L('code_error'), HTTP_REFERER);
				}
			} 
			//biaoti,lycontent,lydate,username,regip
			$liuyanban['lydate']=SYS_TIME;
			$liuyanban['lycontent']=$_POST['ly']['lycontent'];
			$liuyanban['username']=$_POST['ly']['username'];
			$liuyanban['contact']=$_POST['ly']['contact'];
			$liuyanban['regip']=ip();
			$liuyanban['userid']=$this->_userid;
			$this->liuyan_db->insert($liuyanban);
			showmessage(L('add_success'), HTTP_REFERER);
		}else{
			showmessage("请通过正常方式提交留言，谢谢！",HTTP_REFERER);
		}
		showmessage("提交成功，我们会联系律师尽快给您回复！",HTTP_REFERER);
	}
	
	 
	
 
	
 
	
 
}