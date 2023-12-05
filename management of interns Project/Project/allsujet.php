<?php
require_once "bd.php";
require_once "CRUD_sujet.php";
require_once "CRUD_encadrant.php";
session_start();
$crud = new CRUD_sujet();
$sujs = $crud->findAll();
$crudenc = new CRUD_encadrant();
$enc = $crudenc->allId();
?>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link href="styles.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="sujet.js"></script>
<script src="sujetrecu.js"></script>
<script src="updatesuj.js"></script>
<script src="recherchersuj.js"></script>
<script src="imprimerenc.js"></script>



<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Add Topics</h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="exampleInputPassword1">Title </label>
                    <input type="text" class="form-control" name="t" id="exampleInputPassword1">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Description </label>
                    <input type="text" rows="3" cols="6" class="form-control" name="des" id="exampleInputPassword1">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Domain </label>
                    <input type="email" class="form-control" name="d" id="exampleInputPassword1">
                </div>
                <div class=" form-group">
                    <label for="sel1">State</label>
                    <select class="form-control" id="sel1">
                        <option></option>
                        <option value="En cours">En cours</option>
                        <option value="Terminer">Terminer</option>
                    </select>
                </div>

                <div class=" form-group">
                    <label for="sel1">Supervisors</label>
                    <select class="form-control" id="sel2">
                        <option></option>
                        <?php foreach ($enc as $value) {
                            echo "<option value='" . $value['iden'] . "'>" . $value['nom'] . "</option>";
                        }
                        ?>
                    </select>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-black" id="save">Save </button>
            </div>
        </div>

    </div>
</div>
<div class="container">
    <button type="button" id="add" class="btn btn-lg" data-toggle="modal" data-target="#myModal">Add Topics</button>
    <div>
        <form id="search-form">
            <input type="search" class="nosubmit" id="search-input" class="form-control" placeholder="Search">
        </form>
    </div>
    <br> <br> <br>
    <table id="mytable" class="table table-bordred table-striped">

        <thead>
            <th>Id</th>
            <th>Title</th>
            <th>Comment</th>
            <th>domain</th>
            <th>State</th>
            <th>Encadrant</th>
            <th class="edit-column">Edit</th>
            <th class="delete-column">Delete</th>
        </thead>
        <tbody>
            <?php
            foreach ($sujs  as  $suj) {
                echo "<tr>";
                foreach ($suj as  $value) {
                    echo "<td>$value</td>";
                }
            ?>

                <td>
                    <a href="#" data-role="update" data-id="<?php $id = $suj[0];
                                                            echo $id; ?>"><button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#mo"><i class="fa fa-pencil"></i></button></a>

                </td>
                <td>
                    <a href="#" data-role="delete" data-id="<?php $id = $suj[0];
                                                            echo $id; ?>"><button type="button" class="btn btn-danger btn-lg"><i class="fa fa-trash-o"></i></button></a>

                </td>
            <?php
            }
            echo " </tr></tbody></table>";

            ?>
            <button id="print-button" class="btn btn-default">Imprimer</button>

            <div class="modal fade" id="mo" role="dialog">
                <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Update Topics</h4>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Title </label>
                                <input type="text" class="form-control" name="tt" id="exampleInputPassword1">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Description </label>
                                <input type="text" class="form-control" name="desc" id="exampleInputPassword1">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Domain </label>
                                <input type="email" class="form-control" name="dd" id="exampleInputPassword1">
                            </div>
                            <div class=" form-group">
                                <label for="sel1">State</label>
                                <select class="form-control" id="sel11">
                                    <option></option>
                                    <option value="En cours">En cours</option>
                                    <option value="Terminer">Terminer</option>
                                </select>
                            </div>

                            <div class=" form-group">
                                <label for="sel1">Supervisors</label>
                                <select class="form-control" id="sell2">
                                    <option></option>
                                    <?php foreach ($enc as $value) {
                                        echo "<option value='" . $value['iden'] . "'>" . $value['nom'] . "</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-black" id="update">Update </button>
                        </div>
                    </div>

                </div>
            </div>