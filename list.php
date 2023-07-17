<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>view user</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.min.css';?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>
<body>
    <div class="navbar navbar-dark bg-dark">
        <div class="container">
            <a href="#" class="navbar-brand">CRUD APPLICATION</a>

        </div>

    </div>
    <div class="container" style="padding-top: 10px;">
    <div class="row">
        <div class="col-md-8">
            <div class="row">
            <div class="col-6"><h3>View Users</h3></div>
    <div class="col-6"><a href="<?php echo base_url().'index.php/user/create';?>" class="btn btn-warning">CREATE</a></div>
    </div>

            </div>
            <hr>
        </div>
    
        
      
        <div class="row">
            <div class="col-md-8">
                <table class="table table-striped">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th width="60">Edit</th>
                        <th width="100">Delete</th>
                    </tr>

                    <?php if(!empty($users)) { foreach($users as $user) { ?>
                    <tr>
                        <td><?php echo $user['user_id']?></td>
                        <td><?php echo $user['name']?></td>
                        <td><?php echo $user['email']?></td>
                        <td>
                            <a href="<?php echo base_url().'index.php/user/edit/'.$user['user_id']?>" class=" btn btn-primary"><i class="bi bi-pencil-fill"></i></a>
                        </td>
                        <td>
                            <a href="<?php echo base_url().'index.php/user/delete/'.$user['user_id']?>" class=" btn btn-danger"><i class="bi bi-trash3-fill"></i></a>
                        </td>
                    </tr>
                    <?php } }else{ ?>

                        
                        <tr>
                            <td colspan="5">Rcord not found</td>
                        </tr>
                        <?php } ?>
                       

                </table>
            </div>

        </div>
      
    </div>
    
</body>
</html>