<?php

function asset(string $path = null)
{
    if ($path) {
        // Acessando a constante BASE_DIR da classe Config de forma estática
        return Config::BASE_DIR . ($path[0] == "/" ? mb_substr($path, 1) : $path);
    }

    return Config::BASE_DIR;
}

