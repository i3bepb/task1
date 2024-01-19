# Задача №1

Напишите функцию, которая развернёт список.
Последний элемент должен стать первым, а первый - последним. 
$c→next должен содержать $b и так далее...

```php
class test {
    public $next;
}

$a = new test();
$b = new test();
$c = new test();
$a->next = $b;
$b->next = $c;
$c->next = null;

// Пример результата:
function reverse($a) {
// какой-то код
}
$ob1 = reverse($a);
var_dump($ob1);
```