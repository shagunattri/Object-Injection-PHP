## PHP Object Injection 💉

The vulnerability occurs when user-supplied input is not properly sanitized before being passed to the unserialize() PHP function. Since PHP allows object serialization, attackers could pass ad-hoc serialized strings to a vulnerable unserialize() call, resulting in an arbitrary PHP object(s) injection into the application scope.


[PHP Magic Methods](https://www.php.net/manual/en/language.oop5.magic.php)