<img src="https://static.germania-kg.com/logos/ga-logo-2016-web.svgz" width="250px">

------


# Germania KG · Token

**Simple tokens**



## Installation

```bash
$ composer install germania-kg/token
```



## Interface TokenInterface

```php
interface TokenInterface
{
    // Alias for "getContent"
    public function __toString();

    // Returns the token "text".
  	public function getContent() : string;

    // Returns the lifetime in seconds.
    public function getLifeTime() : int;
}
```



## Class AuthToken 

```php
<?php
use Germania\Token\Token;

// Pass token string and TTL
$auth_token = new Token( "somerandomstring", 3600);

echo $auth_token;                // "somerandomstring"
echo $auth_token->__toString();  // "somerandomstring"  
echo $auth_token->getContent();  // "somerandomstring"  
echo $auth_token->getLifeTime(); // 3600
```



## Testing

```bash
$ composer phpunit
```


