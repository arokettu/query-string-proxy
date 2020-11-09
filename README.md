# Query String Proxy

> ***The package is not recommended if you don't need PHP 7.1.x or PHP 8+ support, just use league packages directly***

> ***The package provides install time compatibility, not runtime compatibility.
> It may be useful for other libraries, not for end projects***

A proxy class to use PHP League's QueryString class both in PHP 7.1 and PHP 8+.

## Installation

```sh
composer require arokettu/query-string-proxy
```

## Usage

Use `Arokettu\Uri\QueryStringProxy` in place of `League\Uri\Components\QueryString`.

Refer to the original docs for more help:

* https://uri.thephpleague.com/components/2.0/query-parser-builder/
* https://uri.thephpleague.com/query-parser/1.0/

## How it works

In PHP 7.1 the package requires `league/uri-query-parser ^1` (requires PHP 7.1, does not support PHP8)
and aliases `QueryStringProxy` to `League\Uri\Parser\QueryString`.

In PHP 7.2+ the package requires `league/uri-components ^2` (requires PHP 7.2, supports PHP8)
and aliases `QueryStringProxy` to `League\Uri\QueryString`.
