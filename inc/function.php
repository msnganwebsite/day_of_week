<?php
$ver = "?v=00000000000000000006";
$version = "1.1.0";

//Khai biến GET
$weekday = $_GET['weekday'];
$number = $_GET['number'];
$month = $_GET['month'];
	if($month==""){
		$month = date("m");
	}
$year = $_GET['year'];
$get_date = "defaultvn";

//Nếu bấm nút submit_dayofweek thì xử lý
if( isset($_GET['submit_dayofweek']) ) {

	$ketqua_input = "Ngày <b>".weekday($weekday)."</b> của Tuần thứ <b>".$number."</b> trong Tháng <b>".$month."</b> Năm <b>".$year."</b>";
	$ketqua_date = get_day_week_custom($weekday, $number, $month, $year, $get_date);

	$ketqua_dayofweek .= '<div class="ketqua_dayofweek">';
	
	$ketqua_dayofweek .= '<h3>Kết quả cho:</h3>';
	$ketqua_dayofweek .= '<p>'.$ketqua_input.' là</p>';
	$ketqua_dayofweek .= '<div>'.$ketqua_date.'</div>';

	$ketqua_dayofweek .= '</div>';

}

//Hàm xử lý
function get_day_week_custom($weekday, $number, $month, $year, $get_date){
	$day = 1;
	$date = $year.'-'.$month.'-'.$day;
	if($get_date=="year"){$edate="Y";}
	if($get_date=="month"){$edate="m";}
	if($get_date=="day"){$edate="d";}
	if($get_date=="default"){$edate="Y-m-d";}
	if($get_date=="defaultvn"){$edate="d-m-Y";}
	$date_e = date($edate, strtotime("+$number $weekday", strtotime(date($date))));
	if($get_date=="array"){
		$array = date("Y,m,d", strtotime("+$number $weekday", strtotime(date($date))));
		$date_e = explode(",",$array);
	}

	if($weekday=="" || $number=="" || $month=="" || $year==""){
		$date_e = "";
	}
	return $date_e;
}

//Đổi tiếng anh sang tiếng việt
function weekday($weekday) {
	switch($weekday) {
		case 'Monday':
			$weekday_e = 'Thứ hai';
			break;
		case 'Tuesday':
			$weekday_e = 'Thứ ba';
			break;
		case 'Wednesday':
			$weekday_e = 'Thứ tư';
			break;
		case 'Thursday':
			$weekday_e = 'Thứ năm';
			break;
		case 'Friday':
			$weekday_e = 'Thứ sáu';
			break;
		case 'Saturday':
			$weekday_e = 'Thứ bảy';
			break;
		case 'Sunday':
			$weekday_e = 'Chủ nhật';
			break;
		default:
			$weekday_e = '';
			break;
	}
	return $weekday_e;
}
?>