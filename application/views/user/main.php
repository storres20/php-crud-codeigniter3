<!doctype html>
<html lang="es">
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

    <title>Lista de usuarios</title>
  </head>
  <body>

    <div class="container">

        <h1 class="mt-5"><b>Lista de usuarios</b></h1>
        <div class="text-right">
        <!-- <a href="<?php echo base_url();?>nuevo-usuario" class="btn btn-info"><ion-icon name="add"></ion-icon></a> -->
        <a href="<?php echo base_url();?>nuevo-usuario" class="btn btn-info mb-3"><b>New </b><i class="bi bi-plus-circle-fill"></i></a>
        </div>
        
        <div class="table-responsive">
        <table class="table table-striped table-hover align-middle">
            <thead class="table-primary">
                <tr>
                <th scope="col">N°</th>
                <th scope="col">Nombre completo</th>
                <th scope="col">Email</th>
                <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php $number=1; foreach($data as $key => $value): ?>
                <tr>
                    <th scope="row"> <?php echo $number++; ?> </th>
                    <td><?php echo $value->full_name; ?></td>
                    <td><?php echo $value->email; ?></td>
                    <td>
                        <a href="<?php echo base_url();?>usuario/<?php echo $value->id; ?>" class="btn btn-warning"><i class="bi bi-pencil-fill"></i></a> 
                        <a href="<?php echo base_url();?>usuario/delete/<?php echo $value->id; ?>" class="btn btn-danger"><i class="bi bi-trash-fill"></i></a>
                    </td>
                </tr>
                <?php endforeach; ?>
                
            </tbody>
        </table>
        </div>
    </div>

    <!-- <script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script> -->
    
    <!-- Sweet Alert 2 - start -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Sweet Alert 2 - end -->
    
    <!-- Bootstrap 5 Javascript - start -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- Bootstrap 5 Javascript - start -->
    
    <script>
        console.log("<?php echo $this->session->flashdata("success"); ?>");
        
        <?php if($this->session->flashdata("success")): ?>
        
            Swal.fire({
              icon: 'success',
              title: '<?php echo $this->session->flashdata("success"); ?>',
              
            })
        
        <?php endif ?>
        
    </script>
  </body>
</html>