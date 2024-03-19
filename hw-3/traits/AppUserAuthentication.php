<?php

trait AppUserAuthentication {
    private string $appUsername = 'app_user';
    private string $appPassword = 'app_password';

    public function authenticate(string $username, string $password) {
        if ($username === $this->appUsername && $password === $this->appPassword) {
            echo "Пользователь приложения успешно авторизован!" . PHP_EOL;
        } else {
            echo "Ошибка авторизации пользователя приложения!" . PHP_EOL;
        }
    }
}

?>