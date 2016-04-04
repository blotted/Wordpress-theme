<?php

header('Content-Type: text/html; charset=UTF-8');

$arr = [
    [
        'text' => 'Some Text',
        'cells' => '2,5,8',
        'align' => 'center',
        'valign' => 'top',
        'color' => '#FF0000',
        'bgcolor' => '#0000FF',
    ],
    [
         'text' => 'Test text',
         'cells' => '9',
         'align' => 'left',
         'valign' => 'center',
         'color' => '#000000',
         'bgcolor' => '#964B00',
    ],
   /* [
        'text' => 'Text Text Text Text',
        'cells' => '16,26,36,46',
        'align' => 'center',
        'valign' => 'bottom',
        'color' => 'white',
        'bgcolor' => 'black',
    ],
    [
        'text' => 'Some Text',
        'cells' => '58,59,60,68,69,70,78,79,80',
        'align' => 'center',
        'valign' => 'center',
        'color' => 'blue',
        'bgcolor' => 'grey',
    ],*/

];


/*
 * Функция динамически отрисовует таблицу, добавлены 2 параметра $rows, $cols.
 * Если их не задать, то по умолчанию таблица отрисовуется 3x3.
 */

function drawTable(array $params, $rows=3, $cols=3){

    $rows = abs((int) $rows);
    $cols = abs((int) $cols);

    if ($rows != $cols) {
        echo "Введен неверный формат таблицы. Таблица должна иметь вид: 3х3, 4х4 и т.д";
    }
    else{

    // отрисовка таблицы в массив
    $nums = $rows * $cols;
    $hh = 1;
    $table = [];
    for ($m = 1; $m<=$nums; $m += $cols) {

        for ($f=0; $f < $cols; $f++) {
            $sum = $m + $f;
            $table[$hh] = "<td>$sum</td>";
            $hh++;
        }
    }

    //разбор параметров и вычисление rowspan, colspan
    foreach($params as $item)
    {
        $text = $item['text'];
        $align = $item['align'];
        $valign = $item['valign'];
        $color = $item['color'];
        $bgcolor = $item['bgcolor'];

        $style = "background: $bgcolor; vertical-align:$valign; text-align:$align; color: $color";
        $numbers = explode(",", $item['cells']);

        $row1 = 0;
        $col1 = 0;

        if( $numbers[0]>0 && $numbers[0]< $cols+1 ) { $row1 = 1; $col1 = $numbers[0]; }

        for($g=1; $g<=$cols; $g++) {
            if ($numbers[0] > $cols * $g && $numbers[0] < $cols * ($g + 1) + 1) {
                $row1 = ($g + 1);
                $col1 = $numbers[0] - $cols * $g;
            }
        }

        $row2 = 0;
        $col2 = 0;
        for( $i=1; $i<count($numbers); $i++)
        {

            if( $numbers[$i]>0 && $numbers[$i]<$cols+1 ) { $row2 = 1; $col2= $numbers[$i]; }
            for($z=1; $z<=$cols; $z++) {
                if ($numbers[$i] > $cols * $z && $numbers[$i] < $cols * ($z + 1) + 1) {
                    $row2 = ($z + 1);
                    $col2 = $numbers[$i] - $cols * $z;
                }
            }

            $table[$numbers[$i]] = "";
        }

        $row = $row2-$row1+1;
        $col = $col2-$col1+1;
        $table[$numbers[0]]= "<td colspan='$col' rowspan='$row' style='$style'>$text</td>";
    }


    $html = "<html>";
    $html .= "<style type='text/css'>
                table{table-layout: fixed; width: 100%; height: 100%;}
                td{border: 1px solid black; overflow-x: hidden;}
            </style>";
    $html .= "<table>";

    $cnt = 1;
    for($j=1;$j<=$rows;$j++)
    {
        $html .= "<tr>";
        for($k=1;$k<=$cols;$k++)
        {
            $html .= $table[$cnt];
            $cnt++;
        }
        $html .= "</tr>";
    }
    $html .= "</table>";

    return $html;
    }
}




echo drawTable($arr);