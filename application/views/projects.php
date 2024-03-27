<!DOCTYPE html>
<html>
    <head>
        <title>CodeIgniter Project Manager</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <h2 class="text-center mt-5 mb-3"><?php echo $title; ?></h2>
            <div class="card">
                <div class="card-body">
                    <table class="table table-bordered">
                        <tr>
                            <th>Name</th>
                            <th>Description</th>
                        </tr>
 
                        <?php foreach ($projects as $project) { ?>      
                        <tr>
                            <td><?php echo $project->name; ?></td>
                            <td><?php echo $project->description; ?></td>
                        </tr>
                        <?php } ?>
                    </table>
                    <p><?php echo $links; ?></p>
                </div>
            </div>
 
        </div>
    </body>
</html>
