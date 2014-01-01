think php 网站结构说明

app 网站目录
	--lib
	  ---action 项目action目录
	--conf 项目框架配置文件
css 样式表目录
js javascript脚本目录
image 图片目录
download 下载文件存放目录
thinkphp thinkphp框架目录

index.php 项目入库文件

#项目运行步骤
1 将项目放到php服务器下
2 修改app目录下conf目录下的config.php 数据库连接方式
3 使用 siteDbScirpt目录下的sql脚本创建表
4 浏览器下执行 http://localhost/index.php/InitAdmin/initAdminUser 初始化插入管理员信息
5 http://localhost/index.php/Admin/ 录入 xiaohao xiaohao 登陆进入后台
-------mysql status ------------------------------------

mysql> status
--------------
C:\Program Files\MySQL\MySQL Server 5.1\bin\mysql.exe  Ver 14.14 Distrib 5.1.62,
 for Win32 (ia32)

Connection id:          11
Current database:
Current user:           root@localhost
SSL:                    Not in use
Using delimiter:        ;
Server version:         5.1.62-community MySQL Community Server (GPL)
Protocol version:       10
Connection:             localhost via TCP/IP
Server characterset:    utf8
Db     characterset:    utf8
Client characterset:    utf8
Conn.  characterset:    utf8
TCP port:               3306
Uptime:                 13 min 20 sec

Threads: 1  Questions: 139  Slow queries: 0  Opens: 19  Flush tables: 1  Open ta
bles: 12  Queries per second avg: 0.173