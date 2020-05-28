<?php
include_once "./functions.php";
if(isset($_GET["contact"])) {
    $contact = $_GET["contact"];
    echo "<h1>You are editing contact ID: $contact</h1>";
}

$user = [];
foreach($contacts as $key) {
    if($key[0] === $contact) {
        $user[] = $key;
        // var_dump($contacts);
        // var_dump($key[0]);
        // var_dump($contact);
    }
}

?>

<main>
    <div class="container mt-3">
        <div class="col-md-6 offset-md-3">
            <div class="clearfix">
                <h2 class="float-left">Edit Contact Details</h2>
                <a href="./index.php" class="float-right text-danger" title="Go Back">
                <i class="fas fa-chevron-circle-left fa-2x"></i>
                </a>
            </div>
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="update_name">Contact Name</label>
                    <input type="text" name="update_name" id="update_name" class="form-control" value="<?= $user[0][1]; ?>">
                </div>
                <div class="form-group">
                <label for="update_phone">Phone</label>
                    <input type="text" name="update_phone" id="update_phone" class="form-control" value="<?= $user[0][2]; ?>">
                </div>
                <div class="form-group">
                    <label for="update_email">E-mail</label>
                    <input type="email" name="update_email" id="update_email" class="form-control" value="<?= $user[0][3]; ?>">
                </div>
                <div class="form-group">
                    <label for="update_relationship">Realtionship</label>
                    <select name="update_relationship" id="update_relationship" class="form-control" required>
                        <option value="<?= $user[0][4]; ?>" selected hidden><?= $relationship[intval($user[0][4])][0]; ?></option>
                        <?php foreach($relationship as $key => $value) : ?>
                            <option value="<?= $key; ?>" ><?= $value[0]; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="update_save_info">Save Info</label>
                    <select name="update_save_info" id="update_save_info" class="form-control" required>
                    <option value="<?= $user[0][5]; ?>" selected hidden><?= $saveinfo[intval($user[0][5])][0]; ?></option>
                        <?php foreach($saveinfo as $key) : ?>
                            <option value="<?= $key[0]; ?>" ><?= $key[0]; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="update_gender">Gender</label>
                    <select name="update_gender" id="update_gender" class="form-control" required>
                    <option value="<?= $user[0][6]; ?>" selected hidden><?= $gender[intval($user[0][6])][0]; ?></option>
                        <?php foreach($gender as $key) : ?>
                            <option value="<?= $key[0]; ?>" ><?= $key[0]; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <button type="submit" class="btn btn-outline-success btn-block" name="update">Update Contact</button>
            </form>
        </div>
    </div>
</main>