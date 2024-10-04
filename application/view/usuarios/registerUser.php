     <!-- sweetalert -->
	 <link href="<?php echo URL;?>css/sweetalert2.min.css" rel="stylesheet">  
   <!-- jQuery -->
<script src="<?php echo URL;?>gen/vendors/jquery/dist/jquery.min.js"></script>

<!-- sweetalert -->
<script src="<?php echo URL;?>js/sweetalert2.min.js"></script>

<div class="row">
						<div class="col-md-12 col-sm-12 ">
							<div class="x_panel">
								<div class="x_title">
									<h2>Form Design <small>different form elements</small></h2>
									<ul class="nav navbar-right panel_toolbox">
										<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
										</li>
										<li class="dropdown">
											
											<ul class="dropdown-menu" role="menu">
											</ul>
										</li>
										<li><a class="close-link"><i class="fa fa-close"></i></a>
										</li>
									</ul>
									<div class="clearfix"></div>
								</div>
								<div class="x_content">
									<br />
									<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="POST">
                                        <div class="form-group row">
											<label class="col-form-label col-md-3 col-sm-3 label-align">Type Document</label>
											<div class="col-md-6 col-sm-6 ">
												<select class="form-control" name="selDocType" id="selDocType">
													<option>Choose option</option>
                                                    <?php foreach($tipoDocumentos as $value):?>
                                                        <option value="<?php echo $value['idTipoDocumento'];?>"><?php echo $value['doc'];?></option>
                                                    <?php endforeach;?>    
												</select>
											</div>
										</div>
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="Document">Document<span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="number" id="txtDocument" required="required" class="form-control" name="txtDocument">
											</div>
										</div>
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">First Name <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" id="txtNames" required="required" class="form-control" name="txtNames">
											</div>
										</div>
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Last Name <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" id="txtLastName" name="txtLastName" required="required" class="form-control">
											</div>
										</div>
										<div class="item form-group">
											<label for="Phone Number" class="col-form-label col-md-3 col-sm-3 label-align">Phone Number</label>
											<div class="col-md-6 col-sm-6 ">
												<input id="txtPhoneNumber" class="form-control" type="number" name="txtPhoneNumber" required="required">
											</div>
										</div>
										<div class="item form-group">
											<label for="Address" class="col-form-label col-md-3 col-sm-3 label-align">Address</label>
											<div class="col-md-6 col-sm-6 ">
												<input id="txtAddress" class="form-control" type="text" name="txtAddress" required="required" >
											</div>
										</div>
										<div class="item form-group">
											<label for="Email" class="col-form-label col-md-3 col-sm-3 label-align">Email</label>
											<div class="col-md-6 col-sm-6 ">
												<input id="txtEmail" class="form-control" type="email" name="txtEmail" required="required">
											</div>
										</div>
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align">Gender</label>
											<div class="col-md-6 col-sm-6 ">
												<div id="selGenere" class="btn-group" data-toggle="buttons">
													<label class="btn btn-secondary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
														<input type="radio" name="selGenere" value="male" class="join-btn"> &nbsp; Male &nbsp;
													</label>
													<label class="btn btn-primary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
														<input type="radio" name="selGenere" value="female" class="join-btn"> Female
													</label>
												</div>
											</div>
										</div>
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align">Date Of Birth <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input id="txtBirthdate" name="txtBirthdate" class="date-picker form-control" placeholder="dd-mm-yyyy" type="text" required="required" type="text" onfocus="this.type='date'" onmouseover="this.type='date'" onclick="this.type='date'" onblur="this.type='text'" onmouseout="timeFunctionLong(this)">
												<script>
													function timeFunctionLong(input) {
														setTimeout(function() {
															input.type = 'text';
														}, 60000);
													}
												</script>
											</div>
										</div>
										<div class="item form-group">
											<label for="Username" class="col-form-label col-md-3 col-sm-3 label-align">Username</label>
											<div class="col-md-6 col-sm-6 ">
												<input id="txtUser" class="form-control" type="text" name="txtUser" required="required">
											</div>
										</div>
										<div class="item form-group">
											<label for="Password" class="col-form-label col-md-3 col-sm-3 label-align">Password</label>
											<div class="col-md-6 col-sm-6 ">
												<input id="txtPassword" class="form-control" type="password" name="txtPassword" required="required">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-form-label col-md-3 col-sm-3 label-align">Rol</label>
											<div class="col-md-6 col-sm-6 ">
												<select class="form-control" name="selRol" id="selRol">
													<option>Choose option</option>
                                                    <?php foreach($roles as $value):?>
                                                        <option value="<?php echo $value['idRol'];?>"><?php echo $value['Descripcion'];?></option>
                                                    <?php endforeach;?>    
												</select>
											</div>
										</div>
										<div class="ln_solid"></div>
										<div class="item form-group">
											<div class="col-md-6 col-sm-6 offset-md-3">
												<button class="btn btn-primary" type="button">Cancel</button>
												<button class="btn btn-primary" type="reset">Reset</button>
												<button type="submit" class="btn btn-success" name="btnRegister">Submit</button>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
