# Lastead
Laravel と Homestead の環境を簡単に整えます。

> 古いバージョンに Lame が存在します。
> これは、他のソフトウェアと名前が競合するため、Lasteadという名前になりました。
> https://github.com/kra8/Lame.git

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

* PHP 7.1.3以上
* VirtualBox
* Vagrant

## License
[MIT licence](https://github.com/kra8/Lastead/blob/master/LICENSE)
