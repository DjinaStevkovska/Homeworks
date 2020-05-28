<?php
include "./functions.php";
?>
<main>
    <div class="container mt-3">
        <div class="col-md-6 offset-md-3">
            <div class="clearfix">
                <h2 class="text-center">Create New Contact</h2>
                <a href="./index.php" class="float-right text-danger p-3 m-3" title="Back">
                <i class="fas fa-chevron-circle-left fa-2x"> Back</i>
                </a>
            </div>


            <form action="" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="name">Contact Name</label>
                    <input type="text" name="name" id="name" class="form-control" placeholder="Enter name" required>
                </div>
                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="text" name="phone" id="phone" class="form-control" placeholder="Enter phone number" required>
                </div>
                <div class="form-group">
                    <label for="email">E-mail</label>
                    <input type="email" name="email" id="email" class="form-control" placeholder="Enter e-mail address" required>
                </div>
                <div class="form-group">
                    <label for="relationship">Realtionship</label>
                    <select name="relationship" id="relationship" class="form-control" required>
                        <?php foreach($relationship as $key => $value) : ?>
                            <option value="<?= $key; ?>" ><?= $value[0]; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" name="image" id="image" class="form-control">
                </div>
                <div class="form-group">
                    <label for="save_info">Save Info</label>
                    <select name="save_info" id="save_info" class="form-control" required>
                        <?php foreach($saveinfo as $key => $value) : ?>
                            <option value="<?= $key; ?>" ><?= $value[0]; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="gender">Gender</label>
                    <select name="gender" id="gender" class="form-control" required>
                        <?php foreach($gender as $key => $value) : ?>
                            <option value="<?= $key; ?>" ><?= $value[0]; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <button type="submit" class="btn btn-outline-success btn-block" name="create">Create Contact</button>
            </form>
        </div>
    </div>
</main>