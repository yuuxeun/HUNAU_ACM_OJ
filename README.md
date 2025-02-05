<p align="center">
    <a href="https://172.28.210.177" target="_blank">
        <img src="docs/favicon.ico" height="100px">
    </a>
    <h1 align="center">HUNAU ACM OJ</h1>
    <br>
</p>

HUNAU ACM在线评测系统（HUNAU ACM Online Judge），是一个在线的判题系统。
用户可以在线提交程序多种程序（如C、C++、Java、Python3）源代码，系统对源代码进行编译和执行，并通过预先设计的测试数据来检验程序源代码的正确性。

在线体验
---------
> 私有服务器体验[OJ Demo](http://oj.iset.xyz)
>
> 学校公网服务器申请中
>
> 校园网体验[OJ Demo](http://172.28.210.177)

## `功能特性`

-  OI 模式 - 支持 OI 模式判题，子任务判题
-  滚榜 - 在比赛结束后，提供滚动榜单的功能
-  VIP用户机制 - 可以将题目设为仅 VIP 用户可见
-  小组功能 - 用户可以创建小组，并在小组内举办比赛
-  Testlib 特判 - 支持使用 testlib.h 来写特判程序
-  线上线下赛场景 - 为线下举办的比赛增加限制：如限制参加比赛的账户，参加比赛的账户不能自己修改个人信息
-  线下赛打印功能 - 为线下赛提供打印代码的功能
-  题目打印功能 - 创建比赛后，可以将题目信息一键导出为 PDF，以供打印。
-  下载比赛的提交 - 可用于查重
-  公告弹窗提示 - 在比赛过程中，发布公告时可以给所有在线用户发布弹窗提示有新公告
-  记录出错数据 - 可以查看提交方案的出错数据
-  新闻门户首页 - 首页显示新闻，各种公告等
-  支持多语言 - 现支持 C、C++、Java、Python3
-  支持(Katex)数学公式
-  题目描述多组样例 - 在一道题目的样例描述中，可以提供多组样例
-  对比赛发布题解
-  问题标签 - 给问题添加标签，方便查询
-  基于 MVC 框架开发 - 开发便于上手
-  多边形出题系统 - 一个功能完善的出题系统。出题目，生成数据，验题等。
-  Web 在线管理题目数据 - 在线对题目测试数据进行增删改查
-  排行榜 - 对用户解题数量等进行排行
-  积分榜 - 对参加比赛的用户进行积分结算，并进行排名

## `帮助文档`

1. [安装教程](https://github.com/shi-yang/jnoj/blob/master/docs/install.md)
2. [更新教程](https://github.com/shi-yang/jnoj/blob/master/docs/update.md)
3. https://github.com/shi-yang/jnoj/wiki

## `开发者支持`

Issues: https://github.com/shi-yang/jnoj/issues

Wiki: https://github.com/shi-yang/jnoj/wiki

## `参与贡献`

https://www.jnoj.org/contribute.html

## `目录结构`

```shell
  assets/             资源文件的定义
  commands/           控制台命令
  components/         Web 应用程序组件
  config/             Web 应用程序配置信息
  controllers/        控制器(Controller)文件
  docs/               文档目录
  judge/              判题机所在目录
  judge/data          判题数据目录
  mail/               发邮件时的视图模板
  messages/           多语言翻译
  migrations/         数据库迁移时的各种代码
  models/             模型(Model)文件
  modules/admin       Web 后台应用
  modules/polygon     多边形出题系统
  runtime/            Web 程序运行时生成的缓存
  tests/              各种测试
  vendor/             第三方依赖
  views/              视图(View)文件
  web/                Web 入口目录
  widgets/            各种插件
  socket.php          用于启动 Socket，提供消息通知功能
```