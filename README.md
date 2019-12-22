## PHP Object Injection 💉

The vulnerability occurs when user-supplied input is not properly sanitized before being passed to the unserialize() PHP function. Since PHP allows object serialization, attackers could pass ad-hoc serialized strings to a vulnerable unserialize() call, resulting in an arbitrary PHP object(s) injection into the application scope.

## Deserialization 🧇
As PHP allows for object serialization attackers could pass serialised string into in unserialize() call allowing for malicious attack.

This repository explains one such execution of PHP Object Injection.


## References 📃
- [PHP Magic Methods](https://www.php.net/manual/en/language.oop5.magic.php)
- [PHPGGC](https://github.com/ambionics/phpggc)
