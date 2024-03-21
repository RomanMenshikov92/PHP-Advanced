<?php

// Интерфейс для поведения полета
interface FlyBehavior {
    public function fly();
}

// Реализация полета для обычной утки и красноголовой утки
class FlyWithWings implements FlyBehavior {
    public function fly() {
        echo "I'm flying with wings!\n";
    }
}

// Реализация полета для резиновой утки
class FlyNoWay implements FlyBehavior {
    public function fly() {
        echo "I can't fly!\n";
    }
}

// Интерфейс для поведения кряканья
interface QuackBehavior {
    public function quack();
}

// Реализация кряканья для обычной утки и красноголовой утки
class Quack implements QuackBehavior {
    public function quack() {
        echo "Quack! Quack!\n";
    }
}

// Реализация кряканья для резиновой утки
class Squeak implements QuackBehavior {
    public function quack() {
        echo "Squeak! Squeak!\n";
    }
}

// Интерфейс для поведения отображения
interface DisplayBehavior {
    public function display();
}

// Реализация отображения для обычной утки и красноголовой утки
class DisplayNormal implements DisplayBehavior {
    public function display() {
        echo "I'm a normal duck.\n";
    }
}

// Базовый класс Duck
abstract class Duck {
    protected $flyBehavior;
    protected $quackBehavior;
    protected $displayBehavior;
    
    public function setFlyBehavior(FlyBehavior $flyBehavior) {
        $this->flyBehavior = $flyBehavior;
    }

    public function setQuackBehavior(QuackBehavior $quackBehavior) {
        $this->quackBehavior = $quackBehavior;
    }

    public function setDisplayBehavior(DisplayBehavior $displayBehavior) {
        $this->displayBehavior = $displayBehavior;
    }

    public function performFly() {
        $this->flyBehavior->fly();
    }

    public function performQuack() {
        $this->quackBehavior->quack();
    }

    public function display() {
        $this->displayBehavior->display();
    }

    abstract public function swim();
}

// класс - обычная утка
class MallardDuck extends Duck {
    public function __construct() {
        $this->setFlyBehavior(new FlyWithWings());
        $this->setQuackBehavior(new Quack());
        $this->setDisplayBehavior(new DisplayNormal());
    }

    public function swim() {
        echo "All ducks float, even decoys!\n";
    }
}
// класс - красноголовая утка
class RedheadDuck extends Duck {
    public function __construct() {
        $this->setFlyBehavior(new FlyWithWings());
        $this->setQuackBehavior(new Quack());
        $this->setDisplayBehavior(new DisplayNormal());
    }

    public function swim() {
        echo "All ducks float, even decoys!\n";
    }
}
// класс - резиновая уточка
class RubberDuck extends Duck {
    public function __construct() {
        $this->setFlyBehavior(new FlyNoWay());
        $this->setQuackBehavior(new Squeak());
        $this->setDisplayBehavior(new DisplayNormal());
    }

    public function swim() {
        echo "Rubber ducks float in the bath!\n";
    }
}
// класс - деревянная утка
class DecoyDuck extends Duck {
    public function __construct() {
        $this->setFlyBehavior(new FlyNoWay());
        $this->setQuackBehavior(new Squeak());
        $this->setDisplayBehavior(new DisplayNormal());
    }

    public function swim() {
        echo "Decoy ducks float silently.\n";
    }
}

// использование
$mallardDuck = new MallardDuck();
$redheadDuck = new RedheadDuck();
$rubberDuck = new RubberDuck();
$decoyDuck = new DecoyDuck();

$mallardDuck->performFly();
$mallardDuck->performQuack();
$mallardDuck->display();
$mallardDuck->swim();

$redheadDuck->performFly();
$redheadDuck->performQuack();
$redheadDuck->display();
$redheadDuck->swim();

$rubberDuck->performFly();
$rubberDuck->performQuack();
$rubberDuck->display();
$rubberDuck->swim();

$decoyDuck->performFly();
$decoyDuck->performQuack();
$decoyDuck->display();
$decoyDuck->swim();

?>