<?php
/* 
    Данная функция перетасовывает заданную калоду и выводит её на экран. 
    Массив заданной колоды - $cards
    $temp = $cards.
    $rand = рандомное значение массива $temp
    $result = результирующий массив.
    При каждой итерации функция записывает результат в массив $result и удаляется 1 элемент массива из $temp
    для избежания повторяющихся элементов
*/
class RandCards
{
    public $cards;
    public $result;
    public function Random()
    {
        $cards = $this->cards;
        $temp = $cards; // тестовый массив
        $result = []; // результирующий массив

        for ($i = 0; $i < count($cards); $i++) {
            $rand = array_rand($temp); // id элемента
            array_push($result, $cards[$rand]); // добавляем в результирующий массив
            unset($temp[$rand]); // удаляем из массива $temp значение $rand
        }
        $this->result = $result;

        // echo '<pre>';
        // echo 'Результат перемешивания </br>';
        // print_r($result);
        // echo '</pre>';

    }
}

$cardRandom = new RandCards();
$cardRandom->sizecard;
$cardRandom->cards = [2, 2, 2, 2, 3, 3, 3, 3, 4, 4, 4, 5, 5, 5, 5, 6, 6, 6, 6, 7, 7, 7, 7, 8, 8, 8, 8, 9, 9, 9, 9, 10, 10, 10, 10, 'Jack', 'Jack', 'Jack', 'Jack', 'Queen', 'Queen', 'Queen', 'Queen', 'King', 'King', 'King', 'King', 'Ace', 'Ace', 'Ace', 'Ace'];

echo 'Карт в колоде: ' . count($cardRandom->cards);
echo '<pre>';
echo 'колода </br>';
print_r($cardRandom->cards); // калода
echo '</pre>';

$cardRandom->Random();

echo '<pre>';
echo 'Результат перемешивания </br>';
print_r($cardRandom->result);
echo '</pre>';
