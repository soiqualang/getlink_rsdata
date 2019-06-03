<?php
if($idstop==-1){
	$hdfilefull='';
	$btdownfullcurenttxt='';
	/* $hdfilefull='';
	$btdownfullcurenttxt='<input type="submit" name="downfullcurenttxt" value="Down file tổng hợp dữ liệu">'; */
}else{
	$hdfilefull='';
	$btdownfullcurenttxt='';
	/* $hdfilefull='<input type="hidden" name="fullcurenttxt" value="'.base64_encode($filefull).'">';
	$btdownfullcurenttxt='<input type="submit" name="downfullcurenttxt" value="Down file tổng hợp dữ liệu">'; */
}
echo '<form name="frm1" action="'.$self.'" method="post">
			<input type="hidden" name="linktxt" value="'.base64_encode($linktxt).'">
			'.$hdfilefull.'
			<input type="hidden" name="ngaystart" value="'.$ngaystart.'">
			<input type="hidden" name="thangstart" value="'.$thangstart.'">
			<input type="hidden" name="namstart" value="'.$namstart.'">
			<input type="hidden" name="ngayend" value="'.$ngayend.'">
			<input type="hidden" name="thangend" value="'.$thangend.'">
			<input type="hidden" name="namend" value="'.$namend.'">
			<input type="hidden" name="idstop" value="'.$idstop.'">
			<input type="submit" name="downlinktxt" value="Down danh sach links download">
			'.$btdownfullcurenttxt.'
			<input type="submit" name="downfulltxt" value="Down file tổng hợp tất cả">
			<!--<input type="button" onclick="javascript:history.go(-1)" value="Quay lại"/>-->
			<input type="button" value="Quay lại" onclick="javascript:window.open(\'./\');"/>
		</form>';
?>
<div id="2"><font size="4">Hướng dẫn download</font><br>
<input type="button" value="Xem!" style="width:150px;font-size:12px;margin-left:10px;margin-bottom:3px;padding:0px;" onclick="if (this.parentNode.parentNode.getElementsByTagName('div')[1].style.display != '') { this.parentNode.parentNode.getElementsByTagName('div')[1].style.display = ''; this.parentNode.parentNode.getElementsByTagName('div')['hide'].style.display = 'none'; this.innerText = ''; this.value = 'An di!'; } else { this.parentNode.parentNode.getElementsByTagName('div')[1].style.display = 'none'; this.parentNode.parentNode.getElementsByTagName('div')['hide'].style.display = ''; this.innerText = ''; this.value = 'Xem!'; }" />
<div id="show" style="display: none; background-color:transparent; background-repeat:repeat; margin: 0px;border-style:solid;border-width:1px; padding: 4px; width:98%">
<!--noi dung o day-->
<?php
include('hd.html');
?>
<!--het noi dung-->
</div>
<div id="hide"></div>
</div>