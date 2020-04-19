# Phinder

## About This

[Phinder](https://github.com/sider/phinder)はSider内で利用できる、
OSSなPHPのリファクタリングに特化した静的解析ツール。

- [【Sider公式】Phinderドキュメント](https://help.sider.review/tools/php/phinder)

### How to Use

#### Composer

**In Project**

```
composer require --dev sider/phinder
```

**In Global**

```
composer global require sider/phinder
```

#### Quick Start

```shell
phinder init # Create Empty `phinder.yml` File.
```

#### Run

```
phinder find # Run Analyze
```

### Role

#### Pattern

- `_`：任意で不変な１つの引数
    - `foo(_)`は１つの引数を必要とするfoo関数
- `...`：任意で可変な複数の引数
    - `bar(_, _, ...)`は２つ以上の引数を必要とするbar関数

#### Sample1

`var_dump`を利用している時、
`Do not use var_dump.`を出力するサンプル。

```yml
- id: sample                    # required, string

  pattern: var_dump(...)        # required, string or list of string

  message: Do not use var_dump. # required, string

  test:                         # optional

    fail:                       # optional, string or list of string
      - var_dump($var);

    pass:                       # optional, string or list of string
      - echo $var;
```

- `id`: 任意の識別子
- `pattern`: パターンを記述する
- `message`: パターンにマッチした際に表示するメッセージ
- `test.fail`: 避けるべき例
- `test.pass`: 修正すべき例

#### Sample2

`in_array`で第三引数を記述していない時、
`...`を出力するサンプル。

```yml
- id: sample.in_array_without_3rd_param
  pattern: in_array(_, _)
  message: ...
  test:
    fail:
      - in_array(1, $arr)
      - in_array(2, $arr)
    pass:
      - in_array(3, $arr, true)
      - in_array(4, $arr, false)
```