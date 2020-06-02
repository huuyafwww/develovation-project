# ブラウザ上で開発を行う分散プラットフォーム
[![FOSSA Status](https://app.fossa.com/api/projects/git%2Bgithub.com%2Fhuuyafwww%2Fdevelovation-project.svg?type=shield)](https://app.fossa.com/projects/git%2Bgithub.com%2Fhuuyafwww%2Fdevelovation-project?ref=badge_shield)


## Now Developing

### System Backup Page

![システムのバックアップページ](./img/System_Backup_Page.png)

### Login History Page

![ログイン履歴ページ](./img/Login_History_Page.png)

## Programming language & Development stack

- PHP
- MySQL
- HTML
- CSS
- Javascript（jQuery）

### Framework & Library

- PHPフレームワーク（開発完了）
    - Routing
    - Model
    - View
    - Controller
    - Helper
    - OR Mapperは3rd Party製の[illuminate/database](https://github.com/illuminate/database)を利用
    - エラーログやアクセスログの記録
        - パーサーも開発する
- PHPテンプレートエンジン（開発中）
- HTTPリクエストヘッダーのバリデーションモジュール（開発中）
- 管理画面のテンプレートはMITライセンスの[Stisla](https://getstisla.com/)を利用
- 環境変数の管理はMITライセンスの[vlucas/phpdotenv](https://github.com/vlucas/phpdotenv)を利用
- ユーザーエージェントをパースするMITライセンスの[whichbrowser/parser](https://github.com/WhichBrowser/Parser-PHP)を利用

### Directory structure

```
🙆‍♂️ = Allow from all
🙅‍♂️ = Deny from all
```

#### Now

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
└── env 🙅‍♂️
└── log 🙅‍♂️
```


## License
[![FOSSA Status](https://app.fossa.com/api/projects/git%2Bgithub.com%2Fhuuyafwww%2Fdevelovation-project.svg?type=large)](https://app.fossa.com/projects/git%2Bgithub.com%2Fhuuyafwww%2Fdevelovation-project?ref=badge_large)