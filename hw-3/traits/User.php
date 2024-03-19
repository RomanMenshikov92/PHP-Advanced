<?php

require_once 'traits/AppUserAuthentication.php';
require_once 'traits/MobileUserAuthentication.php';

class User {
    use AppUserAuthentication, MobileUserAuthentication {
        AppUserAuthentication::authenticate insteadof MobileUserAuthentication;
        MobileUserAuthentication::authenticate as authenticateMobile;
    }

    public function authenticateUser(string $username, string $password): void {
        if ($username === $this->appUsername && $password === $this->appPassword) {
            $this->authenticate($username, $password);
        } elseif ($username === $this->mobileUsername && $password === $this->mobilePassword) {
            $this->authenticateMobile($username, $password);
        } else {
            echo "Данные пользователя не совпадают ни с приложением, ни с мобильным приложением." . PHP_EOL;
        }
    }
}

?>