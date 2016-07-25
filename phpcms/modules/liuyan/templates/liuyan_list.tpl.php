<?php 
defined('IN_ADMIN') or exit('No permission resources.');
$show_dialog=1;
include $this->admin_tpl('header', 'admin');
	?>
<table class="table table-hover center" width="60%">
	

<?php  
	if(is_array($infos)){
	foreach($infos as $info){ 
?>
<tr>
	<td align="center" width="35px"><input type="checkbox" name="lyid[]" value="<?php echo $info['lyid']?>"></td>
	<td align="left" width="30%"><?php echo $info['lycontent']?></td>
	<td align="center" width="100px"><?php echo $info['username'];?></td>
	<td align="center" width="200px"><?php echo date('Y-m-d H-i-s',$info['lydate']);?></td>
	<td align="center" width="10%">
	<?php if($info['ispass']=='0'){echo '<font color=red>未回复</font>';}else if($info['ispass']=='1'){echo '已回复';}else{echo '未通过';}?></td>
	<td align="center" width="12%">
		<a href="###" onclick="reply(<?php echo $info['lyid']?>,
		‘<?php echo new_addslashes($info['biaoti'])?>')" title="回复留言">回复
		</a> |
		<a href='?m=liuyan&c=liuyan&a=delete&lyid=<?php echo $info['lyid']?>'
		 onClick="return confirm('<?php echo L('confirm', 
		array('message' => new_addslashes($info['biaoti'])))?>')"><?php echo L('delete')?></a>
	</td>
</tr>

<?php } } ?>
</table>

</body>
 <div id="pages"><?php echo $pages?></div>

</html>