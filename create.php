<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>create user</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.min.css';?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="navbar navbar-dark bg-dark">
        <div class="container">
            <a href="#" class="navbar-brand">CRUD APPLICATION</a>

        </div>

    </div>
    <div class="container" style="padding-top: 10px;">
        <h3>Create User</h3>
        <hr>
        <form method="post" name="createUser" action="<?php echo base_url().'index.php/user/create';?>">
        <div class="row">
            
            <div class="col-md-6">
                <div class="form-group">
                <i class="bi bi-person-fill"></i>
                
                    <label>Name</label>
                    <input type="text" name="name" value="<?php echo set_value('name');?>" class="form-control">
                    <?php echo form_error('name');?>
                </div>
                <div class="form-group">
                <i class="bi bi-envelope-fill"></i>
                    <label>Email</label>
                    <input type="text" name="email" value="<?php echo set_value('email');?>" class="form-control">
                    <?php echo form_error('email');?>
                </div>
                <div class="form-group">
                    <button class="btn btn-success">CREATE</button>
                    <a href="<?php echo base_url().'index.php/user/index';?>" class="btn btn-danger">CANCEL</a>
                    
                </div>



            </div>
             
        </div>
        </form>

    </div>
    
</body>
</html>