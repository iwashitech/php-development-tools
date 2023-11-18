# DockerのPHPでPHPStanを実行

## URL
http://127.0.0.1:8080/

## コンテナ内でコマンドを実行
```sh
docker compose exec php /bin/bash
vendor/bin/phpstan analyse ./
```

## 参考サイト
- [Dockerを利用してPHP実行環境を構築してみた - RAKUS Developers Blog | ラクス エンジニアブログ](https://tech-blog.rakus.co.jp/entry/20200908/docker#docker-composeyml)
- [Getting Started | PHPStan](https://phpstan.org/user-guide/getting-started)
