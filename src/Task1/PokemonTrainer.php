<?php

namespace BinaryStudioAcademy\Task1;

use ReflectionClass;

class PokemonTrainer
{
    public function pick(Pokemon $pokemon): string
    {
        $pokemonReflect = new ReflectionClass($pokemon);

        return "{$pokemonReflect->getShortName()}: {$pokemon->battleCry()}";
    }
}
