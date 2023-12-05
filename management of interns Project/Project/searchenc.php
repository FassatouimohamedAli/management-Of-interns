<?php
require_once "bd.php";
require_once "CRUD_encadrant.php";
session_start();
$crud = new CRUD_encadrant();

if (isset($_SESSION['admin_id'])) {
    if (isset($_POST['type']) && $_POST['type'] === 'all') {


        $stags = $crud->findAll();

        foreach ($stags as  $stag) {
            echo "<tr>";
            foreach ($stag as $value) {
                echo "<td>$value</td>";
            }
?>
            <td>
                <a href="#" data-role="update" data-id="<?php $id = $stag[0];
                                                        echo $id; ?>"><button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#Modal"><i class="fa fa-pencil"></i></button></a>

            </td>
            <td>
                <a href="#" data-role="delete" data-id="<?php $id = $stag[0];
                                                        echo $id; ?>"><button type="button" class="btn btn-danger btn-lg"><i class="fa fa-trash-o"></i></button></a>

            </td>
        <?php
        }
        echo " </tr></tbody></table>";
    } else {
        $id = htmlspecialchars($_POST['query']);
        $rech = $crud->Recherch($id);
        if (!empty($rech)) {
            echo "<tr>";
            foreach ($rech as $key => $value) {
                echo "<td>$value</td>";
            }
        ?>

            <td>
                <a href="#" data-role="update" data-id="<?php echo $id; ?>"><button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#Modal"><i class="fa fa-pencil"></i></button></a>

            </td>
            <td>
                <a href="#" data-role="delete" data-id="<?php echo $id; ?>"><button type="button" class="btn btn-danger btn-lg"><i class="fa fa-trash-o"></i></button></a>

            </td>
<?php

            echo " </tr></tbody></table>";
        } else {
            echo "<tr><td colspan=9> sujet with ID <strong> $id </strong> Not Exist </td></tr></tbody></table>";
        }
    }
}

?>