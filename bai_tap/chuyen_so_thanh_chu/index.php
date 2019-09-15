<?php
function convert_number_to_words($number)
{
    $conjunction = '  ';
    $hyphen = ' ';
    $dictionary = array(
        0 => 'zero',
        1 => 'one',
        2 => 'two',
        3 => 'three',
        4 => 'four',
        5 => 'five',
        6 => 'six',
        7 => 'seven',
        8 => 'eight',
        9 => 'nine',
        10 => 'ten',
        11 => 'eleven',
        12 => 'twelve',
        13 => 'thirteen',
        14 => 'forteen',
        15 => 'fifteen',
        16 => 'sixteen',
        17 => 'seventeen',
        18 => 'eighteen',
        19 => 'nineteen',
        20 => 'twenty',
        30 => 'thirty',
        40 => 'forty',
        50 => 'fifty',
        60 => 'sixty',
        70 => 'seventy',
        80 => 'eighty',
        90 => 'ninety',
        100 => 'hundred'
    );
    if (!is_numeric($number)) {
        return false;
    };
    if (($number >= 0 && (int)$number < 0) || (int)$number < 0 - PHP_INT_MAX) {
        return false;
    };
    if ($number < 0) {
        return false;
    };
    $string = $fraction = null;
    switch (true) {
        case $number < 21:
            $string = $dictionary[$number];
            break;
        case $number < 100:
            $tens = ((int)($number / 10)) * 10;
            $units = $number % 10;
            $string = $dictionary[$tens];
            if ($units) {
                $string .= $hyphen . $dictionary[$units];
            }
            break;
        case $number < 1000:
            $hundreds = $number / 100;
            $remainder = $number % 100;
            $string = $dictionary[$hundreds] . ' ' . $dictionary[100];
            if ($remainder) {
                $string .= $conjunction . convert_number_to_words($remainder);
            }
            break;

    }
    if( null !== $fraction && is_numeric( $fraction ) )
    {
        $words = array( );
        foreach( str_split((string) $fraction) as $number )
        {
            $words[] = $dictionary[$number];
        }
        $string .= implode( ' ', $words );
    }

    return $string;
}
$contents .= '555 => ' . convert_number_to_words(555) . '<br />';
$contents .= '0 => ' .convert_number_to_words(0) . '<br />';
$contents .= '55 => ' .convert_number_to_words(55) ;
echo $contents;
?>