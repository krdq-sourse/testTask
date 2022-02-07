<?php
echo "<hr>";
echo "<h1>1. Logical Part</h1>";
echo "<h2>1.1 An evil clown</h2>";
echoCodePlace("logical_part\EvilClown.php");
echoTask("The evil clown wants emoticons to have no more than one parenthesis in a row.
Write with PHP a function to help him with this.
");
require_once "./logical_part/EvilClown.php";

echo trimExtraBrackets("privet))))) грустно((");



echo "<h2>1.2 Lucky Ticket</h2>";
echoCodePlace("logical_part\luckyTicket.php");
require_once "./logical_part/luckyTicket.php";
echoTask("The ticket number consists of 6 numbers. The ticket is lucky if the sum of the first three
numbers equals the sum of the next three numbers. Examples of such ticket numbers:
933591, 030300.
Write with PHP a function that returns all lucky numbers.
");
echo "<pre>";
print_r(generateLuckyTicketList());
echo "</pre>";

echo "<hr>";
echo "<h1>2. Arrays Part</h1>";
echo "<h2>2.1 Reverse string</h2>";
echoCodePlace("array_part\strrev.php");
echoTask("Write with PHP a function with functionality like strrev(). You should NOT use standard
PHP functions. You can use loops and other language constructions");
require_once "./array_part/strrev.php";
echo "Исходная строка: 'Hello world!'<br> Превернутая: ";
echo strrev_alternative("Hello world!");

echo "<h2>2.2 Words in text</h2>";
echoCodePlace("array_part\word_count.php");
echoTask('Write with PHP a function getWords(string $text) that returns an associative array,
where word is key, and value is how many times the word is in text. You need to
normalize words (Word and word should be the same key, you can use strlower() PHP
function).
');
require_once "./array_part/word_count.php";
echo "Исходный тест: <i>$text</i><br>  ";
echo "<pre>";
print_r(getCountOfWordsInText($text));
echo "</pre>";

echo "<h2>2.3 Array Sum</h2>";
echoCodePlace("array_part\array_sum.php");
echoTask("Write with PHP a function that will return the sum of all array elements, the array can be
a nested array (nesting can be 2 or more), You should NOT use standard PHP
functions.
");
echo "Исходный массив: <code>[1, 2, 3, 4, [2, 3, 4, [1, 1, 1]]]</code><br> <b>Сумма:</b>  ";
require_once "./array_part/array_sum.php";
$arr = [1, 2, 3, 4, [2, 3, 4, [1, 1, 1]]];
echo array_sum_alternative($arr);

echo "<h2>2.4 Mirror Letters</h2>";
echoCodePlace("array_part\mirror.php");
echoTask("The Wizard decided to make a funny joke. He replaced all letters in words to their mirror
letter (A will be replaced on Z, B on Y, etc.). Write with PHP a function to help the wizard to make this joke real.
");
echo "Исходная строка: Hello world<br> <b>Отзеркаленая:</b>  ";
require_once "./array_part/mirror.php";
echo  magic_mirror("Hello world");


echo "<h2>2.5 Unique words</h2>";
echoCodePlace("array_part\getUniqueWords.php");
echoTask('Write with PHP a function getUniqueWords(string $text) that returns an array, with
words which are used in text only one time. You need to normalize word (Word and
word should be the same for function, you can use strlower() PHP function).
');
echo "Исходный тест: <i>$text</i><br>  ";
require_once "./array_part/getUniqueWords.php";
echo "<pre>";
print_r(getUniqueWords($text));
echo "</pre>";

echo "<hr>";
echo "<h1>3. OOP Part</h1>";
echo "<h2>3.1 Collections</h2>";
echoCodePlace("oop_part\Collections.php");

echo "<img src='oop.png' alt='oop'><br>";
echoTask("Write a PHP class, which represents a Collection of data, where the object is key (See
https://www.php.net/manual/ru/class.splobjectstorage.php for example). Class should
contain these methods:");




require_once "./oop_part/Collection.php";

$collections = new Collection();

$a = new stdClass();
$a->name = "sefef";

$b = new stdClass();
$b->name = "sef";

$c = new stdClass();
$c->name = "123";

$collections->add($a, "some info");
$collections->add($b,);
$collections->add($c);

$collections->remove($b);

echo "<pre>";

print_r($collections->getObjectList());

echo "Последний добавленный елемент <br>";
print_r($collections->current());


if ($collections->check($b))
    echo "Элемент есть в коллекции <br>";
else
    echo "Элемента нет в коллекции <br>";

if ($collections->check($a))
    echo "Элемент есть в коллекции <br>";
else
    echo "Элемента нет в коллекции <br>";

Collection::removeAll($collections);
echo "Вывод всех элементов после removeAll <br>";
print_r($collections->getObjectList());

echo "</pre>";


echo "<h2>3.2 ZOO</h2>";
echo "Смотрите папку " . __DIR__ . "\oop_part\Zoo\ ";

function echoTask($task)
{
    echo "<h3>Здание:</h3>";
    echo "<i>$task</i><br>";
    echo "<h3>Решение:</h3>";
}

function echoCodePlace($place){
    echo "<b>Код:</b> <i>".__DIR__.$place."</i><br>";
}
