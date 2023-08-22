<!DOCTYPE html>
<html>
    <head>
        <title>Developed To-Do List in PHP using Ajax</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
        <script src="js/todo-app.js"></script>  
    </head>

    <body>
        <br />
        <br />
        <div class="container">
            <h1 align="center">Developed To-Do List in PHP using Ajax - 4</h1>
            <br />
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-md-9">
                            <h3 class="panel-title">My To-Do List</h3>
                        </div>
                        <div class="col-md-3">
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    <form method="post" id="to_do_form">
                        <span id="message"></span>
                        <div class="input-group">
                            <input type="text" name="task_name" id="task_name" class="form-control input-lg" autocomplete="off" placeholder="Title..." />
                            <div class="input-group-btn">
                                <button type="submit" name="submit" id="submit" class="btn btn-success btn-lg"><span class="glyphicon glyphicon-plus"></span></button>
                            </div>
                        </div>
                    </form>
                    <br />
                    <div class="list-group">
                        <?php
                            foreach($result as $row)
                            {
                              $style = '';
                              if($row["task_status"] == 'yes')
                              {
                                $style = 'text-decoration: line-through';
                              }
                              echo '<a href="#" style="'.$style.'" class="list-group-item" id="list-group-item-'.$row["task_list_id"].'" data-id="'.$row["task_list_id"].'">'.$row["task_details"].' <span class="badge" data-id="'.$row["task_list_id"].'">X</span></a>';
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>