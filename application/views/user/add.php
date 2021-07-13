<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous"> -->
    
    <!-- Bootstrap 5 CSS - start -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Bootstrap 5 CSS - end -->
    
    <!-- Bootstrap 5 Icon - start -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <!-- Bootstrap 5 Icon - end -->
    
    <!-- Font Roboto CSS -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <style>body{font-family:"Roboto" !important;}</style>
    
    <title>Nuevo usuario</title>
  </head>
  <body>

    <div class="container">
        <h1 class="mt-5"><b>Nuevo usuario</b></h1>
        <form action="<?php echo base_url(); ?>nuevo-usuario/save" class="mt-4" method="POST">
            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group mb-4">
                        <label for="exampleInputEmail1"><b>Nombre completo</b></label>
                        <input type="text" name="fullName" class="form-control mt-2 <?php echo form_error('fullName') ? 'is-invalid':'' ;?>" placeholder="Nombre completo" value="<?php echo set_value('fullName'); ?>">
                        <div class="invalid-feedback">
                        <?php echo form_error('fullName');?>
                        </div>
                    </div>

                    <div class="form-group mb-4">
                        <label for="exampleInputEmail1"><b>Email</b></label>
                        <input type="text" name="email" class="form-control mt-2 <?php echo form_error('email') ? 'is-invalid':'' ;?>" aria-describedby="emailHelp" placeholder="Correo eléctronico" value="<?php echo set_value('email'); ?>">
                        <div class="invalid-feedback">
                        <?php echo form_error('email');?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group mb-4">
                        <label for="exampleInputPassword1"><b>Contraseña</b></label>
                        <input type="password" name="password" class="form-control mt-2 <?php echo form_error('password') ? 'is-invalid':'' ;?>" placeholder="Contraseña" value="<?php echo set_value('password'); ?>">
                        <div class="invalid-feedback">
                        <?php echo form_error('password');?>
                        </div>
                    </div>

                    <div class="form-group mb-4">
                        <label for="exampleInputPassword1"><b>Repite la contraseña</b></label>
                        <input type="password" name="repeatPassword" class="form-control mt-2 <?php echo form_error('repeatPassword') ? 'is-invalid':'' ;?>" placeholder="Contraseña">
                        <div class="invalid-feedback">
                        <?php echo form_error('repeatPassword');?>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12">
                    <button type="submit" class="btn btn-primary"><b>Guardar</b></button>
                </div>
            </div>
        </form>
    </div>

    <!-- <script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script> -->
    
    <!-- Sweet Alert 2 - start -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Sweet Alert 2 - end -->
    
    <!-- Bootstrap 5 Javascript - start -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- Bootstrap 5 Javascript - start -->
    
  </body>
</html>