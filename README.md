# docker-for-zan Docker 一键启动 zan 开发环境


## 包含容器

1. etcd_zan
2. mysql_cat
3. mysql_zan
4. php_zan_http
5. php_zan_tcp
6. redis_zan
7. dianping/cat


## 准备工作

### 克隆本仓库

`git clone https://github.com/cjeruen/zan-docker.git zan-docker`

### zan 扩展(相关)

#### zan扩展

`git clone https://github.com/youzan/zan.git zan`

#### php-lz4 扩展
`git clone --recursive --depth=1 https://github.com/kjdev/php-ext-lz4.git php-ext-lz4`

#### hiredis

https://github.com/redis/hiredis/releases

### zanphp

#### 安装 zanphp-installer

composer global require  "youzan/zan-installer"

#### 配置环境变量 (可选 但是建议配置)

```
export PATH="$HOME/.composer/vendor/bin:$PATH"
```

在 ~/.bashrc 中 加入

(或者其他 如: .zshrc)

source ~/.bashrc

#### 生成zanphp项目

`zan`

或者 (没有配置环境变量选这个)

`~/.composer/vendor/bin/zan`

说明: 

生成两个项目  http-demo   tcp-demo

并 (只是为了 共用一个php镜像)

`copy http-demo/bin/httpd http-demo/bin/zan`

`copy tcp-demo/bin/nova http-demo/bin/zan`

### 下载cat相关

#### jdk

jdk 不超过 7u79 版本

jdk-7u79-linux-x64.tar.gz

#### maven

apache-maven-3.5.0-bin.tar.gz

#### cat 代码

`git clone https://github.com/dianping/cat.git cat`

#### cat-mvn-repo

cat 仓库下 的 mvn-repo 分支

自行切换分支 并拷贝出来


## 路径整理

```
// lz4 扩展
zan-docker/php/zan/src/php-ext-lz4

// zan 扩展
zan-docker/php/zan/src/zan

// hiredis 扩展
zan-docker/php/zan/src/hiredis.tar.gz

// cat 代码
zan-docker/cat/zan/src/cat

// mvn-repo
zan-docker/cat/zan/src/mvn-repo

// jdk
zan-docker/cat/zan/src/jdk-7u79-linux-x64.tar.gz

// maven
zan-docker/cat/zan/src/apache-maven-3.5.0-bin.tar.gz

// http-demo 
zan-docker/opt/src/http-demo
zan-docker/opt/src/tcp-demo

```

## 配置相关

```
// php.ini 配置了 test 环境
zan-docker/php/zan/php.ini

// 项目服务配置

// redis 地址
// etcd  地址
// cat   地址

// http-demo  mysql
zan-docker/opt/src/http-demo/resource/config/test/connection/mysql.php

// http-demo  redis
zan-docker/opt/src/http-demo/resource/config/test/connection/redis.php

// http-demo  etcd
zan-docker/opt/src/http-demo/resource/config/test/registry.php

// http-demo  cat
zan-docker/opt/src/http-demo/resource/config/test/connection/tcp.php

// http-demo  cat  "run" => true,
zan-docker/opt/src/http-demo/resource/config/test/monitor/trace.php

// tcp-demo  mysql
zan-docker/opt/src/tcp-demo/resource/config/test/connection/mysql.php

// tcp-demo  redis
zan-docker/opt/src/tcp-demo/resource/config/test/connection/redis.php

// tcp-demo  etcd
zan-docker/opt/src/tcp-demo/resource/config/test/registry.php

// tcp-demo  cat
zan-docker/opt/src/tcp-demo/resource/config/test/connection/tcp.php

// tcp-demo  cat  "run" => true,
zan-docker/opt/src/tcp-demo/resource/config/test/monitor/trace.php


// cat 其他配置
zan-docker/opt/cat/META-INF/app.properties

// 主要配置这个就行
zan-docker/opt/cat/META-INF/cat/client.xml

```

## 数据库相关

### cat 数据

```
连接 mysql_cat 数据库

创建 cat 数据库

根据创建表
zan-docker/cat/zan/src/cat/script/Cat.sql

```

### zanphp 测试数据

```
连接 mysql_zan 数据库

创建数据库( 上面mysql配置中填的数据库 )

创建 测试表 tables  

随便整点数据

```


## 运行容器

```

$ cd zan-docker

$ docker-compose build

$ docker-compose up -d
或者
$ docker-compose up     // 可以看到输出日志

推荐姿势
$ docker-compose up -d
查看输出log
$ docker logs php_zan_http -f
$ docker logs php_zan_tcp -f
...
...

修改代码后重启
如
$ docker restart php_zan_http

```

## 查看效果

- http://localhost:2231/index/index/index

- http://localhost:2231/index/index/json

- http://localhost:2231/index/index/showTpl

- http://localhost:2231/index/index/dbOperation

- http://localhost:2231/index/index/redisOperation

- http://localhost:2231/index/index/httpRemoteService

- http://localhost:2231/index/index/novaRemoteService

- http://localhost:2252/cat


## 相关连接

- [zan官网](http://zanphp.io/)
- [zan-src](https://github.com/youzan/zan/)
- [zanphp-src](https://github.com/youzan/zanphp) 

## Zan* QQ交流群

- 115728122

