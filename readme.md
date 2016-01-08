php_chatwork_api
================


[![MIT license](http://img.shields.io/badge/license-MIT-brightgreen.svg)](https://raw.githubusercontent.com/micheleva/php_chatwork_api/master/LICENSE)

Barebone PHP API for Chatwork

## Installation

composer.jsonに以下の記述を加えてください。

```
{
  "require": {
    "micheleva/php_chatwork_api": "*"
  }
}
```

## Feature list

 * Send a message

## Todo

* Everything else


## Basic Usage

```php
$api = new Api("YOUR_API_KEY");
$api->sendMessage("ROOM_ID","Try not. Do, or do not. There is no try.");

```

## References

 * [Chatwork](http://developer.chatwork.com/ja/) Official chatwork documentation (Japanese)