<div class="form day_of_week">
	<form method="GET">

		<div class="input-group">
			<label>
	            Ngày:
	            <select name="weekday">
	                <option value="Monday" <?php if($weekday=="Monday"){echo"selected";} ?> >Thứ hai</option>
	                <option value="Tuesday" <?php if($weekday=="Tuesday"){echo"selected";} ?> >Thứ ba</option>
	                <option value="Wednesday" <?php if($weekday=="Wednesday"){echo"selected";} ?> >Thứ tư</option>
	                <option value="Thursday" <?php if($weekday=="Thursday"){echo"selected";} ?> >Thứ năm</option>
	                <option value="Friday" <?php if($weekday=="Friday"){echo"selected";} ?> >Thứ sáu</option>
	                <option value="Saturday" <?php if($weekday=="Saturday"){echo"selected";} ?> >Thứ bảy</option>
	                <option value="Sunday" <?php if($weekday=="Sunday"){echo"selected";} ?> >Chủ nhật</option>
	            </select>

	            <select name="number">
	                <option value="01" <?php if($number=="01"){echo"selected";} ?> >Tuần thứ nhất</option>
	                <option value="02" <?php if($number=="02"){echo"selected";} ?> >Tuần thứ hai</option>
	                <option value="03" <?php if($number=="03"){echo"selected";} ?> >Tuần thứ ba</option>
	                <option value="04" <?php if($number=="04"){echo"selected";} ?> >Tuần thứ tư</option>
	            </select>
	        </label>
   	 	</div>

        <div class="input-group">
			<label>
	            Tháng:
	            <select name="month">
	                <?php
	                for($mm=1;$mm<=12;$mm++){
	                if($mm<10 ) {
	                    $mm = "0".$mm;
	                }
	                ?>
	                <option <?php if($month==$mm){echo"selected";} ?> ><?php echo $mm; ?></option>
	                <?php } ?>
	            </select>
	        </label>

	        <label>
	            Năm:
	            <select name="year">
	                <?php
	                $starting_year = date("Y")-500;
	                $ending_year = date("Y")+500;
	                for($starting_year; $starting_year <= $ending_year; $starting_year++) {
	                ?>
	                <option <?php if($year!="" && $year==$starting_year){echo"selected";}elseif($year=="" && date("Y")==$starting_year){echo"selected";} ?> ><?php echo $starting_year; ?></option>
	                <?php } ?>
	            </select>
	        </label>
	    </div>

        <input name="submit_dayofweek" type="submit" value="Tìm ngày" />
        <a href=".">
	    	<input type="button" value="Làm lại">
	    </a>

	</form>

	<div class="ketqua">
		<?php echo $ketqua_dayofweek; ?>
	</div>

</div>

<?php include_once ("vidu.php"); ?>