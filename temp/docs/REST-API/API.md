# API

- Main Route
    - api/

## 現状

- 例外処理やエラー制御を行いたい

### Tokenを取得する

- Route
    - get/token/temp_token?=文字列
- リクエスト先
    - [http://localhost:8888/github/develovation-project/develovation/api/get/token/?temp_token=303c78436f302e67cea27e82cdaeffb81453306df931eb618665866130e2b62a5e328cecc53ce](http://localhost:8888/github/develovation-project/develovation/api/get/token/?temp_token=303c78436f302e67cea27e82cdaeffb81453306df931eb618665866130e2b62a5e328cecc53ce)

#### レスポンス例

```json
{"token":"トークン文字列"}
```

### IPアドレスを取得する

- Route
    - get/ip/
- リクエスト先
    - [http://localhost:8888/github/develovation-project/develovation/api/get/ip/](http://localhost:8888/github/develovation-project/develovation/api/get/ip/)

#### レスポンス例

```json
{"ip":"IPアドレス"}
```