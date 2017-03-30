<?php
$no =$_POST['number'] ;
$aname=$_POST['aname'] ;
$mname=$_POST['mname'] ;
$principal =$_POST['prin'] ;
$contact=$_POST['con'] ;

?>


<div class="edit_form">
		<form action="major_form/edit_process.php" method="post" style="left: 400px;top: 100px;position: absolute;width: 800px;">
		                     <div class="form-group">
					<label class="control-label sr-only" for="ID_ic_no">编号</label>

					<div class="input-group">
						<div class="input-group-addon">编号</div>
														<input readonly class="form-control" type="text"
									   name="ic_no"
									   value=<?php echo $no; ?> id="ID_ic_no">
													</div>
				</div>
							<div class="form-group">
					<label class="control-label sr-only" for="ID_ic_aname">所属学院</label>

					<div class="input-group">
						<div class="input-group-addon">所属学院</div>
														<input readonly class="form-control" type="text"
									   name="ic_aname"
									   value=<?php echo $aname; ?> id="ID_ic_aname">
													</div>
				</div>
                           

                           <div class="form-group">
					<label class="control-label sr-only" for="ID_ic_mname">专业</label>

					<div class="input-group">
						<div class="input-group-addon">专业</div>
														<input class="form-control" type="text"
									   name="ic_mname"
									   value=<?php echo $mname; ?> id="ID_ic_mname">
													</div>
				</div>




								<div class="form-group">
					<label class="control-label sr-only" for="ID_ic_admin">负责人</label>

					<div class="input-group">
						<div class="input-group-addon">负责人</div>
														<input class="form-control" type="text"
									   name="ic_admin"
									   value=<?php echo $principal; ?> id="ID_ic_admin">
													</div>
				</div>
								
								<div class="form-group">
					<label class="control-label sr-only" for="ID_ic_tel">电话</label>

					<div class="input-group">
						<div class="input-group-addon">电话</div>
														<input class="form-control" type="number"
									   name="ic_tel"
									   value=<?php echo $contact; ?> id="ID_ic_tel">
													</div>
				</div>
										<div class="form-group">
				<button class="btn btn-primary" type="submit" style="margin-left: 300px;width: 100px;">更新</button>
			</div>
		</form>
	</div>
