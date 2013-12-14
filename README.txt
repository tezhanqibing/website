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
6 