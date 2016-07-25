<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!-- 页脚开始 -->
<footer class="footer">
	<div class="container">
        <div class="row footer-top">
            <div class="col-sm-6 col-lg-6">
                <h4>
                    <img src="<?php echo IMG_PATH;?>badguy/logo.gif"  alt="logo" />
                </h4>
                <p>Powered by <strong><a href="http://www.phpcms.cn" target="_blank">PHPCMS</a></strong> <em><?php echo get_pc_version(1);?></em> &copy; 2016 <img src="<?php echo IMG_PATH;?>copyright.gif"/><?php echo tjcode();?><?php echo runhook('glogal_footer')?>
</p>
            </div>
            <div class="col-sm-6  col-lg-5 col-lg-offset-1">
                <div class="row about">
                    <div class="col-xs-3">
                        <h4>关于</h4>
                        <ul class="list-unstyled">
                            <li><a href="/about/">关于我们</a></li>
                            <li><a href="/links/">友情链接</a></li>
                        </ul>
                    </div>
                    <div class="col-xs-3">
                        <h4>联系方式</h4>
                        <ul class="list-unstyled">
                            <li><a target="_blank" href="http://wpa.qq.com/msgrd?v=3&amp;uin=1754964535&amp;site=qq&amp;menu=yes">腾讯QQ</a></li>
                            <li><a href="mailto:909068682@qq.com">电子邮件</a></li>
                        </ul>
                    </div>
                    <div class="col-xs-3">
                        <h4>其他</h4>
                        <ul class="list-unstyled">
                            <li><a target="_blank" href="http://www.lvshi0797.com/index.php?m=admin&c=index&a=login&pc_hash=">管理员</a></li>
                            <li>
                                <script type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://"); document.write(unescape("%3Cspan id='cnzz_stat_icon_1254408940'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s4.cnzz.com/stat.php%3Fid%3D1254408940' type='text/javascript'%3E%3C/script%3E"));</script>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div>
                <ul class="list-inline text-center">
                    <li>友情链接：</li>
                    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"link\" data=\"op=link&tag_md5=80574ec69aa2a6c10ed30f7c49e0eda7&action=type_list&siteid=%24siteid&linktype=1&order=listorder+DESC&num=8&return=pic_link\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$link_tag = pc_base::load_app_class("link_tag", "link");if (method_exists($link_tag, 'type_list')) {$pic_link = $link_tag->type_list(array('siteid'=>$siteid,'linktype'=>'1','order'=>'listorder DESC','limit'=>'8',));}?>
			        <?php $n=1;if(is_array($pic_link)) foreach($pic_link AS $v) { ?>
			        <li><a href="<?php echo $v['url'];?>" title="<?php echo $v['name'];?>" target="_blank"><img src="<?php echo $v['logo'];?>" width="88" height="31" /></a></li>
			        <?php $n++;}unset($n); ?>
			        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                    <li><a href="<?php echo APP_PATH;?>index.php?m=link&c=index&a=register&siteid=<?php echo $siteid;?>" class="red">申请链接</a></li>
                </ul>
            </div>

        </div>
        <a href="#" title="返回顶部" id="goto-top"></a>
        <br />
        <div class="row footer-bottom">
            <ul class="list-inline text-center">
                <li><span>备案/许可证编号为：</span><a href="http://www.miibeian.gov.cn/" target="_blank">赣ICP备15006273号</a></li>
                <li>
                    <p>赣州律师网声明：本网站属公益性法律咨询及普法网站,如部分转载文章侵犯了您的权利,请告知本站我们将立即删除</p>
                </li>
            </ul>
        </div>
    </div>
    <script type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_1258826512'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s11.cnzz.com/z_stat.php%3Fid%3D1258826512%26show%3Dpic1' type='text/javascript'%3E%3C/script%3E"));</script>

</footer>
<!-- 页脚结束 -->



<script src="<?php echo JS_PATH;?>badguy/jquery-1.9.1.min.js"></script>
<script src="<?php echo JS_PATH;?>badguy/bootstrap.min.js"></script>
<script src="http://cdn.bootcss.com/html5shiv/r29/html5.js"></script>
<script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.js"></script>
<script src="<?php echo JS_PATH;?>badguy/jquery.liMarquee.js"></script>
<script>
$(function(){
	$('.dowebok').liMarquee();
});
</script>
<script type="text/javascript">
$(function(){
	$(".picbig").each(function(i){
		var cur = $(this).find('.img-wrap').eq(0);
		var w = cur.width();
		var h = cur.height();
	   $(this).find('.img-wrap img').LoadImage(true, w, h,'<?php echo IMG_PATH;?>msg_img/loading.gif');
	});
})
</script>
</body>
</html>