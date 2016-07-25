<?php
return array (
  'tname' => 
  array (
    'info' => 
    array (
      'formtype' => 'text',
      'field' => 'tname',
      'name' => '姓名',
      'tips' => '请输入您的名字',
      'formattribute' => '',
      'css' => '',
      'minlength' => '1',
      'maxlength' => '',
      'pattern' => '',
      'errortips' => '',
      'modelid' => '0',
      'setting' => '{\\"size\\":\\"50\\",\\"defaultvalue\\":\\"\\",\\"ispassword\\":\\"0\\"}',
      'siteid' => '1',
      'unsetgroupids' => '',
      'unsetroleids' => '',
    ),
    'sql' => 'ALTER TABLE `formguide_table` ADD `tname` VARCHAR( 255 ) NOT NULL DEFAULT \'\'',
  ),
);
?>