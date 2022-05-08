<?php

echo '<pre>';
$passowrd = 'password';

var_dump([
    'md5' => md5($passowrd),
    'sha1' => sha1($passowrd),
    'crypt' => crypt($passowrd, 'lkjls'),
    'passwor_hash' => password_hash($passowrd, PASSWORD_BCRYPT)
]);

var_dump(password_verify('password', '$2y$10$XATPfuTgWTgYvLoJZ3JZCO11Se.ZLwpSK70ViycaiCyc2cE.neYcS'));
echo '</pre>';