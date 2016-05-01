<?php
#注册插件
RegisterPlugin("SmallPIC","ActivePlugin_SmallPIC");


function ActivePlugin_SmallPIC() {
Add_Filter_Plugin('Filter_Plugin_Edit_Response3','SmallPIC_Url');
}

function InstallPlugin_SmallPIC(){
	global $zbp,$article;
	//$zbp->Config('SmallPIC')->default_url='http://cn.SmallPIC.com/avatar/{%emailmd5%}?s=40&d={%source%}';
	// $zbp->Config('SmallPIC')->default_url='http://SmallPIC.duoshuo.com/avatar/{%emailmd5%}?s=60&d=mm&r=G';
	// $zbp->Config('SmallPIC')->source='{%host%}zb_users/avatar/0.png';
	// $SmallPIC='http://app.zblogcn.com/files/phpplugin/CustomMeta/logo.png';	
	$zbp->SaveConfig('SmallPIC');	
}

function UninstallPlugin_SmallPIC(){
	global $zbp;
}

function SmallPIC_Url(){
	global $zbp,$article;
	echo '<div><label for="meta_SmallPIC" class="editinputname">特色图片链接地址:</label><br /><input type="text" name="meta_SmallPIC" value="'.htmlspecialchars($article->Metas->$SmallPIC).'"/><br /><img src="'.$article->Metas->$SmallPIC.'" alt="暂无图片" style="max-width:190px" /></div>';
	// SmallPIC_Response('SmallPIC',$article);
}

?>