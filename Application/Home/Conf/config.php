<?php
return array (
		// linux上不区分大小写
		'URL_CASE_INSENSITIVE' => true,
		// 配置调试工具
		// 调试工具 使用方法：trace($user,'用户信息','user');
		'TRACE_PAGE_TABS' => array (
				'base' => '基本',
				'file' => '文件',
				'think' => '流程',
				'error' => '错误',
				'sql' => 'SQL',
				'debug' => '调试',
				'user' => '用户' 
		),
		
		//调试配置
		'TRACE_EXCEPTION' => true,
		'SHOW_PAGE_TRACE' => true, // 显示页面sql语句、用时、页面渲染过程信息
		'TMPL_CACHE_ON' => false, // 禁用缓存=>发布后禁止
		
		
		// 去除index.php等
		'URL_MODEL' => '2',
		'APP_NAME' => "flow_manager",
		
		// 这段设置有误
		'SESSION_AUTO_START' => true, // 是否自动开启Session
		'SESSION_OPTIONS' => array (
				'expire' => '2000' 
		), // session 配置数组 支持type name id path expire domain 等参数
		'SESSION_TYPE' => '', // session hander类型 默认无需设置 除非扩展了session hander驱动
		'SESSION_PREFIX' => '', // session 前缀
		                        // 默认错误跳转对应的模板文件
		                        // 'TMPL_ACTION_ERROR' => './Public:error',
		                        // 默认成功跳转对应的模板文件
		                        // 'TMPL_ACTION_SUCCESS' => './Public:success',
		                        
		// 发送邮件代理---需要PHPMailer 支持，将其放置在thinkphp/lib/vendor目录下面
		// 使用方法如下：
		/**
		 * **********************************************************************
		 * function sendMail($to, $title, $token)
		 * {
		 * Vendor ( 'PHPMailer.PHPMailerAutoload' );
		 * $mail = new PHPMailer (); // 实例化
		 * $mail->IsSMTP (); // 启用SMTP
		 * $mail->Host = C ( 'MAIL_HOST' ); // smtp服务器的名称
		 *
		 * $mail->SMTPSecure = "ssl";
		 * $mail->Port = 587; //端口号有不同，协议、位置（谷歌，国内，）
		 *
		 * $mail->SMTPAuth = C ( 'MAIL_SMTPAUTH' ); // 启用smtp认证
		 * $mail->Username = C ( 'MAIL_USERNAME' ); // 你的邮箱名
		 * $mail->Password = C ( 'MAIL_PASSWORD' ); // 邮箱密码
		 * $mail->From = C ( 'MAIL_FROM' ); // 发件人地址（也就是你的邮箱地址）
		 * $mail->FromName = C ( 'MAIL_FROMNAME' ); // 发件人姓名
		 * $mail->AddAddress ( $to, "尊敬的客户" );
		 * $mail->WordWrap = 50; // 设置每行字符长度
		 * $mail->IsHTML ( C ( 'MAIL_ISHTML' ) ); // 是否HTML格式邮件
		 * $mail->CharSet = C ( 'MAIL_CHARSET' ); // 设置邮件编码
		 * $mail->Subject = "hello world ！"; // 邮件主题
		 * $mail->Body = "<pre>
		 * <a href='http://localhost/JST/Home/Index/confirm?token=$token' target='_blank'>send by arilpan </a>
		 * </pre>"; // 邮件正文不支持HTML的备用显示
		 * return ($mail->Send ());
		 * }
		 * **********************************************************************
		 */
		'MAIL_HOST' => 'smtp.163.com', // smtp服务器的名称
		'MAIL_SMTPAUTH' => TRUE, // 启用smtp认证
		'MAIL_USERNAME' => 'aril_pan@163.com', // 你的邮箱名
		'MAIL_FROM' => 'aril_pan@163.com', // 发件人地址
		'MAIL_FROMNAME' => 'development', // 发件人姓名
		'MAIL_PASSWORD' => '12345678a', // 邮箱密码
		'MAIL_CHARSET' => 'utf-8', // 设置邮件编码
		'MAIL_ISHTML' => TRUE, // 是否HTML格式邮件
		
		
		
	
		
		// 开启页面模板渲染
		'LAYOUT_ON' => true, 
		'LAYOUT_NAME' => 'layout',
		
		// 增加新的上传路径替换规则
		'TMPL_PARSE_STRING' => array (
				'__UPLOAD__' => '/Uploads' 
		), 
		   
		// 数据库
		'DB_TYPE' => 'mysql', // 数据库类型
		'DB_HOST' => '127.0.0.1', // 服务器地址
		'DB_NAME' => 'flow_manager', // 数据库名
		'DB_USER' => 'root', // 用户名
		'DB_PWD' => '123456', // 密码
		'DB_PORT' => 3306, // 端口
		'DB_PARAMS' => array (), // 数据库连接参数
		'DB_PREFIX' => 't_', // 数据库表前缀
		'DB_CHARSET' => 'utf8', // 字符集
		'DB_DEBUG' => TRUE 
);
