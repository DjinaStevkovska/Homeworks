<?php
function getTitle($page, $titles) {
    if ($page === "") {
        return "Home page";
    } else {
        foreach ($titles as $key => $value) {
            if($page === $key) {
                return $value;
            }
        }
    }
}

$navItems = [
    "index.php?page=index" => "Home",
    "index.php?page=about" => "About",
    "index.php?page=contact" => "Contact",
    "index.php?page=login" => "Login"
];

$titles = [
    "index" => "Home page",
    "about" => "About page",
    "contact" => "Contact page",
    "login" => "Login page"
];