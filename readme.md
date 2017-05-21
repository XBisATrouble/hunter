## 项目概述

* 产品名称：hunter
* 项目代码：hunter

## 运行环境

* Centos 6.5
* Apache 2.4+
* PHP 5.6+
* Mysql 5.6+
* PHP扩展：OpenSSL
* PHP扩展：PDO

## 开发环境部署/安装

本项目代码使用 PHP 框架  [Laravel 5.3](https://github.com/laravel/laravel)  开发。请参照  [Laravel 5.3 文档](https://laravel.com/docs/5.3)  进行配置。

### 基础安装

##### 1. 克隆源代码

克隆源代码到本地：

> git clone https://github.com/XBisATrouble/hunter.git

##### 2. 安装扩展包依赖

> composer install

##### 3. 生成配置文件

> cp .env.example .env

对其中的mysql进行配置

## 扩展包描述

| 扩展包                                      | 一句话描述               | 在本项目中的使用案例         |
| ---------------------------------------- | ------------------- | ------------------ |
| [JellyBool/simple-ueditor](https://github.com/JellyBool/simple-ueditor) | 富文本编辑器              | 用户发帖、回复帖子时使用了此扩展包。 |
| [erusev/parsedown](https://github.com/erusev/parsedown) | 将 Markdown 转换成 HTML | 用户发帖、回复帖子时使用了此扩展包。 |
| [NauxLiu/Laravel-SendCloud](https://github.com/NauxLiu/Laravel-SendCloud) | 第三方的邮件发送服务          | 注册的邮件认证功能          |
| [uxweb/sweet-alert](https://github.com/uxweb/sweet-alert) | 弹窗服务                | 投送简历使用了此扩展包        |

