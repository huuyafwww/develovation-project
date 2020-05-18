# ブラウザ上で開発を行う分散プラットフォーム

## Programming language & Development stack

- PHP
- MySQL
- HTML
- CSS
- Javascript（jQuery）

### Framework & Library

- PHPフレームワーク（開発中）
    - Routing
    - Model
    - View
    - Controller
    - Helper
    - OR Mapperは3rd Party製の[illuminate/database](https://github.com/illuminate/database)を利用
    - エラーログやアクセスログの記録
        - パーサーも開発する
- PHPテンプレートエンジン（開発中）
- HTTPリクエストヘッダーのバリデーションモジュール（開発中）
- 管理画面のテンプレートはMITライセンスの[Stisla](https://getstisla.com/)を利用
- 環境変数の管理はBSDライセンスの[vlucas/phpdotenv](https://github.com/vlucas/phpdotenv)を利用

### Directory structure

🙆‍♂️ = Allow from all
🙅‍♂️ = deny from all


#### Now

```
.
├── app 🙅‍♂️
│   ├── api
│   ├── assets 🙆‍♂️
│   ├── components
│   ├── config
│   ├── controllers
│   ├── core
│   │    └── init
│   │       ├── class
│   │       ├── config
│   │       ├── helper
│   │       ├── lib
│   │       ├── routes
│   │       ├── __init.php
│   │       └── __init_functions.php
│   ├── includes
│   ├── models
│   ├── templates
│   └── views
└── log 🙅‍♂️
```

#### Future

- ```assets```をルート直下に
- ```core```をルート直下に
- ```core/init```を```bootstrap```に名称変更

```
.
├── app 🙅‍♂️
│   ├── api
│   ├── components
│   ├── config
│   ├── controllers
│   ├── includes
│   ├── models
│   ├── templates
│   └── views
└── assets 🙆‍♂️
└── core 🙅‍♂️
│   ├── bootstrap
│   │   ├── __init.php
│   │   └── __init_functions.php
│   ├── class
│   ├── config
│   ├── helper
│   ├── lib
│   └── routes
└── log 🙅‍♂️
```