<nav class="navbar navbar-expand-md bg-secondary navbar-dark fixed-top shadow">
    <a class="navbar-brand" href="#">LOGO </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="nav navbar-nav ml-auto">

        <?php foreach($navItems as $key => $value) : ?>

                <?php if (isset($_COOKIE["username"]) && $value === "Login") :?>
        
                    <li class="nav-item">
                        <div class="dropdown show">
                            <a class="nav-link dropdown-toggle" role="button" data-toggle="dropdown" id="userData" href=""><i class="fas fa-user"></i> <?= $_COOKIE["username"]; ?></a>
                            <div class="dropdown-menu" aria-labelledby="userData">
                                <a class="dropdown-item" href="#">Profile</a>
                                <a class="dropdown-item" name="logout" href="index.php?page=login">Logout</a>
                            </div>
                        </div>
                    </li>
                
                <?php else : ?>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="<?= $key ?>"> <?= $value ?></a>
                    </li>

            <?php endif; ?>
            
        <?php endforeach; ?>
        
    </ul>
    </div>
</nav>

