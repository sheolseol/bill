
<div id="content">
			<div id="content-header">
				<h1>Crear usuario</h1>
				<div class="btn-group pull-right">
					<a href="<?php echo base_url(); ?>users/managerusersystem" class="btn btn-primary"><i class="fa fa-chevron-left"></i> Salir</a>
					
				</div>
			</div>
			
			<div class="container-fluid">
				<div class="row">
					<div class="col-xs-12">
						<div class="widget-box">
			
							
							   <?php
					            if($this->session->flashdata("mensaje")!='' )
					            {
					                echo $this->session->flashdata("mensaje");
					            }
					            ?>
					            <?php
					            $validation_error=validation_errors("<div class='alert alert-danger' role='alert'><button type='button' class='close' data-dismiss='alert'><span aria-hidden='true'>&times;</span><span class='sr-only'>Close</span></button>","</div>");
					            if($validation_error != "")
					            {
					                echo $validation_error;
					            }
					            ?>

							<div class="widget-content nopadding">

								<?php echo form_open(null,array("name"=>"form","id"=>"form","class"=>"form-horizontal"));?>
									<div class="form-group">
										<label class="col-sm-3 col-md-3 col-lg-2 control-label">Nombre</label>
										<div class="col-sm-7 col-md-6 col-lg-7">
											<input type="text" name="name" id="name" class="form-control input-sm" value="<?php echo set_value("name");?>" />
										</div>
									</div>

									<div class="form-group">
										<label class="col-sm-3 col-md-3 col-lg-2 control-label">Apellido</label>
										<div class="col-sm-7 col-md-6 col-lg-7">
											<input type="text" name="lastname" id="lastname" class="form-control input-sm" value="<?php echo set_value("lastname");?>" />
										</div>
									</div>

									<div class="form-group">
										<label class="col-sm-3 col-md-3 col-lg-2 control-label">Login</label>
										<div class="col-sm-7 col-md-6 col-lg-7">
											<input type="text" name="username" id="username" class="form-control input-sm" value="<?php echo set_value("username");?>" />
										</div>
									</div>

									<div class="form-group">
										<label class="col-sm-3 col-md-3 col-lg-2 control-label">E-mail</label>
										<div class="col-sm-7 col-md-6 col-lg-7">
											<input type="text" name="email" id="email" class="form-control input-sm" value="<?php echo set_value("email");?>" />
										</div>
									</div>

									<div class="form-group">
										<label class="col-sm-3 col-md-3 col-lg-2 control-label">Selecione grupo de usuario</label>
										<div class="col-sm-9 col-md-9 col-lg-7">
											<select name="usergroup" id="usergroup" >
												
												<option value=" ">Seleccione</option>
												<option value="1">Administrador</option>
												<option value="2">Empleado</option>
											
											</select>
										</div>
									</div>

									
									<div class="form-group">
										<label class="col-sm-3 col-md-3 col-lg-2 control-label">Selecione Estado</label>
										<div class="col-sm-9 col-md-9 col-lg-7">
											<select name="estatus" id="estatus" >
												
												<option value="1">Activo</option>
												<option value="0">Inactivo</option>
											
											</select>
										</div>
									</div>


									<div class="form-group">
										<label class="col-sm-3 col-md-3 col-lg-2 control-label">Contraseña</label>
										<div class="col-sm-7 col-md-6 col-lg-7">
											<input type="password" name="password" id="password" class="form-control input-sm" />
										</div>
									</div>

									<div class="form-group">
										<label class="col-sm-3 col-md-3 col-lg-2 control-label">Confirmar Contraseña</label>
										<div class="col-sm-7 col-md-6 col-lg-7">
											<input type="password" name="confirmpassword" id="confirmpassword" class="form-control input-sm" />
										</div>
									</div>

								


									<div class="form-group">
										<label class="col-sm-3 col-md-3 col-lg-2 control-label">Descripción</label>
										<div class="col-sm-9 col-md-9 col-lg-10">
											<textarea rows="5" name="details" id="editor1"  class="ckeditor"><?php echo set_value("details");?></textarea>
										</div>
									</div>
									<div class="form-actions">
										<button type="submit" class="btn btn-primary btn-sm">Guardar</button>
									</div>
								<?php echo form_close();?>

							</div>
						</div>						
					</div>
				</div>

			
			</div>
		</div>