<?php

namespace Object\Employees;

use Object\Interfaces\LeadInterface;
use Object\Interfaces\WebinarSpeakerInterface;

class Director extends AbstractEmployee implements LeadInterface, WebinarSpeakerInterface {
    public function work():mixed {
        return "Обязанность: Управляет компанией и руководит командой.";
    }

    public function lead():string {
        return "Эффективно руководит командой.";
    }

    public function conductWebinar():string {
        return "Проводит вебинары разных тем.";
    }
}

?>
