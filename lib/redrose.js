imgsrc='';
listproduct='';
areacode='';
listdate='';
startDate='';
stopDate='';

function getProduct(imgsrc){
	//alert(imgsrc);
	$('#ptab_result').html('<h2>Waiting...</h2><img src="img/car.gif" width="350px">');
	$.ajax({
		url:"getkq.php",
		type:"get",
		dateType:"text",
		data:{
			 imgsrc:imgsrc,
			 func:'getProduct'
		},
		success:function (kq){
			$('#ptab_result').html(kq);
		}
	});
}

function getCheckedBoxes(chkboxName) {
  var checkboxes = document.getElementsByName(chkboxName);
  var checkboxesChecked = [];
  for (var i=0; i<checkboxes.length; i++) {
     if (checkboxes[i].checked) {
        checkboxesChecked.push(checkboxes[i]);
     }
  }
  return checkboxesChecked.length > 0 ? checkboxesChecked : null;
}

function getProductvalue(){
	var checked2array=getCheckedBoxes('chon_product');	
	//console.log(checked2array[0].value);
	var listproduct='';
	var countlistproduct=Number(checked2array.length);
	for(var i=0;i<countlistproduct;i++){		
		if(i==countlistproduct-1){
			listproduct+=checked2array[i].value;
		}else{
			listproduct+=checked2array[i].value+',';
		}
		//console.log(checked2array[i].value);
	}
	console.log(listproduct);
	return listproduct;
}

function getlistDate(startDate,stopDate){
	var dateArray = [];
    var currentDate = moment(startDate);
    var stopDate = moment(stopDate);
	var listdate='';
    while (currentDate <= stopDate) {
        //dateArray.push( moment(currentDate).format('YYYY-MM-DD') )
		dateArray.push( moment(currentDate).format('YYYY.MM.DD') )
        currentDate = moment(currentDate).add(1, 'days');
    }
	
	var countDate=dateArray.length;
	for(var i=0;i<countDate;i++){		
		if(i==countDate-1){
			listdate+=dateArray[i];
		}else{
			listdate+=dateArray[i]+',';
		}
		//console.log(checked2array[i].value);
	}
    //return dateArray;
	console.log(listdate);
	return listdate;
}

function getDatalink(imgsrc,listproduct,areacode,listdate){
	$('#ptab_kqfinal').html('');
	$('#ptab_img').html('<h2>Waiting...</h2><img src="img/car.gif" width="350px">');
	$.ajax({
		url:"getkq.php",
		type:"get",
		dateType:"text",
		data:{
			 imgsrc:imgsrc,
			 listproduct:listproduct,
			 areacode:areacode,
			 listdate:listdate,
			 func:'getDatalink'
		},
		success:function (kq){
			$('#ptab_img').html('');
			$('#ptab_kqfinal').html(kq);
		}
	});
}

function downloadlink(){
	txtlink=$("#txtlink").val();
	var url='getkq.php?txtlink='+txtlink+'&func=downloadlink';
	window.location.href = url;
}