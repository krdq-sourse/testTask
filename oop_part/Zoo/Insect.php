<?php

abstract class Insect implements Creature
{

    public function getType(): string
    {
        return "Insect";
    }
    public function fly(){

    }
}