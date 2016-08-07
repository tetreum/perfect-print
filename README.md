perfect-print
=============

Stop wasting your time using print_r, var_dump and echo functions to debug your code.
Perfect print for PHP debugging is here.

#### Install

    composer require tetreum/perfect-print "dev-master"

---

Example
========

Having

```php
$user = new stdClass();
$user->id = '';
$user->nick = 'luser';
$wrongJson = json_decode('ssdf');
```

> **Normal debug**

```php
echo '<pre>';
print_r($user);
var_dump($wrongJson);
```

> **Perfect print** 

```php
p($user, $wrongJson);
```

Perfect print will automatically add and close `<pre>` tag for better view and also will make a separation space by using `<br>` or `\n` if you are in cli.

¡Test it yourself!

```php
p($obj, 56, false, null, 'sdsf');
```
