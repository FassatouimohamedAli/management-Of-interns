<?php
require_once "bd.php";
require_once "CRUD_stagiaire.php";
session_start();
$crud = new CRUD_stagiaire();

if (isset($_SESSION['admin_id'])) {
    if (isset($_POST['type']) && $_POST['type'] === 'all') {


        $stags = $crud->findAll();
        foreach ($stags as  $stag) {
            echo "<tr>";
            foreach ($stag as $key => $value) {
                if ($key == 'etat')
                    echo "<td id=#etat_ class=etat_field>$value</td>";
                else  echo "<td>$value</td>";
            }
?>

            <td>
                <a href="#" data-role="update" data-id="<?php $id = $stag[0];
                                                        echo $id; ?>"><button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal"><i class="fa fa-pencil"></i></button></a>

            </td>
        <?php
        }
        echo " </tr></tbody></table>";
    } else {
        $id = htmlspecialchars($_POST['query']);
        $rech = $crud->find($id);
        if (!empty($rech)) {
            echo "<tr>";
            foreach ($rech as $key => $value) {
                if ($key == 'etat')
                    echo "<td id=#etat_ class=etat_field>$value</td>";
                else  echo "<td>$value</td>";
            }
        ?>

            <td>
                <a href="#" data-role="update" data-id="<?php echo $_POST['query']; ?>"><button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal"><i class="fa fa-pencil"></i></button></a>

            </td>
<?php

            echo " </tr></tbody></table>";
        } else {
            echo "0";
        }
    }
}

?>