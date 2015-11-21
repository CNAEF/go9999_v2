# go9999_v2
使用Yii重构的网站系统

## 安装说明

数据库结构文件 /database.sql

后台地址 /admin

账号 admin 密码 123456

请使 uploads 目录 protected/runtime 目录可写入

## 目录结构说明

assets yii自动生成的资源文件和ace后台用到的资源文件

css 前后台开发的css文件在这里，按照规则命名文件会自动加载 module/styles.css module/controller/styles.css module/controller/action/styles.css

framework yii框架在此，有轻微修改，升级请不要直接覆盖

js  前后台开发的js文件在这里，按照规则命名文件会自动加载  module/scripts.js module/controller/scripts.js module/controller/action/scripts.js

images 前后台开发的图片文件，请按照规则存放

protected 项目目录

uploads 预留上传目录，请按照规则存放

## todolist

这是一个需要很多人来维护的项目，所以，保持可维护性非常重要。

完善文档

规范命名

添加注释

调整目录结构，要将项目目录作为二级目录，一级目录下放一些配置文件