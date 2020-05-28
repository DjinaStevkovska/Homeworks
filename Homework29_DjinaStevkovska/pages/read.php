<?php

include "./functions.php";
?>

<main>
    <div class="container mt-3">
        <h2 class="text-center">My Contacts</h2>

        <a href="./index.php?page=create" title="Add Contact">
        <button type="button" class="btn btn-success p-3 m-3 float-right"><i class="fas fa-plus-circle"></i> Add Contact</button>  
        </a>
        <table class="table table-striped table-dark">
            <thead>
                <tr class="h4">
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Relationship</th>
                    <th>Save&nbsp;Info</th>
                    <th>Gender</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($contacts as $contact) : ?>
                <tr>
                    <td><?= $contact[1]; ?></td>
                    <td><?= $contact[2]; ?></td>
                    <td><?= $contact[3]; ?></td>
                    <td><?= $relationship[intval($contact[4])][0]; ?></td>
                    <td><?= $saveinfo[intval($contact[5])][0]; ?></td>
                    <td><?= $gender[intval($contact[6])][0]; ?></td>
                    <td>
                        <a href="./index.php?page=update&contact=<?= $contact[0]; ?>" class="text-warning p-1">
                            <i class="fas fa-user-edit"></i>
                        </a>
                        <a href="./index.php?action=delete=<?= $contact[0];?> " name="delete" class="text-danger p-1">
                            <i class="fas fa-trash"></i>
                        </a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</main>