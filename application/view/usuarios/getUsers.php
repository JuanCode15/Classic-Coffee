
<div class="col-md-24 col-sm-24  ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Stripped table <small>Stripped table subtitle</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Document</th>
                          <th>Type</th>
                          <th>First Name</th>
                          <th>Last Name</th>
                          <th>Phone Number</th>
                          <th>Email</th>
                          <th>Rol</th>
                          <th>Username</th>
                          <th>Estatus</th>
                          <th>Options</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php foreach($user as $value):?>
                        <tr>
                          <th scope="row"><?php echo $value['idUsuario'];?></th>
                          <td><?php echo $value['Documento'];?></td>
                          <td><?php echo $value['tipoDoc'];?></td>
                          <td><?php echo $value['Nombres'];?></td>
                          <td><?php echo $value['Apellidos'];?></td>
                          <td><?php echo $value['Telefono'];?></td>
                          <td><?php echo $value['Email'];?></td>
                          <td><?php echo $value['rol'];?></td>
                          <td><?php echo $value['Usuario'];?></td>
                          <td>
                            <?php if($value['Estado'] == 1):?>
                                <label class="badge badge-pill badge-success">Available</label>
                            <?php else: ?>
                                <label class="badge badge-pill badge-danger">UnAvailable</label> 
                            <?php endif;?>      
                          </td>
                          <td>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-edit" title="Edit" onclick="dataUser('<?php echo $value['idUsuario'];?>')"><i class="fa fa-edit"></i></button>

                            <button type="button" class="btn btn-warning btn-xs" onclick="changeStatus('<?php echo $value['idUsuario'];?>')"><i class="fa fa-refresh"></i></button>

                            <button type="button" class="btn btn-danger btn-xs" onclick="deleteUser('<?php echo $value['idUsuario'];?>')"><i class="fa fa-trash"></i></button>
                          </td>
                        </tr>
                        <?php endforeach;?>
                      </tbody>
                    </table>

                  </div>
                </div>
              </div>

              <!-- modal -->
                  <div class="modal fade bs-example-modal-lg"  id="modal-edit" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">

                        <div class="modal-header">
                          <h4 class="modal-title" id="myModalLabel">Update User</h4>
                          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <form method="post">
                            <input type="hidden" name="txtIdUser" id="txtIdUser">
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

                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                              <button type="submit" class="btn btn-primary" name="btnUpdate">Update</button>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- /modals -->