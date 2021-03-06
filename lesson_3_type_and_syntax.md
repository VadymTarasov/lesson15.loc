# PHP Основы
## Типы данных и синтаксис языка

## Базовый синтаксис языка

 Переменные в пхп люьявляются через специальный знак '$'

```php
<?php

$myIntVar = 1;
$my_string_var = 'string';
```
У именования переменных есть некоторые правила. иже приведен пример верного и неверное именнования переменных

```php 
<?php
$var = 'Боб';
$Var = 'Джо';
echo "$var, $Var";      // выведет "Боб, Джо"

$4site = 'ещё нет';     // неверно; начинается с цифры
$_4site = 'ещё нет';    // верно; начинается с символа подчёркивания
$täyte = 'mansikka';    // верно; 'ä' это (Расширенный) ASCII 228.

```

> Большинстве языков программирования лператор **=** это оператор присваивания, а **==** оператор сравнения

Так же есть основные рекомендации по написанию кода. Называются PSR(PHP Standard Recomendation)
подробнее про них можно почитать [тут](https://www.php-fig.org/psr/)

При написании кода мы будет стараться придерживаться тснадартов PSR1, PSR4 и PSR12

Приоритет оператора определяет, насколько "тесно" он связывает между собой два выражения. Например, выражение 1 + 5 * 3 вычисляется как 16, а не 18, поскольку оператор умножения ("*") имеет более высокий приоритет, чем оператор сложения ("+"). Круглые скобки могут использоваться для принудительного указания порядка выполнения операторов. Например, выражение (1 + 5) * 3 вычисляется как 18.

Если операторы имеют равный приоритет, то будут ли они выполняться справа налево или слева направо определяется их ассоциативностью. К примеру, "-" является лево-ассоциативным оператором. Следовательно 1 - 2 - 3 сгруппируется как (1 - 2) - 3 и пересчитается в -4. С другой стороны "=" - право-ассоциативный оператор, так что $a = $b = $c сгруппируется как $a = ($b = $c).

Неассоциативные операторы с одинаковым приоритетом не могут использоваться совместно. К примеру 1 < 2 > 1 не будет работать в PHP. Выражение 1 <= 1 == 1, с другой стороны, будет, поскольку == имеет более низкий приоритет чем <=.

Ассоциативность имеет смысл только для двоичных (и тернарных) операторов. Унарные операторы являются префиксными или постфиксными, поэтому это понятие не применимо. Например, !!$a можно сгруппировать только как !(!$a).

Использование скобок, кроме случаев когда они строго необходимы, может улучшить читаемость кода, группируя явно, а не полагаясь на приоритеты и ассоциативность.

## Типы данных

PHP поддерживает десять простых типов.

Четыре скалярных типа:

* bool
* int
* float (число с плавающей точкой, также известное как double)
* string

Четыре смешанных типа:

* array
* object
* callable
* iterable

И, наконец, два специальных типа:

* resource
* NULL

Вы также можете найти несколько упоминаний типа двойной точности (double). Рассматривайте его как число с плавающей точкой, два имени существуют только по историческим причинам.

Как правило, программист не устанавливает тип переменной; обычно это делает PHP во время выполнения программы в зависимости от контекста, в котором используется переменная.


### Числа

Числа это более обобщенный тип, но в php числа делятся на целые числа и числа с плавающей точкой

Целые числа - представляют  тип **int**

```php 

$myInt = 12 // это целое число типа  int
$myAnotherInt = -33 // Это тоже целое число типа int

```
Числа с плавающей точкой  - пре дставляют тип **float** или **double**

> Есть некоторые проблемы с округлением при операциях над числами с плавающей точкой подробнее про это можно посмотреть тут [КАК РАБОТАЮТ ЧИСЛА С ПЛАВАЮЩЕЙ ТОЧКОЙ | ОСНОВЫ ПРОГРАММИРОВАНИЯ
](https://www.youtube.com/watch?v=U0U8Ddx4TgE&t=1s)

```php
 
$myFloat = 1.2 // это число с плавающей точкой
$myAnotherFloat = -3.5 // это тоже число с плавающей точкой

```
#### Операции над числами

Над числами мы можем делать простые математические операции
- Сложение 
- Вычитание
- Деление 
- Умножение

```php

$a = 10;
$b = 2;

echo $a + $b; // 12
echo $a - $b; // 8
echo $a * $b; // 20
echo $a / $b; // 5 

```
> Деление на ноль не вызывает ошибки

### Булевые типы

Это простейший тип. bool выражает истинность значения. Он может быть либо **true**, либо **false**.

Для указания bool, используйте константы true или false. Они обе регистронезависимы.

```php 

$myBool = true;
$myAnotherBool = True;// тоже правильно

```
Обычно, некоторый оператор возвращает значение типа bool, которое потом передаётся управляющей конструкции.

```php 

$a = 10;
$a == 10; // true

```

### Условия 
Конструкция if является одной из наиболее важных во многих языках программирования, в том числе и PHP. Она предоставляет возможность условного выполнения фрагментов кода. Структура if реализована в PHP по аналогии с языком C:

>if (выражение)
> инструкция

Выражение вычисляется в булево значение. Если выражение принимает значение true, PHP выполнит инструкцию, а если оно принимает значение false - проигнорирует.

Следующий пример выведет a больше b, если значение переменной $a больше, чем $b:

```php 
$a = 5;
$b = 3;

if ($a > $b) {
    echo "a больше b";
}
```
> Несмотря на то что далее приведенны код так же будет интерпретирован ЯП верно - мы подобные записи использовать не будет так как это противоречит PSR

 ```php 
 if ($a > $b)  
    echo "a больше b";
 ```

В случае когда нужно опрделеить альтернативное поведение используется конструкция if else 

```php 
$a = 10;
$b = 7;

if ($a < $b) {
    echo "a меньше b";
} else {
    echo "a больше b";
}

```

В случае если выражение в () истино(**true**)  то выполняется блок кода который идет перед else
Иначе(если выражение вернуло **false**) выполняется блок окда который идет после else

В случае когда нам нужно определить более двух вариантов поведения, мы должны использовать конструкцию if elseif else

```php 
$a = 10;

if ($a > 10) {
    echo "а больше 10";
} else if ($a > 5) {
    echo "а больше 5";
} else {
    еcho "а не больше 10 и не больще 5";
}

```
В данном случае интерпритатор ищет каое из выражений в скодкас вернет **true** до первого совпадения
далее выполняется блок кода и далееусловия не проверяются.
Если же все выражение возвращают false то ни один блок кода не выполняется кроме else  если таковой присуствовал в конструкции 

#### Строгое и не строгое сравнение

В php существует такое понятие как строгое и не строгое сравнениею При не строгом сравнение
php пытается привести выражение справа к типы выражение слеваб а при строгом сравнении 
php этого делать не будет и в сравнении будет учитываться так же и тип

Ниже приведено два примера сравнени

```phpregexp

$a = 1; // int
$b ='1'; //string

$a == $b // true так как пхп приведет '1' к 1
$a === $b // false так как тип int не равен string

```

#### Switch Case

Оператор switch похож на ряд операторов IF с одинаковым условием. Во многих случаях вам может понадобиться сравнивать одну и ту же переменную (или выражение) с множеством различных значений и выполнять различные участки кода в зависимости от того, какое значение принимает эта переменная (или выражение). Это именно тот случай, для которого удобен оператор switch.

> Заметьте, что конструкция switch/case использует нестрогое сравнение (==).

Следующие два примера иллюстрируют два различных способа написать то же самое. Один использует ряд операторов if и elseif, а другой - оператор switch:

```php 
if ($i == 0) {
    echo "i равно 0";
} elseif ($i == 1) {
    echo "i равно 1";
} elseif ($i == 2) {
    echo "i равно 2";
}

switch ($i) {
    case 0:
        echo "i равно 0";
        break;
    case 1:
        echo "i равно 1";
        break;
    case 2:
        echo "i равно 2";
        break;
}
```
Оператор switch допускает сравнение с типом string

```php
switch ($i) {
    case "яблоко":
        echo "i это яблоко";
        break;
    case "шоколадка":
        echo "i это шоколадка";
        break;
    case "пирог":
        echo "i это пирог";
        break;
}
```
Важно понять, как оператор switch выполняется, чтобы избежать ошибок. Оператор switch исполняет строчка за строчкой (на самом деле выражение за выражением). В начале никакой код не исполняется. Только в случае нахождения оператора case, значение которого совпадает со значением выражения в операторе switch, PHP начинает исполнять операторы. PHP продолжает исполнять операторы до конца блока switch либо до тех пор, пока не встретит оператор break. Если вы не напишете оператор break в конце секции case, PHP будет продолжать исполнять команды следующей секции case. Например :

```php 
switch ($i) {
    case 0:
        echo "i равно 0";
    case 1:
        echo "i равно 1";
    case 2:
        echo "i равно 2";
}
```
В этом примере, если $i равно 0, то PHP исполнит все операторы echo! Если $i равно 1, PHP исполнит два последних оператора echo. Вы получите ожидаемое поведение оператора ('i равно 2' будет отображено) только, если $i будет равно 2. Таким образом, важно не забывать об операторах break (даже если вы, возможно, хотите избежать его использования по назначению при определённых обстоятельствах).

В операторе switch выражение вычисляется один раз и этот результат сравнивается с каждым оператором case. В выражении elseif, выражение вычисляется снова. Если ваше условие более сложное, чем простое сравнение и/или находится в цикле, конструкция switch может работать быстрее.

Список операторов для исполнения в секции case также может быть пустым, что просто передаёт управление списку операторов в следующей секции case.

```php
switch ($i) {
    case 0:
    case 1:
    case 2:
        echo "i меньше чем 3, но неотрицательный";
        break;
    case 3:
        echo "i равно 3";
}
```

Специальный вид конструкции case - default. Сюда управление попадает тогда, когда не сработал ни один из других операторов case. Например:

```php 
switch ($i) {
    case 0:
        echo "i равно 0";
        break;
    case 1:
        echo "i равно 1";
        break;
    case 2:
        echo "i равно 2";
        break;
    default:
       echo "i не равно 0, 1 или 2";
}
```

### Доп материал по GIT (Самостоятельно)

[Git и GitHub Курс Для Новичков](https://www.youtube.com/watch?v=zZBiln_2FhM)
[LearnGitBranching](https://learngitbranching.js.org/?locale=ru_RU)

## Домашнее Задание

1. Дано три числа(числа выбираете сами и записываете их в переменные) Нужно с помощью условия
 - вывести большее из них
 - меньшее из них
 - если числа равны о вывести первое из них
2. Используя функцию [rand()](https://www.php.net/manual/ru/function.rand.php) Записать в переменную число Далее если число четное - вывести 'odd' если нет 'even' Для решения задачи используйте оператор [%](https://www.php.net/manual/ru/language.operators.arithmetic.php)
3. Используя функцию rand() и switch case вывести
   - Если число равно 1, 2, 3 ,4, 5 - Odd
   - Если число равно 10, 20, 30, 40, 50 - Even
   - Иначе - Ooops