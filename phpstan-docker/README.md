# DockerのPHPStanを試してみる

## 確認方法
```sh
docker run -v `pwd`:/app -w /app ghcr.io/phpstan/phpstan analyse sample > phpstan.txt
```

## 参考サイト
- [[静的解析 x PHP]気軽に静的解析をするために"phpstan"と"phan"をDockerで実行する手順をまとめる - Qiita](https://qiita.com/wallkickers/items/dde35cbda8e4d76b610e)

### PHPStan
- [Docker | PHPStan](https://phpstan.org/user-guide/docker)
- [PHPStan導入のすすめ - Hajimari Tech Blog| 株式会社Hajimari](https://tech.hajimari.inc/entry/2022/06/16/120000)