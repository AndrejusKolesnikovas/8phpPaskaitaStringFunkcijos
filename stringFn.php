<?php

declare(strict_types=1);

$someProducts = [
    '000_product_1  ',
    ' 000_product_2',
    '000_product_3  ',
    '000_product_4',
    '  000_product_5 ',
    '000_product_20
    ',
];

function exercise1(): array
{
    /*
    Išskaidykite $longLine kintamajį į atskirus žodžius. Žodžiai turi grįžti iš funkcijos masyvo formoje.
    Skaidykite per underscore (_)
    */
    $longLine = 'Hello_how_are_you_doing?';

    return explode('_', $longLine);
}

//var_dump(exercise1());

function exercise2(): array
{
    /*
    Grąžinkite masyvą, kuris talpintų tik tuos žodžius, kurie panašūs į emailų adresus
    t.y. turi savyje simbolį @
    */
    $emails = [
        'some@email.com',
        'someAemail.com',
        'another@gmail.com',
        'notAreal.email.com',
        'real@gmail.com',
    ];
    $result = [];
    foreach ($emails as $email) {
        if (str_contains($email, '@')) {
            $result[] = $email;
        }
    }

    return $result;
    //DESTYTOJO SPRENDIMAS SU ARRAY Fn
//    return array_filter(
//        $emails,
//        function(string $address): bool {
//            return str_contains($address, '@');
//        }
//    );
}

//print_r(exercise2());
function exercise3(array $products): int
{
    /*
    Suskaičiuokite ir grąžinkite visų $products masyve esančių eilučių ilgių sumą.
    Naudokite $someProducts masyvą
    */
    $sum = 0;
    foreach ($products as $product => $value) {
        $sum = $sum + strlen($value);
    };

    return $sum;
}

//echo exercise3($someProducts);
function exercise4(array $products): int
{
    /*
    Suskaičiuokite ir grąžinkite visų $products masyve esančių eilučių ilgių sumą, BET
    į sumą neįtraukite tuščių simbolių - ty. tarpų, new line ir pan.
    Naudokite $someProducts masyvą.
    */
    $sum = 0;
    foreach ($products as $product => $value) {
        $sum = $sum + strlen(trim($value));
    };

    return $sum;
}

//echo exercise4($someProducts);
function exercise5(): int
{
    $text = 'The African philosophy of Ubuntu has its roots in the Nguni word for being human.
    The concept emphasises the significance of our community and shared humanity and teaches
    us that "A person is a person through others". Many view the philosphy as a counterweight
    to the culture of individualism in our contemporary world.';

    /*
    Suskaičiuokite kiek balsių yra tekste
    */
    $result = 0;
    foreach (str_split($text) as $letter){
        $vowels=['a','e','i','o','u'];

        if(in_array($letter,$vowels,true)){
            ++$result;
        }
    };
    return $result;
}

//echo exercise5();


