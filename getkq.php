<?php
//ini_set('max_execution_time', 300);
ini_set('max_execution_time', 0); //unlimit
$timezone = "Asia/Ho_Chi_Minh";
if(function_exists('date_default_timezone_set')) date_default_timezone_set($timezone);
include('simple_html_dom.php');
include('lib.php');
//khai bao
$linktxt='';
$host='http://trangxoa.com/ungdung/rsdata/';
$self = 'extxt.php';

$imghost='https://e4ftl01.cr.usgs.gov/';

function getDataURL($hosturl){
	$html = file_get_html($hosturl);
	$getpre=$html->find('pre');		
	//lay link
	$href=$html->find('a');	
	return $href;	
}
function checkcontains($str,$key){
	if (strpos($str,$key) !== false) {
		return true;
	}
}
function url_exists($url){    
	$file_headers = @get_headers($url);
	if(!$file_headers || $file_headers[0] == 'HTTP/1.1 404 Not Found') {
		$exists = false;
	}
	else {
		$exists = true;
	}
	return $exists;
}

/*lay danh sach product*/
if(isset($_REQUEST['func'])){
	$func=$_REQUEST['func'];
	if($func=='getProduct'){
		$imgsrc=$_REQUEST['imgsrc'];
		$hosturl=$imghost.$imgsrc;
		$href=getDataURL($hosturl);
		for($i=7;$i<count($href);$i++){
		//echo $href[$i]->href . '<br>';
			echo '<div class="checkbox">
				  <label><input name="chon_product" type="checkbox"  value="'.$href[$i]->href.'">'.$href[$i]->href.'</label>
				</div>';
		}
	}
	if($func=='getDatalink'){
		$imgsrc=$_REQUEST['imgsrc'];
		$listproduct=$_REQUEST['listproduct'];
		$areacode=$_REQUEST['areacode'];
		$listdate=$_REQUEST['listdate'];
		
		$listproduct2arr=explode(',',$listproduct);
		$areacode2arr=explode(',',$areacode);
		$listdate2arr=explode(',',$listdate);
		
		//https://e4ftl01.cr.usgs.gov/MOLT/MOD11A1.006/2000.02.24/
		//https://e4ftl01.cr.usgs.gov/MOLT/MOD09CMG.006/2000.02.24
		//https://e4ftl01.cr.usgs.gov/MOLT/MOD11A1.006/2000.02.24/BROWSE.MOD11A1.A2000055.h00v08.006.2015057070315.1.jpg
		
		$count_p=count($listproduct2arr);
		$count_a=count($areacode2arr);
		$count_d=count($listdate2arr);
		
		$linkurl='';
		$txtlink='';
		for($p=0;$p<$count_p;$p++){
			for($d=0;$d<$count_d;$d++){
				$hosturl=$imghost.$imgsrc.'/'.$listproduct2arr[$p].$listdate2arr[$d];
				//echo $hosturl.'<br>';
				if(url_exists($hosturl)==true){
					$href=getDataURL($hosturl);
					for($i=7;$i<count($href);$i++){
						for($a=0;$a<$count_a;$a++){
							if(checkcontains($href[$i]->href,$areacode2arr[$a])==true){
								$linkurl.=$hosturl.'/'.$href[$i]->href.'<br>';
								$txtlink.=$hosturl.'/'.$href[$i]->href.'|';
							}						
						}					
					}
				}				
			}
		}
		
		echo '<br><br><hr><h2>List download links</h2>';
		echo '<form action="getkq.php" method="POST">';
		//echo '<input name="submit_getlink" id="submit_getlink" type="button" class="btn btn-default" value="Download" onclick="downloadlink();"><br>';
		echo '<input name="submit_getlink1" id="submit_getlink1" type="submit" class="btn btn-default" value="Download list"><br>';
		echo '<input type="hidden" name="txtlink" id="txtlink" value="'.base64_encode($txtlink).'">';
		echo '</form>';
		echo $linkurl;
	}
}
if(isset($_REQUEST['submit_getlink1'])){
		header("Content-type: text/plain");
		header("Content-Disposition: attachment; filename=listlinks.txt");
		$txtlink=$_REQUEST['txtlink'];
		$txtlink=base64_decode($txtlink);
		$txtlink2arr=explode('|',$txtlink);
		$countlink=count($txtlink2arr);
		for($l=0;$l<$countlink-1;$l++){
			echo $txtlink2arr[$l].'
';
		}
	}
?>