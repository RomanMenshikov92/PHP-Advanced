<?php

trait MobileUserAuthentication {
    private string $mobileUsername = 'mobile_user';
    private string $mobilePassword = 'mobile_password';

    public function authenticate(string $username, string $password): void {
        if ($username === $this->mobileUsername && $password === $this->mobilePassword) {
            echo "Пользователь мобильного приложения успешно авторизован!" . PHP_EOL;
        } else {
            echo "Ошибка авторизации пользователя мобильного приложения!" . PHP_EOL;
        }
    }
}

?>