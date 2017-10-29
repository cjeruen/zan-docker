# docker-for-zan Docker 一键启动 zan 开发环境

## 使用说明

`一切为了简单，实现真正的一键启动`

## 备注

> 1. zan-installer: v1.0.11

> 2. zan-extension: c8ced8aee79d91acd8a9f755a25ac7379ae95225

### 1. 克隆本仓库

`git clone https://github.com/cjeruen/zan-docker.git zan-docker`

### 2. 解压 opt/http-demo.tar.gz  opt/tcp-demo.tar.gz

### 3. 构建运行容器

`docker-compose build && docker-compose up -d`

## 查看效果

- [http://localhost:8030/index/index/index](http://localhost:8030/index/index/index)

- [http://localhost:8030/index/index/json](http://localhost:8030/index/index/json)

- [http://localhost:8030/index/index/showTpl](http://localhost:8030/index/index/showTpl)

- [http://localhost:8030/index/index/dbOperation](http://localhost:8030/index/index/dbOperation)

- [http://localhost:8030/index/index/redisOperation](http://localhost:8030/index/index/redisOperation)

- [http://localhost:8030/index/index/httpRemoteService](http://localhost:8030/index/index/httpRemoteService)

- [http://localhost:8030/index/index/novaRemoteService](http://localhost:8030/index/index/novaRemoteService)

- [http://localhost:2281/cat](http://localhost:2281/cat)

## 相关连接

- [zan官网](http://zanphp.io/)
- [zan-src](https://github.com/youzan/zan/)
- [zanphp-src](https://github.com/youzan/zanphp)

## Zan* QQ交流群

- 115728122