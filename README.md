既に保守してません、dockerおすすめ。

# Lastead
[Laravel](https://laravel.com/) と [Homestead](https://github.com/laravel/homestead) の環境を簡単に整えます。

## Commands
* `lastead new <project_name>`  
project_nameという新規Laravelプロジェクトを作成する。

* `lastead adapt <project_name>`  
既存のLaravelプロジェクトに対してHomesteadを適応します。

## Install
```
composer global require "kra8/lastead"
```

インストールしたら、`$HOME/.composer/vendor/bin`にパスを通してください。

## Uninstall
```
composer global remove "kra8/lastead"
```

## Require
LaravelとHomesteadを動かすには、以下のソフトウェアをインストールしておく必要があります。

* PHP 7.1.3 以上
* VirtualBox 5.2.0 以上
* Vagrant 2.0.1 以上

## License
[MIT licence](https://github.com/kra8/Lastead/blob/master/LICENSE)
