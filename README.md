# docker-for-zan 基于 Dockerfile 与 docker-compose 一键启动 zan 开发环境

## 包含容器

1. etcd_zan
2. mysql_cat
3. mysql_zan
4. php_zan_http
5. php_zan_tcp
6. redis_zan

## 准备工作

```

1. 假设你本机装好了 php 与 composer

2. 克隆本仓库

$ git clone xxx zan_docker

$ cd zan_docker

3. 安装 zan-installer

$ composer global require  "youzan/zan-installer"

4. 配置 composer bin 环境变量
在 ~/.bashrc 中 加入 并 source ~/.bashrc   (或者其他 如: .zshrc)
export PATH="$HOME/.composer/vendor/bin:$PATH"

5. 根据官网文档说明  安装下 http_demo  与 tcp_demo
   本示例安装在本仓库下的 opt/src

6. 配置下 数据库 redis etcd 地址


7. 准备好 php 镜像容器需要的代码  

cd zan_docker/php/src

$ git clone https://github.com/youzan/zan.git zan
$ git clone --recursive --depth=1 https://github.com/kjdev/php-ext-lz4.git php-ext-lz4

下载 hiredis 代码 注意 改名 为 hiredis.tar.gz

https://github.com/redis/hiredis/releases

关于 php_swoole.h  解决  sockets 扩展装好 但是报错的问题
改了一下  自己对比下 原来的 php_swoole.h 

#ifdef SW_SOCKETS
#if PHP_VERSION_ID >= 50301
#include "/usr/src/php/ext/sockets/php_sockets.h"
#define SWOOLE_SOCKETS_SUPPORT
#else
#error "Enable sockets support, require sockets extension."
#endif
#endif

```

## 配置说明

```

因为我在 php.ini 里面加入了 

[zan]
zanphp.RUN_MODE = test
zanphp.DEBUG = true

所以 加载的配置文件在 confit/test 

要修改的文件列表

http-demp

opt/src/http-demo/resource/config/test/connection/mysql.php
opt/src/http-demo/resource/config/test/connection/redis.php
opt/src/http-demo/resource/config/test/registry.php

tcp-demo

opt/src/http-demo/resource/config/test/connection/mysql.php
opt/src/http-demo/resource/config/test/connection/redis.php
opt/src/http-demo/resource/config/test/registry.php

```

## 运行容器

```

确保 准备工作里面中 需要的 代码都下载准备好了

$ cd zan_docker

$ docker-compose build

$ docker-compose up -d
或者
$ docker-compose up     // 可以看到输出日志

```

## 查看效果

http://localhost:2231/index/index/index

http://localhost:2231/index/index/json

http://localhost:2231/index/index/showTpl

// 这个你需要创建个 表 加点数据 看效果  表名称: table
http://localhost:2231/index/index/dbOperation

http://localhost:2231/index/index/redisOperation

http://localhost:2231/index/index/httpRemoteService

http://localhost:2231/index/index/novaRemoteService


## 相关连接

- [zan官网](http://zanphp.io/)
- [zan-src](https://github.com/youzan/zan/)
- [zanphp-src](https://github.com/youzan/zanphp) 
