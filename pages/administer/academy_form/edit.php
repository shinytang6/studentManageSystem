<?php
$no =$_POST['number'] ;
$name=$_POST['name'] ;
$principal =$_POST['prin'] ;
$contact=$_POST['con'] ;
$address=$_POST['add'] ;
?>


<div class="edit_form">
		<form action="academy_form/edit_process.php" method="post" style="left: 400px;top: 100px;position: absolute;width: 800px;">
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
					<label class="control-label sr-only" for="ID_ic_name">名称</label>

					<div class="input-group">
						<div class="input-group-addon">名称</div>
														<input readonly class="form-control" type="text"
									   name="ic_name"
									   value=<?php echo $name; ?> id="ID_ic_name">
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
					<label class="control-label sr-only" for="ID_ic_tel">地址</label>

					<div class="input-group">
						<div class="input-group-addon">地址</div>
														<input class="form-control" type="text"
									   name="ic_address" value=<?php echo $address; ?>
									   id="ID_ic_address">
													</div>
				</div>
										<div class="form-group">
				<button class="btn btn-primary" type="submit" style="margin-left: 300px;width: 100px;">更新</button>
			</div>
		</form>
	</div>
