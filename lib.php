<?php

function songay($thang,$nam){
	$timestampfsn=mktime(0,0,0,$thang,1,$nam);
	return date('t',$timestampfsn);
}
function thangtext3($thang){
	switch ($thang){
		case '1':
			return 'JAN';
			break;
		case '2':
			return 'FEB';
			break;
		case '3':
			return 'MAR';
			break;
		case '4':
			return 'APR';
			break;
		case '5':
			return 'MAY';
			break;
		case '6':
			return 'JUN';
			break;
		case '7':
			return 'JUL';
			break;
		case '8':
			return 'AUG';
			break;
		case '9':
			return 'SEP';
			break;
		case '10':
			return 'OCT';
			break;
		case '11':
			return 'NOV';
			break;
		case '12':
			return 'DEC';
			break;
	}
}
function ngaytext2($ngay){
	if($ngay<10){
		return '0'.$ngay;
	}else{
		return $ngay;
	}
}
?>