<?php

declare(strict_types=1);


function exercise1(string $stringToSplit, array $delimiters): array
{
    /*
    Funkcija turi priimti string'ą, kuris bus skaidomas,
    bei masyvą segmentų, pagal kuriuos bus skaidoma.

    Kvietimas turi atrodyti taip:
    exercise1('Hello_how_are-you doing?', [' ', '-', '_'])
    1.naudociau str_replace();
    2. explode();

    Funkcijos outputas turėtų atrodyti taip:
    ['Hello', 'how', 'are', 'you', 'doing?']
    */
    $stringDelimiters = str_replace($delimiters, ' ', $stringToSplit);


    return explode(' ', $stringDelimiters);
}

//print_r(exercise1('Hello_how_are-you doing?', [' ', '-', '_']));

function exercise2(array $words): array
{
    /*
    Sukategorizuokite žodžius pagal jų pradžios simbolį.
    Funkcija kviečiama:
    exercise2(['hello', 'Hickup', '123', 'computer'])
    Funkcijos outputas:
    [
        'h' => ['hello', 'Hickup'],
    4    '1' => ['123'],
        'c' => ['computer'],
    ]
    */
    $result = [];
    foreach ($words as $word) {
        $firstLatter = strtolower(substr($word, 0, 1));

        $result[$firstLatter][] = $word;
    }

    return $result;
}

//print_r(exercise2(['hello', 'Hickup', '123', 'computer'])) ;
function exercise3(array $words): array
{
    /*
    Išveskite žodžių statistiką.
    Funkcija kviečiama:
    exercise2(['hello', 'you'])
    Funkcijos outputas:
    [
        'hello' => [
            'vowels' => 2,
            'consonants' => 3,
            'length' => 5,
            'starts_with' => h,
            'ends_with' => o,
        ],
        'you' => [
            'vowels' => 3,
            'consonants' => 0,
            'length' => 3,
            'starts_with' => y,
            'ends_with' => u,
        ]
    ]
    */
    $result = [];
    foreach ($words as $word) {
        $firstLatter = strtolower(substr($word, 0, 1));
        $vowelsSum = 0;
        $consonants = 0;
        foreach (str_split($word) as $letter) {
            $vowels = ['a', 'e', 'i', 'o', 'u'];

            if (in_array($letter, $vowels, true)) {
                ++$vowelsSum;
            } else {
                ++$consonants;
            }
        };

        $result[$word] = ['vowels' => $vowelsSum,
            'consonants' => $consonants,
            'length' => strlen($word),
            'starts_with' => $firstLatter,
            'ends_with' => substr($word, -1),];

    }

    return $result;
}

//print_r(exercise3(['hello', 'you']));
function exercise4(): array
{
    /*
    Grąžinkite masyvą, kuris savyje turėtų tik tuos žodžius, kurie arba prasideda, arba baigiasi
    simboliais a, s, b, o
    */
    $emails = [
        'some@email.com',
        'someAemail.com',
        'another@gmail.com',
        'notAreal.email.io',
        'real@gmail.com',
    ];

    $result = [];
    foreach ($emails as $word) {
        $firstLatter = strtolower(substr($word, 0, 1));
        $lastLatter = substr($word, -1);

        $letters = ['a', 's', 'b', 'o'];

        if (in_array($firstLatter, $letters, true) || in_array($lastLatter, $letters, true)) {
            $result[] = $word;
        }

    };

    return $result;
}

//print_r(exercise4());

function exercise4arrayFilter(): array
{
    /*
    Grąžinkite masyvą, kuris savyje turėtų tik tuos žodžius, kurie arba prasideda, arba baigiasi
    simboliais a, s, b, o
    */
    $emails = [
        'some@email.com',
        'someAemail.com',
        'another@gmail.com',
        'notAreal.email.io',
        'real@gmail.com',
    ];




    return array_filter($emails, function (string $word) {

        $firstLatter = strtolower(substr($word, 0, 1));
        $lastLatter = substr($word, -1);

        $letters = ['a', 's', 'b', 'o'];
        $result = [];
        if (in_array($firstLatter, $letters, true) || in_array($lastLatter, $letters, true)) {
            $result[] = $word;
            return $result;
        }
    });
}

print_r(exercise4arrayFilter());