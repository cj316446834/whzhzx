# whzhzx
基于phpcms开发的整形美容网站（含数据库）
## 数据库
/sql
whzhzxmr_cn为源文件 whzhzxmr_cn.sql 为sql文件
## 数据库配置
caches/configs/database.php
```
<?php

return array (
	'default' => array (
		'hostname' => '127.0.0.1',
		'database' => 'whzhzxmr_cn',
		'username' => 'root',
		'password' => '123456',
		'tablepre' => 'sl_',
		'charset' => 'utf8',
		'type' => 'mysql',
		'debug' => true,
		'pconnect' => 0,
		'autoconnect' => 0
		),
);

?>
```

## 后台登录地址
/zh&admin.php
帐号密码 admin 123456
进入后台后配置域名 更新缓存 生成首页 栏目页 文章页

![image](https://github.com/cj316446834/whzhzx/blob/master/screenshot/1.png)
![image](https://github.com/cj316446834/whzhzx/blob/master/screenshot/2.png)
![image](https://github.com/cj316446834/whzhzx/blob/master/screenshot/3.png)
![image](https://github.com/cj316446834/whzhzx/blob/master/screenshot/4.png)
![image](https://github.com/cj316446834/whzhzx/blob/master/screenshot/5.png)
![image](https://github.com/cj316446834/whzhzx/blob/master/screenshot/6.png)
![image](https://github.com/cj316446834/whzhzx/blob/master/screenshot/7.png)
