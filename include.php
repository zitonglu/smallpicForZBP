<?php
#注册插件
RegisterPlugin("SmallPIC","ActivePlugin_SmallPIC");


function ActivePlugin_SmallPIC() {
Add_Filter_Plugin('Filter_Plugin_Edit_Response3','SmallPIC_Url');
}

function InstallPlugin_SmallPIC(){
	global $zbp,$article;
	// //$zbp->Config('SmallPIC')->default_url='http://cn.SmallPIC.com/avatar/{%emailmd5%}?s=40&d={%source%}';
	// $zbp->Config('SmallPIC')->default_url='http://SmallPIC.duoshuo.com/avatar/{%emailmd5%}?s=60&d=mm&r=G';
	// $zbp->Config('SmallPIC')->source='{%host%}zb_users/avatar/0.png';
	$zbp->Config('SmallPIC')->SmallPIC_Url=0;	
	$zbp->SaveConfig('SmallPIC');	
}

function UninstallPlugin_SmallPIC(){
	global $zbp;
	$zbp->DelConfig('SmallPIC');
}

function SmallPIC_Url(){
	global $zbp,$article;
	echo '<div><label for="meta_teSeTuPian" class="editinputname">特色图片链接地址:</label><br /><input type="text" name="meta_teSeTuPian" value="'.htmlspecialchars($article->Metas->SmallPIC_Url).'"/><br /><img src="'.$article->Metas->SmallPIC_Url.'" alt="暂无图片" style="max-width:190px" /></div>';
}

?>