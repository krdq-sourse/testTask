<?php

abstract class Animal implements Creature
{

    public function getType(): string
    {
       return "Animal";
    }

    public function moveOnTheGround(): void
    {
        echo "The animal is moving";
    }

    public function makeSound(): void
    {
        echo "some sounds";
    }
}