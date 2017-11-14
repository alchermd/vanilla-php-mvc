<?php

function redirect(string $endpoint)
{
    header("Location: /{$endpoint}");
}