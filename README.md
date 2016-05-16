# go9999_v2

使用Yii重构的网站系统

## 安装说明

- 数据库结构文件 ```database.sql```
- 后台地址 /admin
- 账号 ```admin``` 密码 ```123456```
- 请使 uploads 目录 public/protected/runtime public/assets 目录可写入

## 目录结构说明

```
.
├── conf
├── database.sql            # 数据库结构文件
├── logs
└── public
    ├── assets              # yii自动生成的资源文件和ace后台用到的资源文件
    │   ├── ace
    │   ├── admin
    │   ├── go9999v0
    │   ├── img
    │   ├── src2
    │   ├── ueMini
    │   └── v2
    ├── css                 # 前后台开发的css文件在这里，按照规则命名文件会自动加载 module/styles.css module/controller/styles.css module/controller/action/styles.css
    ├── framework           # yii框架在此，有轻微修改，升级请不要直接覆盖
    ├── images              # 前后台开发的图片文件，请按照规则存放
    ├── index.php
    ├── js                  # 前后台开发的js文件在这里，按照规则命名文件会自动加载  module/scripts.js module/controller/scripts.js module/controller/action/scripts.js
    ├── protected           # 项目目录
    │   ├── components
    │   ├── config
    │   ├── controllers
    │   ├── data
    │   ├── extensions
    │   ├── helpers
    │   ├── models
    │   ├── modules
    │   ├── runtime
    │   ├── tests
    │   ├── views
    │   ├── yiic
    │   ├── yiic.bat
    │   └── yiic.php
    └── uploads             # 上传目录，请按照规则存放


```
