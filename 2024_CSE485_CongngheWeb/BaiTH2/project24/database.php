<?php
$users = [
    [
        "username" => "ROSE",
        "password" => password_hash("123", PASSWORD_DEFAULT),
        "name" => "ROSE DONNA",
        "email" => "ROSE@gmail.com",
        "role" => "user"
    ],
    [
        "username" => "janene",
        "password" => password_hash("456", PASSWORD_DEFAULT),
        "name" => "Jane ne",
        "email" => "janene@gmail.com",
        "role" => "admin"
    ],
    // ... add more users
];
$authorization_levels = [
    "user" => [
        "access_profile" => true,
        "edit_profile" => true,
        "access_admin_panel" => false,
    ],
    "admin" => [
        "access_profile" => true,
        "edit_profile" => true,
        "access_admin_panel" => true,
        "manage_users" => true,
    ],
    // ... add more levels
];
?>
