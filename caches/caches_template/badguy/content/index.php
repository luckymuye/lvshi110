<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
<div class="container">
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h2 class="panel-title model-title">本期赣州知名律师推荐</h2>
		</div>
		<div class="row">
			<div class="col-md-3 col-xs-12 center showme">
				<img  src="<?php echo IMG_PATH;?>badguy/resource/ganzhoulvshi.jpg" alt="赣州陈金兰律师 陈律师" class="img-thumbnail center" width="80%" />
				<p class="center"><strong style="font-size: 22px;">陈金兰律师</strong></p>
				<p class="center"><strong>中华全国律师协会会员</strong></p>
				<p class="center"><strong>赣州市律师协会会员</strong></p>
			</div>
			<div class="col-md-9 col-xs-12">
				<table class="table">
					<tr>
						<td class="td-nowrap">执业机构：</td>
						<td>江西君实律师事务所</td>
					</tr>
					<tr>
						<td class="td-nowrap">执业证号：</td>
						<td>13607201611931990<font style="color:red;font-weight: bolder;float: left">（A证+全国通用）</font></td>
					</tr>
					<tr>
						<td class="td-nowrap">专长领域：</td>
						<td>婚姻家庭、刑事案件、劳动工伤、交通事故、合同纠纷、法律顾问、取保候审</td>
					</tr>
					<tr>
						<td class="td-nowrap">联系方式：</td>
						<td>
							18179711204 &nbsp;&nbsp;&nbsp;&nbsp;
			 <a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=3070863734&site=qq&menu=yes">
			 	<img border="0" src="http://wpa.qq.com/pa?p=2:3070863734:51" alt="点击这里给我发消息" title="点击这里给我发消息" />
			 </a>&nbsp;&nbsp;&nbsp;&nbsp;
			 <img src="<?php echo IMG_PATH;?>badguy/resource/wxlogo.png" alt="" width="25" height="25" class="weixinlogo">&nbsp;&nbsp;&nbsp;&nbsp;
			 <a href="http://j.map.baidu.com/KPj2B" ><img src="<?php echo IMG_PATH;?>badguy/resource/address.jpg" title="点击查看在百度地图位置" alt="赣州市赞贤路市政府北门森林公馆7栋（建设银行楼上）601室" width="25" height="25" class="address"></a>
			 <div class="out" ><img src="<?php echo IMG_PATH;?>badguy/resource/weixinlogo-addon.jpg" alt="扫一扫 加我微信"  class="weixinlogo-addon" ></div>
			 <div class="out" ><img src="<?php echo IMG_PATH;?>badguy/resource/addressmap.jpg" alt="江西君实律师事务所"  class="address-addon" ></div>
						</td>
					</tr>
					<tr>
						<td class="td-nowrap">联系地址：</td>
						<td>赣州市赞贤路市政府北门森林公馆7栋（建设银行楼上）601室 </td>
					</tr>
					<tr>
						<td colspan="2">
						<p class="person-desc">陈金兰律师法学理论功底深厚，凭借过硬的法律素养于2013年9月参加国家司法考试（一次性）取得法律职业资格。2014年5月获得井冈山大学本科毕业书、学士学位，毕业后在江西君实律师事务所从事律师工作，获得从陈兰辉主任和吴智尧律师两位知名律师的悉心栽培。陈金兰律师从事律师工作后办理及参办的案件有百余件，其中刑事案件100余件，合同（包括民间借贷）纠纷案件20余件，人身损害侵权案件10余件，离婚案件9件，其他案件10余件。
	 陈金兰律师办案认真，案件进展情况跟踪及时，与当事人、法官及其他办案人员沟通良好，所办案件得到当事人的一致好评。其中钟某非法采矿案、李某生产有毒有害食品案、陈某交通肇事案、周某确认合同无效案、王某民间借贷纠纷案、李某离婚纠纷案等案件不但使当事人的权利得到保障，而且取得了良好的法律效果和社会效果。</p>
						</td>
					</tr>
				</table> 
							 
			
				 
					
			</div>
		</div>
					 
					 
				 
	</div><!-- .panel panel-default 结束 -->

   <!-- 各个模块的展示区 开始-->
   <div class="module-info">
       <div class="row">
       	<div class="col-md-6">
       		<div class="case-item">
				<div class="panel panel-primary">
					<div class="panel-heading">
						<h2 class="panel-title model-title"  title="将一些用户留言中典型的问题展现在这个模块"><?php echo $CATEGORYS['7']['catname'];?> <a href="<?php echo $CATEGORYS['7']['url'];?>"  class="pull-right">更多>></a> </h2>
					</div>
				  	<div class="panel-body">
				    	 
				    	 
				    	<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=1a47d0673555098b12c7a4e977681a70&action=lists&catid=7&order=updatetime+DESC&thumb=1&num=1&return=info\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$info = $content_tag->lists(array('catid'=>'7','order'=>'updatetime DESC','thumb'=>'1','limit'=>'1',));}?>
	             			<?php $n=1;if(is_array($info)) foreach($info AS $v) { ?>
							<div class="row">
								<div class="col-md-4 col-xs-12">
									<a href="<?php echo $v['url'];?>" target="_blank" title="<?php echo $v['title'];?>"<?php echo title_style($v[style]);?>>
								      <img class="center img-thumbnail" src="<?php echo thumb($v[thumb],90,0);?>"  alt="<?php echo $v['title'];?>">
								    </a>
								</div>
								<div class="col-md-8 col-xs-12">
								 <h4><a class="lanmu-title" href="<?php echo $v['url'];?>" target="_blank" title="<?php echo $v['title'];?>"<?php echo title_style($v[style]);?>><?php echo str_cut($v['title'],51);?></a></h4>
							    <a href="<?php echo $v['url'];?>" target="_blank" title="<?php echo $v['title'];?>"<?php echo title_style($v[style]);?> class="ft-normal">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo str_cut($v['description'],300);?> </a>
								</div>
							</div>
					        <?php $n++;}unset($n); ?>
	              		 <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?> 
	              		 
	              		
	              		 
	              		  <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=80f3aa42418fe76506c7d8735d402af5&action=lists&catid=7&num=5&order=id+DESC&return=info\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$info = $content_tag->lists(array('catid'=>'7','order'=>'id DESC','limit'=>'5',));}?>
			
			               <!--  <ul class="list-group">
			                <?php $n=1;if(is_array($info)) foreach($info AS $v) { ?>
			                	<li class="list-group-item"><a href="<?php echo $v['url'];?>" target="_blank" title="<?php echo $v['title'];?>"<?php echo title_style($v[style]);?>><?php echo str_cut($v['title'],51);?><p class="pull-right"><?php echo date('Y-m-d',$v[inputtime]);?></p></a></li>
			                <?php $n++;}unset($n); ?>
			                </ul> -->
			                
			               <table class="table table-hover">
			               <?php $n=1;if(is_array($info)) foreach($info AS $v) { ?>
			                	<tr><td><a href="<?php echo $v['url'];?>" target="_blank" title="<?php echo $v['title'];?>"<?php echo title_style($v[style]);?>><?php echo str_cut($v['title'],51);?></a></td><td class="td-nowrap"><?php echo date('m-d',$v[inputtime]);?></td></tr>
			                <?php $n++;}unset($n); ?>
			               </table> 
			                
			              <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
				    	 
				  	</div>
				</div>
			</div> <!--  .case-item  end-->
       	</div>
       	<div class="col-md-6">
			<div class="case-item">
				<div class="panel panel-primary">
					<div class="panel-heading">
						<h2 class="panel-title model-title" title="分析热点案例，针对当前法律界的重要的、知名的案件分析"><?php echo $CATEGORYS['8']['catname'];?> <a href="<?php echo $CATEGORYS['8']['url'];?>"  class="pull-right">更多>></a> </h2>
					</div>
				  	<div class="panel-body">
				    	
				    	<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=1744197feadbc5ecbe0dfff71cc2cca5&action=lists&catid=8&order=updatetime+DESC&thumb=1&num=1&return=info\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$info = $content_tag->lists(array('catid'=>'8','order'=>'updatetime DESC','thumb'=>'1','limit'=>'1',));}?>
	             			<?php $n=1;if(is_array($info)) foreach($info AS $v) { ?>
							<div class="row">
								<div class="col-md-4 col-xs-12">
									<a href="<?php echo $v['url'];?>" target="_blank" title="<?php echo $v['title'];?>"<?php echo title_style($v[style]);?>>
								      <img class="center img-thumbnail" src="<?php echo thumb($v[thumb],90,0);?>"  alt="<?php echo $v['title'];?>">
								    </a>
								</div>
								<div class="col-md-8 col-xs-12">
								 <h4><a class="lanmu-title" href="<?php echo $v['url'];?>" target="_blank" title="<?php echo $v['title'];?>"<?php echo title_style($v[style]);?>><?php echo str_cut($v['title'],51);?></a></h4>
							    <a href="<?php echo $v['url'];?>" target="_blank" title="<?php echo $v['title'];?>"<?php echo title_style($v[style]);?> class="ft-normal">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo str_cut($v['description'],300);?> </a>
								</div>
							</div>
					        <?php $n++;}unset($n); ?>
	              		 <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?> 
	              		 
	              		
	              		 
	              		  <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=858d74efac80d95eba60c675fb4c495c&action=lists&catid=8&num=5&order=id+DESC&return=info\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$info = $content_tag->lists(array('catid'=>'8','order'=>'id DESC','limit'=>'5',));}?>
			
 
			                
			               <table class="table table-hover">
			               <?php $n=1;if(is_array($info)) foreach($info AS $v) { ?>
			                	<tr><td><a href="<?php echo $v['url'];?>" target="_blank" title="<?php echo $v['title'];?>"<?php echo title_style($v[style]);?>><?php echo str_cut($v['title'],51);?></a></td><td class="td-nowrap"><?php echo date('m-d',$v[inputtime]);?></td></tr>
			                <?php $n++;}unset($n); ?>
			               </table> 
			                
			              <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
				    	 
				  	</div>
				</div>
			</div> <!--  .case-item  end-->
       	</div>
       </div>
   </div>


   <!-- 各个模块的展示区 结束 -->




	<!-- 轮播图 展示区开始 -->
	<div class="lunbotu">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h2 class="panel-title model-title" title="生活中的法律"><?php echo $CATEGORYS['11']['catname'];?> <a href="<?php echo $CATEGORYS['11']['url'];?>"  class="pull-right">更多>></a> </h2>
			</div>
		  	<div class="panel-body">
				<div class="dowebok">
					<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=d0b554559150b927c019cb912438da9a&action=position&posid=1&order=listorder+DESC&thumb=1&num=10\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'1','order'=>'listorder DESC','thumb'=>'1','limit'=>'10',));}?>
					<?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
						<a href="<?php echo $v['url'];?>" onclick="javascript:window.open('<?php echo $v['url'];?>');"><img src="<?php echo thumb($v[thumb],400,0);?>" alt="<?php echo $v['title'];?>"><span><?php echo $v['title'];?></span></a>
					<?php $n++;}unset($n); ?>
				</div>
			</div>
		</div>
	</div>
	<!-- 轮播图 展示区结束 -->


   <!-- 各个模块的展示区 开始-->
   <div class="module-info">
       <div class="row">
       	<div class="col-md-6">
       		<div class="case-item">
				<div class="panel panel-primary">
					<div class="panel-heading">
						<h2 class="panel-title model-title" title="写一些对当前某部法律的理解，偏重理论知识。"><?php echo $CATEGORYS['9']['catname'];?> <a href="<?php echo $CATEGORYS['9']['url'];?>"  class="pull-right">更多>></a> </h2>
					</div>
				  	<div class="panel-body">
				    	 <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=7969669804e2dab21af6aed5e811b5bf&action=lists&catid=9&order=updatetime+DESC&thumb=1&num=1&return=info\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$info = $content_tag->lists(array('catid'=>'9','order'=>'updatetime DESC','thumb'=>'1','limit'=>'1',));}?>
	             			<?php $n=1;if(is_array($info)) foreach($info AS $v) { ?>
					    	 <div class="row">
								<div class="col-md-4 col-xs-12">
									<a href="<?php echo $v['url'];?>" target="_blank" title="<?php echo $v['title'];?>"<?php echo title_style($v[style]);?>>
								      <img class="center img-thumbnail" src="<?php echo thumb($v[thumb],90,0);?>"  alt="<?php echo $v['title'];?>">
								    </a>
								</div>
								<div class="col-md-8 col-xs-12">
								 <h4><a class="lanmu-title" href="<?php echo $v['url'];?>" target="_blank" title="<?php echo $v['title'];?>"<?php echo title_style($v[style]);?>><?php echo str_cut($v['title'],51);?></a></h4>
							    <a href="<?php echo $v['url'];?>" target="_blank" title="<?php echo $v['title'];?>"<?php echo title_style($v[style]);?> class="ft-normal">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo str_cut($v['description'],300);?> </a>
								</div>
							</div>
					        <?php $n++;}unset($n); ?>
	              		 <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?> 
	              		 
	              		  <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=8e6e6ed7870372bbef4f0d774861d9e9&action=lists&catid=9&num=5&order=id+DESC&return=info\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$info = $content_tag->lists(array('catid'=>'9','order'=>'id DESC','limit'=>'5',));}?>
							<table class="table table-hover">
			               <?php $n=1;if(is_array($info)) foreach($info AS $v) { ?>
			                	<tr><td><a href="<?php echo $v['url'];?>" target="_blank" title="<?php echo $v['title'];?>"<?php echo title_style($v[style]);?>><?php echo str_cut($v['title'],51);?></a></td><td class="td-nowrap"><?php echo date('m-d',$v[inputtime]);?></td></tr>
			                <?php $n++;}unset($n); ?>
			               </table>	
			                 
			              <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
				     
				  	</div>
				</div>
			</div> <!--  .case-item  end-->
       	</div>
       	<div class="col-md-6">
			<div class="case-item">
				<div class="panel panel-primary">
					<div class="panel-heading">
						<h2 class="panel-title model-title" title="写一些自己平常开庭或者参加法律援助之类活动的博客性质文章。"><?php echo $CATEGORYS['10']['catname'];?> <a href="<?php echo $CATEGORYS['10']['url'];?>"  class="pull-right">更多>></a> </h2>
					</div>
				  	<div class="panel-body">
				    
				     <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=f5781b79d0b89174852f392f2b7ce462&action=lists&catid=10&order=updatetime+DESC&thumb=1&num=1&return=info\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$info = $content_tag->lists(array('catid'=>'10','order'=>'updatetime DESC','thumb'=>'1','limit'=>'1',));}?>
	             			<?php $n=1;if(is_array($info)) foreach($info AS $v) { ?>
					    	 <div class="row">
								<div class="col-md-4 col-xs-12">
									<a href="<?php echo $v['url'];?>" target="_blank" title="<?php echo $v['title'];?>"<?php echo title_style($v[style]);?>>
								      <img class="center img-thumbnail" src="<?php echo thumb($v[thumb],90,0);?>"  alt="<?php echo $v['title'];?>">
								    </a>
								</div>
								<div class="col-md-8 col-xs-12">
								 <h4><a class="lanmu-title" href="<?php echo $v['url'];?>" target="_blank" title="<?php echo $v['title'];?>"<?php echo title_style($v[style]);?>><?php echo str_cut($v['title'],51);?></a></h4>
							    <a href="<?php echo $v['url'];?>" target="_blank" title="<?php echo $v['title'];?>"<?php echo title_style($v[style]);?> class="ft-normal">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo str_cut($v['description'],300);?> </a>
								</div>
							</div>
					        <?php $n++;}unset($n); ?>
	              		 <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?> 
	              		 
	              		  <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=1e096a8736b0d7df30ece2f67e29de50&action=lists&catid=10&num=5&order=id+DESC&return=info\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$info = $content_tag->lists(array('catid'=>'10','order'=>'id DESC','limit'=>'5',));}?>
							<table class="table table-hover">
			               <?php $n=1;if(is_array($info)) foreach($info AS $v) { ?>
			                	<tr><td><a href="<?php echo $v['url'];?>" target="_blank" title="<?php echo $v['title'];?>"<?php echo title_style($v[style]);?>><?php echo str_cut($v['title'],51);?></a></td><td class="td-nowrap"><?php echo date('m-d',$v[inputtime]);?></td></tr>
			                <?php $n++;}unset($n); ?>
			               </table>	
			                 
			              <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
				    
				  	</div>
				</div>
			</div> <!--  .case-item  end-->
       	</div>
       </div>
   </div>


   <!-- 各个模块的展示区 结束 -->

   <div class="zixunliuyan">
   	<div class="panel panel-primary">
		<div class="panel-heading">
			<h2 class="panel-title model-title">咨询留言</h2> 
		</div>
		<div class="panel-body">
			<button class="btn btn-info" data-toggle="modal" data-target="#myModal">我要留言</button>
			<hr>
			<!-- 留言列表 start -->
			<div class="liuyan-list">
				<ul class="list-group">
				<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=67a273a0c1b1b6fad25495ec5709cf6f&sql=select+lycontent%2Clydate%2Cusername%2Cregip%2Cuserid+from+%60v9_liuyan%60+where+%60userid%60%3D%27%24_userid%27+or+%60ispass%60%3D1++order+by+lydate+desc&num=8&return=infos\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("select lycontent,lydate,username,regip,userid from `v9_liuyan` where `userid`='$_userid' or `ispass`=1  order by lydate desc LIMIT 8");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$infos = $a;unset($a);?>
					<?php foreach ($infos as $info) {
					 ?>
						<li class="list-group-item">
						<div class="fn <?php if($info[userid]==$_userid) { ?>text-danger<?php } ?>" data-toggle="tooltip" data-placement="left" title="" data-original-title="四川省 广电网">
                                    <div class="face"><a><?php echo $info['username'];?><?php if($info[userid]==$_userid) { ?><span style="color: red;">(我的提问)</span><?php } ?>：</a></div>
                                    <p class="<?php if($info[userid]==$_userid) { ?>bg-info<?php } ?>" ><?php echo $info['lycontent'];?></p>
                                    <p class="text-right"><?php echo date('Y年m月d日 H:m',$info[lydate]);?></p>
                                    <div class="alert alert-success" role="alert">
                                        <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                                        <span class="sr-only">提示</span>
                                        陈金兰律师回复：如交通事故中本人不负主要，全部责任的属于交通事故中因工受伤，应该按照工伤保险条例的规定处理。
                                    </div>
                                </div>
					</li>
					<?php } ?>
				<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
				</ul>
			</div>
			<!-- 留言列表 end -->
			<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			   <div class="modal-dialog">
			      <div class="modal-content">
			         <div class="modal-header">
			            <button type="button" class="close" 
			               data-dismiss="modal" aria-hidden="true">
			                  &times;
			            </button>
			            <h4 class="modal-title" id="myModalLabel">留言板</h4>
			         </div>
			         <div class="modal-body">
			         	
			 			<form action="<?php echo APP_PATH;?>index.php?m=liuyan&c=index&a=ly&siteid=<?php echo SITEID;?>" method="post" name="lyban" id="lyban"  role="form">
						   <div class="form-group">
							    <label class="sr-only" for="biaoti">用户名</label>
							    <div class="input-group">
							      <div class="input-group-addon">&nbsp;&nbsp;&nbsp;用户名</div>
							      <input type="text" class="form-control" id="biaoti" name="ly[username]" value="<?php echo $_nickname;?>" placeholder="请输入用户名" >
							      <input type="hidden"  name="mnickname" value="<?php echo $_nickname;?>" >
							    </div>
							</div>
							<div class="form-group">
							    <label class="sr-only" for="contact">联系方式</label>
							    <div class="input-group">
							      <div class="input-group-addon">联系方式</div>
							      <input type="text" class="form-control" id="contact" name="ly[contact]" placeholder="请输入QQ或者电话联系方式，仅限律师可见" >
							    </div>
							</div>

							<div class="form-group">
							    <label class="sr-only" for="contact">内容</label>
							    <div class="input-group">
							      <div class="input-group-addon">内&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;容</div>
							       <textarea class="form-control" name="ly[lycontent]"  placeholder="请描述清楚需要咨询的问题^-^" cols="50" rows="5"></textarea> 
							    </div>
							</div>
							<div class="form-group">
								<p><?php echo form::checkcode('code_img','4','14',110,30);?>&nbsp;&nbsp;&nbsp;点击可刷新&nbsp;&nbsp;&nbsp;<input type="text"  placeholder="验证码" name="code" id="code" style="width:110px;margin-right: 20px;"></p>
								<p><small style="color: red;">注意：留言仅表达个人看法，并不表明本站同意或者证实其描述。</small></p>
							</div>
  							 
	                		 
	                	</form>
			         </div>
			         <div class="modal-footer">
			         	<div class="mytouxiang center pull-left"><img src="<?php echo $_userpic;?>" class="img-circle" style="border: solid 1px white;"></div>
			            <button type="button" class="btn btn-default" 
			               data-dismiss="modal">关闭
			            </button>
			            <button type="button" class="btn btn-primary" id="lysubmit">
			               提交留言
			            </button>
			         </div>
			      </div><!-- /.modal-content -->
			</div>
	    	 
	    	 
	  	</div>
   </div>
   </div>




</div> <!-- .container end -->



 
 
<?php include template("content","footer"); ?>