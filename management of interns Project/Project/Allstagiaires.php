<?php
require_once "bd.php";
require_once "CRUD_stagiaire.php";
session_start();
$crud = new CRUD_stagiaire();
$lesstags = $crud->findAll();
?>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="modifier.js"></script>
<script src="recherch.js"></script>
<script src="imprimer.js"></script>
<!------ <script src="imprimer.js"></script>---------->
<link href="styles.css" rel="stylesheet">
<div class="container">
    <div class="row">


        <div>
            <form id="search-form">
                <input type="search" class="nosubmit" id="search-input" class="form-control" placeholder="Search">
            </form>
        </div>

        <table id="mytable" class="table table-bordred table-striped">

            <thead>
                <th>Id</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Cin</th>
                <th>Address</th>
                <th>phone Number</th>
                <th>Level</th>
                <th>Faculty</th>
                <th>state</th>
                <th class="edit-column">Edit</th>
            </thead>
            <tbody>
                <?php

                foreach ($lesstags as  $stag) {
                    echo "<tr>";
                    foreach ($stag as $key => $value) {
                        if ($key == 'etat')
                            echo "<td id=#etat_ class=etat_field>$value</td>";
                        else  echo "<td>$value</td>";
                    }
                ?>

                    <td>
                        <a href="#" data-role="update" data-id="<?php $id = $stag[0];
                                                                echo $id; ?>"><button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal"><i>Edit</i></button></a>

                    </td>
                <?php
                }
                echo " </tr></tbody></table>";

                ?>
                <button id="print-button" class="btn btn-default">Imprimer</button>
                <!-- Modal -->
                <div class="modal fade" tabindex="-1" id="myModal" role="dialog">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</span></button>
                                <h4 class="modal-title">Update State</h4>
                            </div>
                            <div class="modal-body">
                                <p>Select the state:</p>

                                <input type="checkbox" id="checkbox1" value="Acceptable"> <label>Acceptable</label><br>
                                <input type="checkbox" id="checkbox2" value="Valide"> <label>Valide</label>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-black" id="update-state">Save </button>
                            </div>
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->