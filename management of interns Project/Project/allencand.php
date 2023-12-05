<?php
session_start();
require_once "bd.php";
require_once "CRUD_encadrant.php";
require_once "CRUD_stagiaire.php";

$crudd = new CRUD_stagiaire();
$idstags = $crudd->allId();
$crud = new CRUD_encadrant();
$enc = $crud->findAll();
?>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<link href="styles.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="encadrant.js"></script>
<script src="delete.js"></script>
<script src="updateenca.js"></script>
<script src="recu.js"></script>
<script src="recherchenc.js"></script>
<script src="imprimerenc.js"></script>

<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Add Supervisors</h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="exampleInputPassword1">First Name </label>
                    <input type="text" class="form-control" name="n" id="exampleInputPassword1">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Last Name </label>
                    <input type="text" class="form-control" name="p" id="exampleInputPassword1">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Email </label>
                    <input type="email" class="form-control" name="ad" id="exampleInputPassword1">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">domaine </label>
                    <input type="text" class="form-control" name="d" id="exampleInputPassword1">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Phone Number </label>
                    <input type="text" class="form-control" name="t" id="exampleInputPassword1">
                </div>

                <div class="form-group">
                    <label for="sel1">Inters</label>
                    <select class="form-control" id="sel1">
                        <option></option>
                        <?php foreach ($idstags as $value) {
                            echo "<option value='" . $value['idstag'] . "'>" . $value['nom'] . "</option>";
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
    <button type="button" id="add" class="btn btn-lg" data-toggle="modal" data-target="#myModal">Add Supervisors</button>
    <div>
        <form id="search-form">
            <input type="search" class="nosubmit" id="search-input" class="form-control" placeholder="Search">
        </form>
    </div>
    <br>
    <table id="mytable" class="table table-bordred table-striped">
        <br> <br>
        <thead>
            <th>Id</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Address</th>
            <th>domain</th>
            <th>phone Number</th>

            <th>stagiaire</th>
            <th class="edit-column">Edit</th>
            <th class="delete-column">Delete</th>
        </thead>
        <tbody>
            <?php

            foreach ($enc as  $en) {
                echo "<tr>";
                foreach ($en as  $value) {
                    echo "<td>$value</td>";
                }
            ?>

                <td>
                    <a href="#" data-role="update" data-id="<?php $id = $en[0];
                                                            echo $id; ?>"><button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#Mod"><i class="fa fa-pencil"></i></button></a>

                </td>
                <td>
                    <a href="#" data-role="delete" data-id="<?php $id = $en[0];
                                                            echo $id; ?>"><button type="button" class="btn btn-danger btn-lg"><i class="fa fa-trash-o"></i></button></a>

                </td>
            <?php
            }
            echo " </tr></tbody></table>";

            ?>
            <button id="print-button" class="btn btn-default">Imprimer</button>

            <div class="modal fade" id="Mod" role="dialog">
                <div class="modal-dialog">
                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Update Supervisors</h4>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="exampleInputPassword1">First Name </label>
                                <input type="text" class="form-control" id="nom" name="nn" id="exampleInputPassword1">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Last Name </label>
                                <input type="text" class="form-control" id="prenom" name="pp" id="exampleInputPassword1">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Email </label>
                                <input type="text" class="form-control" id="adress" name="add" id="exampleInputPassword1">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">domaine </label>
                                <input type="text" class="form-control" id="domaine" name="dd" id="exampleInputPassword1">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Phone Number </label>
                                <input type="text" class="form-control" id="tel" name="tt" id="exampleInputPassword1">
                            </div>

                            <div class="form-group">
                                <label for="sel1">Inters</label>
                                <select class="form-control" id="sell1">
                                    <option></option>
                                    <?php foreach ($idstags as $value) {
                                        echo "<option value='" . $value['idstag'] . "'>" . $value['nom'] . "</option>";
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