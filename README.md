# docker-for-zan Docker 一键启动 zan 开发环境

## 使用说明

### 1. 克隆本仓库

`git clone https://github.com/cjeruen/zan-docker.git zan-docker`

### 2. 下载zan扩展代码

`git clone https://github.com/youzan/zan.git php/zan/src/zan`

### 3. 安装 zanphp 代码

```bash
// 终端执行
composer global require "youzan/zan-installer"

// 配置环境变量 ~/.bashrc 或者其他 (~/.zshrc)
export PATH="$HOME/.composer/vendor/bin:$PATH"

// 终端执行
cd zan-docker/opt

// 终端执行
zan

// 或者 (没有配置环境变量选这个)
~/.composer/vendor/bin/zan

```

### 4. 生成 zanphp 项目代码演示

```bash
$ zan
   __    __
  /\ \  /\ \
  \ `\`\\/'/ ___   __  __  ____      __      ___
   `\ `\ /' / __`\/\ \/\ \/\_ ,`\  /'__`\  /' _ `\
     `\ \ \/\ \L\ \ \ \_\ \/_/  /_/\ \L\.\_/\ \/\ \
       \ \_\ \____/\ \____/ /\____\ \__/.\_\ \_\ \_\
        \/_/\/___/  \/___/  \/____/\/__/\/_/\/_/\/_/
Create a new ZanPhp application.
Which type application would you create? (use <space> to select)
❯ ● HTTP
  ○ TCP
Your application name: (ex: zanphp-demo) [这里输入应用名称: http-demo]
Please input a output directory:  [这里输入保存父目录: 直接回车]
zan-docker/opt
Your composer name: (ex: zanphp/zanhttp) [这里输入composer名称: 直接回车]
Use composer name: zanphp/zanhttp
Your application namespace: (ex: Com\Youzan\ZanHttpDemo\) [这里输入应用跟命名空间: Com\Youzan\ZanHttpDemo\]
Use default namespace: Com\Youzan\ZanHttpDemo\


$ zan
   __    __
  /\ \  /\ \
  \ `\`\\/'/ ___   __  __  ____      __      ___
   `\ `\ /' / __`\/\ \/\ \/\_ ,`\  /'__`\  /' _ `\
     `\ \ \/\ \L\ \ \ \_\ \/_/  /_/\ \L\.\_/\ \/\ \
       \ \_\ \____/\ \____/ /\____\ \__/.\_\ \_\ \_\
        \/_/\/___/  \/___/  \/____/\/__/\/_/\/_/\/_/
Create a new ZanPhp application.
Which type application would you create? (use <space> to select)
  ○ HTTP
❯ ● TCP
Your application name: (ex: zanphp-demo) [这里输入应用名称: tcp-demo]
Please input a output directory:  [这里输入保存父目录: 直接回车]
zan-docker/opt
Your composer name: (ex: zanphp/zanhttp) [这里输入composer名称: 直接回车]
Use composer name: zanphp/zanhttp
Your application namespace: (ex: Com\Youzan\ZanHttpDemo\) [这里输入应用跟命名空间: Com\Youzan\ZanTcpDemo\]
Use default namespace: Com\Youzan\ZanHttpDemo\

```

### 5. 配置参数

#### 配置相关 参考 zanphp-config-demo 中的配置

`zan-docker/php/zan/php.ini`

`http-demo/resource/config/test/connection`

`tcp-demo/resource/config/test/connection`

### 6. 运行docker容器

#### a. docker-compose build  (除非重新构建, 否则第一次运行就可以)

#### b. docker-compose up -d

#### c. docker logs php_zan_http -f

### 7. 默认演示

- [http://localhost:8030/index/index/index](http://localhost:8030/index/index/index)

- [http://localhost:8030/index/index/json](http://localhost:8030/index/index/json)

- [http://localhost:8030/index/index/showTpl](http://localhost:8030/index/index/showTpl)

- [http://localhost:8030/index/index/dbOperation](http://localhost:8030/index/index/dbOperation)

- [http://localhost:8030/index/index/redisOperation](http://localhost:8030/index/index/redisOperation)

- [http://localhost:8030/index/index/httpRemoteService](http://localhost:8030/index/index/httpRemoteService)

- [http://localhost:8030/index/index/novaRemoteService](http://localhost:8030/index/index/novaRemoteService)

## 相关连接

- [zan官网](http://zanphp.io/)
- [zan-src](https://github.com/youzan/zan/)
- [zanphp-src](https://github.com/youzan/zanphp)

## Zan* QQ交流群

- 115728122