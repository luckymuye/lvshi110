	function text($field, $value, $fieldinfo) {
		extract($fieldinfo);
		$setting = string2array($setting);
		$size = $setting['size'];
		if(!$value) $value = $defaultvalue;
		$type = $ispassword ? 'password' : 'text';
		$errortips = $this->fields[$field]['errortips'];
		$regexp = $pattern ? '.regexValidator({regexp:"'.substr($pattern,1,-1).'",onerror:"'.$errortips.'"})' : '';
		if($errortips) $this->formValidator .= '$("#'.$field.'").formValidator({onshow:"'.$errortips.'",onfocus:"'.$errortips.'"}).inputValidator({min:'.$minlength.',max:'.$maxlength.',onerror:"'.$errortips.'"})'.$regexp.';';
		//return '<input type="text" placeholder="'.$tips.'" name="info['.$field.']" id="'.$field.'" size="'.$size.'" value="'.$value.'" '.$this->no_allowed.' class="input-text" '.$formattribute.' '.$css.'>';
		return '<div class="form-group"><div class="input-group"><input type="text" placeholder="'.$tips.'" name="info['.$field.']" id="'.$field.'" size="'.$size.'" value="'.$value.'" '.$this->no_allowed.' class="form-control" '.$formattribute.' '.$css.'></div></div>'; 
	} 