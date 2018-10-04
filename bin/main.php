#!/usr/bin/php
<?php
/**
 * Created by PhpStorm.
 * User: pymerseme
 * Date: 03.10.18
 * Time: 20:12
 */

    require_once __DIR__ . '/../src/Person.php';
    require_once __DIR__ . '/../src/PhpSerializer.php';
    require_once __DIR__ . '/../src/JsonSerializer.php';

    $singleLine = "--------------------------------------------------" . PHP_EOL;
    $doubleLine = "==================================================" . PHP_EOL;

    $person = new Person('Alexander', 'Ordin', 28);

    echo $doubleLine, 'PHP Serializer:' . PHP_EOL, $singleLine;

    $personPhpSerialized = new PhpSerializer($person);
    $personPhpSerialized->ToPhpSerialize();
    echo $personPhpSerialized;

    echo $doubleLine, 'JSON Serializer:' . PHP_EOL, $singleLine;

    $personJsonSerialized = new JsonSerializer($person);
    $personJsonSerialized->ToJsonSerialize();
    echo $personJsonSerialized;

    echo $doubleLine;
