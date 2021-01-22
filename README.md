<img src="https://static.germania-kg.com/logos/ga-logo-2016-web.svgz" width="250px">

------


# Germania KG · Token

**Simple tokens**

[![Packagist](https://img.shields.io/packagist/v/germania-kg/token.svg?style=flat)](https://packagist.org/packages/germania-kg/token)
[![PHP version](https://img.shields.io/packagist/php-v/germania-kg/token.svg)](https://packagist.org/packages/germania-kg/token)
[![Build Status](https://img.shields.io/travis/com/GermaniaKG/Token.svg?label=Travis%20CI)](https://travis-ci.com/GermaniaKG/Token)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/GermaniaKG/Token/badges/quality-score.png)](https://scrutinizer-ci.com/g/GermaniaKG/Token/)
[![Code Coverage](https://scrutinizer-ci.com/g/GermaniaKG/Token/badges/coverage.png)](https://scrutinizer-ci.com/g/GermaniaKG/Token/)
[![Build Status](https://scrutinizer-ci.com/g/GermaniaKG/Token/badges/build.png)](https://scrutinizer-ci.com/g/GermaniaKG/Token/)




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


