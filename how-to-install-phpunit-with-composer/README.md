# composerでPHPUnitをインストール

## インストール
### 方法１
```sh
composer require --dev phpunit/phpunit ^10
# インストールできたか確認
./vendor/bin/phpunit --version
```
### 方法２
下記composer.jsonを設置
```json
{
    "require-dev": {
        "phpunit/phpunit": "^9.3"
    }
}
```
```sh
composer install
```

## テスト実行
```sh
vendor/bin/phpunit UserTest.php
```

## 参考サイト
- [Docker で phpunit を実行する - Qiita](https://qiita.com/narikkyo/items/f1cf2665efc01e281045)
- [PHPUnit – The PHP Testing Framework](https://phpunit.de/index.html)