<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2012-09-20 13:34:11 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL v2/public/article/list was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-09-20 13:34:11 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL v2/public/article/list was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 E:\user\ijiaolian\v2\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 E:\user\ijiaolian\v2\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 E:\user\ijiaolian\v2\public\index.php(113): Kohana_Request->execute()
#3 {main}
2012-09-20 13:34:28 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL article/media/ico/favicon.ico was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2012-09-20 13:34:28 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL article/media/ico/favicon.ico was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 E:\user\ijiaolian\v2\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 E:\user\ijiaolian\v2\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 E:\user\ijiaolian\v2\public\index.php(113): Kohana_Request->execute()
#3 {main}
2012-09-20 13:34:28 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL article/media/ico/favicon.ico was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2012-09-20 13:34:28 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL article/media/ico/favicon.ico was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 E:\user\ijiaolian\v2\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 E:\user\ijiaolian\v2\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 E:\user\ijiaolian\v2\public\index.php(113): Kohana_Request->execute()
#3 {main}
2012-09-20 13:34:35 --- ERROR: Database_Exception [ 1364 ]: Field 'targetid' doesn't have a default value [ INSERT INTO `ijiaolian_comments` (`author`, `content`, `dateline`) VALUES ('sdfsdf', '', 1348119275) ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-09-20 13:34:35 --- STRACE: Database_Exception [ 1364 ]: Field 'targetid' doesn't have a default value [ INSERT INTO `ijiaolian_comments` (`author`, `content`, `dateline`) VALUES ('sdfsdf', '', 1348119275) ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 E:\user\ijiaolian\v2\kohana\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `ij...', false, Array)
#1 E:\user\ijiaolian\v2\kohana\modules\orm\classes\kohana\orm.php(1262): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 E:\user\ijiaolian\v2\kohana\modules\orm\classes\kohana\orm.php(1358): Kohana_ORM->create(NULL)
#3 E:\user\ijiaolian\v2\application\classes\controller\comment.php(15): Kohana_ORM->save()
#4 [internal function]: Controller_Comment->action_add()
#5 E:\user\ijiaolian\v2\kohana\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Comment))
#6 E:\user\ijiaolian\v2\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 E:\user\ijiaolian\v2\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 E:\user\ijiaolian\v2\public\index.php(113): Kohana_Request->execute()
#9 {main}
2012-09-20 14:09:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prototype/user_coach.html ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-20 14:09:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: prototype/user_coach.html ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 E:\user\ijiaolian\v2\public\index.php(113): Kohana_Request->execute()
#1 {main}
2012-09-20 14:44:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ico/logo.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-20 14:44:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ico/logo.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 E:\user\ijiaolian\v2\public\index.php(113): Kohana_Request->execute()
#1 {main}
2012-09-20 14:44:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: asset/banner3.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-20 14:44:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: asset/banner3.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 E:\user\ijiaolian\v2\public\index.php(113): Kohana_Request->execute()
#1 {main}
2012-09-20 14:44:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: asset/banner4.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-20 14:44:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: asset/avatar_big.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-20 14:44:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: asset/banner4.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 E:\user\ijiaolian\v2\public\index.php(113): Kohana_Request->execute()
#1 {main}
2012-09-20 14:44:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: asset/avatar_big.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 E:\user\ijiaolian\v2\public\index.php(113): Kohana_Request->execute()
#1 {main}
2012-09-20 14:44:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: asset/banner2.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-20 14:44:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: asset/banner2.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 E:\user\ijiaolian\v2\public\index.php(113): Kohana_Request->execute()
#1 {main}
2012-09-20 14:49:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: asset/banner3.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-20 14:49:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: asset/banner2.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-20 14:49:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: asset/banner3.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 E:\user\ijiaolian\v2\public\index.php(113): Kohana_Request->execute()
#1 {main}
2012-09-20 14:49:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: asset/avatar_big.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-20 14:49:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: asset/banner2.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 E:\user\ijiaolian\v2\public\index.php(113): Kohana_Request->execute()
#1 {main}
2012-09-20 14:49:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: asset/avatar_big.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 E:\user\ijiaolian\v2\public\index.php(113): Kohana_Request->execute()
#1 {main}
2012-09-20 14:49:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ico/logo.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-20 14:49:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ico/logo.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 E:\user\ijiaolian\v2\public\index.php(113): Kohana_Request->execute()
#1 {main}
2012-09-20 14:49:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: asset/banner4.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-20 14:49:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: asset/banner4.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 E:\user\ijiaolian\v2\public\index.php(113): Kohana_Request->execute()
#1 {main}
2012-09-20 14:51:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: asset/avatar_big.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-20 14:51:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: asset/banner3.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-20 14:51:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: asset/banner2.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-20 14:51:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: asset/banner2.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 E:\user\ijiaolian\v2\public\index.php(113): Kohana_Request->execute()
#1 {main}
2012-09-20 14:51:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: asset/avatar_big.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 E:\user\ijiaolian\v2\public\index.php(113): Kohana_Request->execute()
#1 {main}
2012-09-20 14:51:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ico/logo.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-20 14:51:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ico/logo.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 E:\user\ijiaolian\v2\public\index.php(113): Kohana_Request->execute()
#1 {main}
2012-09-20 14:51:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: asset/banner4.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-20 14:51:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: asset/banner4.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 E:\user\ijiaolian\v2\public\index.php(113): Kohana_Request->execute()
#1 {main}
2012-09-20 14:52:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: asset/banner2.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-20 14:52:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: asset/banner2.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 E:\user\ijiaolian\v2\public\index.php(113): Kohana_Request->execute()
#1 {main}
2012-09-20 14:52:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: asset/banner3.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-20 14:52:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: asset/banner3.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 E:\user\ijiaolian\v2\public\index.php(113): Kohana_Request->execute()
#1 {main}
2012-09-20 14:52:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: asset/avatar_big.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-20 14:52:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: asset/avatar_big.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 E:\user\ijiaolian\v2\public\index.php(113): Kohana_Request->execute()
#1 {main}
2012-09-20 14:52:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ico/logo.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-20 14:52:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ico/logo.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 E:\user\ijiaolian\v2\public\index.php(113): Kohana_Request->execute()
#1 {main}
2012-09-20 14:52:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: asset/banner4.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-20 14:52:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: asset/banner4.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 E:\user\ijiaolian\v2\public\index.php(113): Kohana_Request->execute()
#1 {main}
2012-09-20 14:53:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: asset/avatar_big.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-20 14:53:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: asset/avatar_big.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 E:\user\ijiaolian\v2\public\index.php(113): Kohana_Request->execute()
#1 {main}
2012-09-20 14:53:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: asset/banner2.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-20 14:53:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: asset/banner2.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 E:\user\ijiaolian\v2\public\index.php(113): Kohana_Request->execute()
#1 {main}
2012-09-20 14:53:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: asset/banner3.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-20 14:53:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: asset/banner3.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 E:\user\ijiaolian\v2\public\index.php(113): Kohana_Request->execute()
#1 {main}
2012-09-20 14:53:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: asset/banner4.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-20 14:53:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: asset/banner4.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 E:\user\ijiaolian\v2\public\index.php(113): Kohana_Request->execute()
#1 {main}
2012-09-20 14:55:25 --- ERROR: View_Exception [ 0 ]: The watermark file /img/watermark could not be found ~ MODPATH\admin\classes\watermark.php [ 73 ]
2012-09-20 14:55:25 --- STRACE: View_Exception [ 0 ]: The watermark file /img/watermark could not be found ~ MODPATH\admin\classes\watermark.php [ 73 ]
--
#0 E:\user\ijiaolian\v2\kohana\modules\admin\classes\watermark.php(61): Watermark->__construct()
#1 E:\user\ijiaolian\v2\kohana\modules\media\classes\controller\media.php(80): Watermark::instance()
#2 [internal function]: Controller_Media->action_image()
#3 E:\user\ijiaolian\v2\kohana\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Media))
#4 E:\user\ijiaolian\v2\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 E:\user\ijiaolian\v2\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 E:\user\ijiaolian\v2\public\index.php(113): Kohana_Request->execute()
#7 {main}
2012-09-20 14:55:25 --- ERROR: View_Exception [ 0 ]: The watermark file /img/watermark could not be found ~ MODPATH\admin\classes\watermark.php [ 73 ]
2012-09-20 14:55:25 --- STRACE: View_Exception [ 0 ]: The watermark file /img/watermark could not be found ~ MODPATH\admin\classes\watermark.php [ 73 ]
--
#0 E:\user\ijiaolian\v2\kohana\modules\admin\classes\watermark.php(61): Watermark->__construct()
#1 E:\user\ijiaolian\v2\kohana\modules\media\classes\controller\media.php(80): Watermark::instance()
#2 [internal function]: Controller_Media->action_image()
#3 E:\user\ijiaolian\v2\kohana\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Media))
#4 E:\user\ijiaolian\v2\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 E:\user\ijiaolian\v2\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 E:\user\ijiaolian\v2\public\index.php(113): Kohana_Request->execute()
#7 {main}
2012-09-20 14:55:25 --- ERROR: View_Exception [ 0 ]: The watermark file /img/watermark could not be found ~ MODPATH\admin\classes\watermark.php [ 73 ]
2012-09-20 14:55:25 --- ERROR: View_Exception [ 0 ]: The watermark file /img/watermark could not be found ~ MODPATH\admin\classes\watermark.php [ 73 ]
2012-09-20 14:55:25 --- STRACE: View_Exception [ 0 ]: The watermark file /img/watermark could not be found ~ MODPATH\admin\classes\watermark.php [ 73 ]
--
#0 E:\user\ijiaolian\v2\kohana\modules\admin\classes\watermark.php(61): Watermark->__construct()
#1 E:\user\ijiaolian\v2\kohana\modules\media\classes\controller\media.php(80): Watermark::instance()
#2 [internal function]: Controller_Media->action_image()
#3 E:\user\ijiaolian\v2\kohana\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Media))
#4 E:\user\ijiaolian\v2\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 E:\user\ijiaolian\v2\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 E:\user\ijiaolian\v2\public\index.php(113): Kohana_Request->execute()
#7 {main}
2012-09-20 14:55:25 --- STRACE: View_Exception [ 0 ]: The watermark file /img/watermark could not be found ~ MODPATH\admin\classes\watermark.php [ 73 ]
--
#0 E:\user\ijiaolian\v2\kohana\modules\admin\classes\watermark.php(61): Watermark->__construct()
#1 E:\user\ijiaolian\v2\kohana\modules\media\classes\controller\media.php(80): Watermark::instance()
#2 [internal function]: Controller_Media->action_image()
#3 E:\user\ijiaolian\v2\kohana\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Media))
#4 E:\user\ijiaolian\v2\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 E:\user\ijiaolian\v2\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 E:\user\ijiaolian\v2\public\index.php(113): Kohana_Request->execute()
#7 {main}
2012-09-20 14:55:47 --- ERROR: View_Exception [ 0 ]: The watermark file /img/watermark could not be found ~ MODPATH\admin\classes\watermark.php [ 73 ]
2012-09-20 14:55:47 --- STRACE: View_Exception [ 0 ]: The watermark file /img/watermark could not be found ~ MODPATH\admin\classes\watermark.php [ 73 ]
--
#0 E:\user\ijiaolian\v2\kohana\modules\admin\classes\watermark.php(61): Watermark->__construct()
#1 E:\user\ijiaolian\v2\kohana\modules\media\classes\controller\media.php(80): Watermark::instance()
#2 [internal function]: Controller_Media->action_image()
#3 E:\user\ijiaolian\v2\kohana\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Media))
#4 E:\user\ijiaolian\v2\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 E:\user\ijiaolian\v2\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 E:\user\ijiaolian\v2\public\index.php(113): Kohana_Request->execute()
#7 {main}
2012-09-20 14:55:47 --- ERROR: View_Exception [ 0 ]: The watermark file /img/watermark could not be found ~ MODPATH\admin\classes\watermark.php [ 73 ]
2012-09-20 14:55:47 --- ERROR: View_Exception [ 0 ]: The watermark file /img/watermark could not be found ~ MODPATH\admin\classes\watermark.php [ 73 ]
2012-09-20 14:55:47 --- STRACE: View_Exception [ 0 ]: The watermark file /img/watermark could not be found ~ MODPATH\admin\classes\watermark.php [ 73 ]
--
#0 E:\user\ijiaolian\v2\kohana\modules\admin\classes\watermark.php(61): Watermark->__construct()
#1 E:\user\ijiaolian\v2\kohana\modules\media\classes\controller\media.php(80): Watermark::instance()
#2 [internal function]: Controller_Media->action_image()
#3 E:\user\ijiaolian\v2\kohana\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Media))
#4 E:\user\ijiaolian\v2\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 E:\user\ijiaolian\v2\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 E:\user\ijiaolian\v2\public\index.php(113): Kohana_Request->execute()
#7 {main}
2012-09-20 14:55:47 --- STRACE: View_Exception [ 0 ]: The watermark file /img/watermark could not be found ~ MODPATH\admin\classes\watermark.php [ 73 ]
--
#0 E:\user\ijiaolian\v2\kohana\modules\admin\classes\watermark.php(61): Watermark->__construct()
#1 E:\user\ijiaolian\v2\kohana\modules\media\classes\controller\media.php(80): Watermark::instance()
#2 [internal function]: Controller_Media->action_image()
#3 E:\user\ijiaolian\v2\kohana\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Media))
#4 E:\user\ijiaolian\v2\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 E:\user\ijiaolian\v2\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 E:\user\ijiaolian\v2\public\index.php(113): Kohana_Request->execute()
#7 {main}
2012-09-20 14:55:47 --- STRACE: View_Exception [ 0 ]: The watermark file /img/watermark could not be found ~ MODPATH\admin\classes\watermark.php [ 73 ]
--
#0 E:\user\ijiaolian\v2\kohana\modules\admin\classes\watermark.php(61): Watermark->__construct()
#1 E:\user\ijiaolian\v2\kohana\modules\media\classes\controller\media.php(80): Watermark::instance()
#2 [internal function]: Controller_Media->action_image()
#3 E:\user\ijiaolian\v2\kohana\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Media))
#4 E:\user\ijiaolian\v2\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 E:\user\ijiaolian\v2\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 E:\user\ijiaolian\v2\public\index.php(113): Kohana_Request->execute()
#7 {main}
2012-09-20 15:01:11 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'dateline' in 'field list' [ INSERT INTO `ijiaolian_links` (`url`, `active`, `order`, `created`, `dateline`) VALUES ('http://www.google.com', '1', '1', '', 1348124471) ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-09-20 15:01:11 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'dateline' in 'field list' [ INSERT INTO `ijiaolian_links` (`url`, `active`, `order`, `created`, `dateline`) VALUES ('http://www.google.com', '1', '1', '', 1348124471) ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 E:\user\ijiaolian\v2\kohana\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `ij...', false, Array)
#1 E:\user\ijiaolian\v2\kohana\modules\orm\classes\kohana\orm.php(1262): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 E:\user\ijiaolian\v2\kohana\modules\orm\classes\kohana\orm.php(1358): Kohana_ORM->create(NULL)
#3 E:\user\ijiaolian\v2\kohana\modules\admin\classes\controller\admin\crud.php(96): Kohana_ORM->save()
#4 [internal function]: Controller_Admin_Crud->action_update()
#5 E:\user\ijiaolian\v2\kohana\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Link))
#6 E:\user\ijiaolian\v2\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 E:\user\ijiaolian\v2\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 E:\user\ijiaolian\v2\public\index.php(113): Kohana_Request->execute()
#9 {main}
2012-09-20 15:17:25 --- ERROR: ErrorException [ 8 ]: Undefined variable: top_lins ~ APPPATH\views\template.php [ 31 ]
2012-09-20 15:17:25 --- STRACE: ErrorException [ 8 ]: Undefined variable: top_lins ~ APPPATH\views\template.php [ 31 ]
--
#0 E:\user\ijiaolian\v2\application\views\template.php(31): Kohana_Core::error_handler(8, 'Undefined varia...', 'E:\user\ijiaoli...', 31, Array)
#1 E:\user\ijiaolian\v2\kohana\system\classes\kohana\view.php(61): include('E:\user\ijiaoli...')
#2 E:\user\ijiaolian\v2\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('E:\user\ijiaoli...', Array)
#3 E:\user\ijiaolian\v2\kohana\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 E:\user\ijiaolian\v2\application\classes\controller\frame.php(171): Kohana_Controller_Template->after()
#5 [internal function]: Controller_Frame->after()
#6 E:\user\ijiaolian\v2\kohana\system\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#7 E:\user\ijiaolian\v2\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 E:\user\ijiaolian\v2\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 E:\user\ijiaolian\v2\public\index.php(113): Kohana_Request->execute()
#10 {main}
2012-09-20 15:33:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL account/media/ico/logo.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2012-09-20 15:33:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL account/media/ico/logo.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 E:\user\ijiaolian\v2\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 E:\user\ijiaolian\v2\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 E:\user\ijiaolian\v2\public\index.php(113): Kohana_Request->execute()
#3 {main}
2012-09-20 15:33:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL account/media/ico/favicon.ico was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2012-09-20 15:33:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL account/upload/banner2.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2012-09-20 15:33:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL account/media/ico/favicon.ico was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 E:\user\ijiaolian\v2\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 E:\user\ijiaolian\v2\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 E:\user\ijiaolian\v2\public\index.php(113): Kohana_Request->execute()
#3 {main}
2012-09-20 15:33:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL account/upload/banner2.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 E:\user\ijiaolian\v2\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 E:\user\ijiaolian\v2\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 E:\user\ijiaolian\v2\public\index.php(113): Kohana_Request->execute()
#3 {main}
2012-09-20 15:33:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL account/upload/banner3.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2012-09-20 15:33:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL account/upload/banner3.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 E:\user\ijiaolian\v2\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 E:\user\ijiaolian\v2\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 E:\user\ijiaolian\v2\public\index.php(113): Kohana_Request->execute()
#3 {main}
2012-09-20 15:33:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL account/upload/avatar_big.gif was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2012-09-20 15:33:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL account/upload/banner4.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2012-09-20 15:33:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL account/upload/avatar_big.gif was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 E:\user\ijiaolian\v2\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 E:\user\ijiaolian\v2\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 E:\user\ijiaolian\v2\public\index.php(113): Kohana_Request->execute()
#3 {main}
2012-09-20 15:33:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL account/upload/banner4.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 E:\user\ijiaolian\v2\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 E:\user\ijiaolian\v2\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 E:\user\ijiaolian\v2\public\index.php(113): Kohana_Request->execute()
#3 {main}
2012-09-20 15:33:11 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL account/media/ico/favicon.ico was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2012-09-20 15:33:11 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL account/media/ico/favicon.ico was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 E:\user\ijiaolian\v2\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 E:\user\ijiaolian\v2\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 E:\user\ijiaolian\v2\public\index.php(113): Kohana_Request->execute()
#3 {main}
2012-09-20 15:33:13 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL account/media/ico/logo.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2012-09-20 15:33:13 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL account/media/ico/logo.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 E:\user\ijiaolian\v2\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 E:\user\ijiaolian\v2\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 E:\user\ijiaolian\v2\public\index.php(113): Kohana_Request->execute()
#3 {main}
2012-09-20 15:33:13 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL account/upload/banner4.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2012-09-20 15:33:13 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL account/upload/banner4.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 E:\user\ijiaolian\v2\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 E:\user\ijiaolian\v2\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 E:\user\ijiaolian\v2\public\index.php(113): Kohana_Request->execute()
#3 {main}
2012-09-20 15:33:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL account/upload/banner2.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2012-09-20 15:33:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL account/upload/banner2.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 E:\user\ijiaolian\v2\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 E:\user\ijiaolian\v2\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 E:\user\ijiaolian\v2\public\index.php(113): Kohana_Request->execute()
#3 {main}
2012-09-20 15:33:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL account/upload/avatar_big.gif was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2012-09-20 15:33:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL account/upload/avatar_big.gif was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 E:\user\ijiaolian\v2\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 E:\user\ijiaolian\v2\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 E:\user\ijiaolian\v2\public\index.php(113): Kohana_Request->execute()
#3 {main}
2012-09-20 15:33:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL account/upload/banner3.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2012-09-20 15:33:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL account/upload/banner3.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 E:\user\ijiaolian\v2\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 E:\user\ijiaolian\v2\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 E:\user\ijiaolian\v2\public\index.php(113): Kohana_Request->execute()
#3 {main}
2012-09-20 15:34:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL account/media/ico/logo.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2012-09-20 15:34:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL account/media/ico/logo.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 E:\user\ijiaolian\v2\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 E:\user\ijiaolian\v2\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 E:\user\ijiaolian\v2\public\index.php(113): Kohana_Request->execute()
#3 {main}
2012-09-20 15:34:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL account/upload/banner3.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2012-09-20 15:34:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL account/upload/avatar_big.gif was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2012-09-20 15:34:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL account/upload/banner3.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 E:\user\ijiaolian\v2\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 E:\user\ijiaolian\v2\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 E:\user\ijiaolian\v2\public\index.php(113): Kohana_Request->execute()
#3 {main}
2012-09-20 15:34:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL account/upload/banner2.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2012-09-20 15:34:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL account/upload/avatar_big.gif was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 E:\user\ijiaolian\v2\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 E:\user\ijiaolian\v2\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 E:\user\ijiaolian\v2\public\index.php(113): Kohana_Request->execute()
#3 {main}
2012-09-20 15:34:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL account/upload/banner2.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 E:\user\ijiaolian\v2\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 E:\user\ijiaolian\v2\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 E:\user\ijiaolian\v2\public\index.php(113): Kohana_Request->execute()
#3 {main}
2012-09-20 15:34:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL account/upload/banner4.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2012-09-20 15:34:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL account/upload/banner4.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 E:\user\ijiaolian\v2\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 E:\user\ijiaolian\v2\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 E:\user\ijiaolian\v2\public\index.php(113): Kohana_Request->execute()
#3 {main}
2012-09-20 15:37:51 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: '' for column 'order' at row 1 [ INSERT INTO `ijiaolian_links` (`url`, `name`, `active`, `type`, `order`, `dateline`) VALUES ('/list/jiajiao', '家教老师', '1', '0', '', 1348126671) ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-09-20 15:37:51 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: '' for column 'order' at row 1 [ INSERT INTO `ijiaolian_links` (`url`, `name`, `active`, `type`, `order`, `dateline`) VALUES ('/list/jiajiao', '家教老师', '1', '0', '', 1348126671) ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 E:\user\ijiaolian\v2\kohana\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `ij...', false, Array)
#1 E:\user\ijiaolian\v2\kohana\modules\orm\classes\kohana\orm.php(1262): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 E:\user\ijiaolian\v2\kohana\modules\orm\classes\kohana\orm.php(1358): Kohana_ORM->create(NULL)
#3 E:\user\ijiaolian\v2\kohana\modules\admin\classes\controller\admin\crud.php(96): Kohana_ORM->save()
#4 [internal function]: Controller_Admin_Crud->action_update()
#5 E:\user\ijiaolian\v2\kohana\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Link))
#6 E:\user\ijiaolian\v2\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 E:\user\ijiaolian\v2\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 E:\user\ijiaolian\v2\public\index.php(113): Kohana_Request->execute()
#9 {main}
2012-09-20 15:37:56 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: '' for column 'order' at row 1 [ INSERT INTO `ijiaolian_links` (`url`, `name`, `active`, `type`, `order`, `dateline`) VALUES ('/list/jiajiao', '家教老师', '1', '0', '', 1348126676) ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-09-20 15:37:56 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: '' for column 'order' at row 1 [ INSERT INTO `ijiaolian_links` (`url`, `name`, `active`, `type`, `order`, `dateline`) VALUES ('/list/jiajiao', '家教老师', '1', '0', '', 1348126676) ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 E:\user\ijiaolian\v2\kohana\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `ij...', false, Array)
#1 E:\user\ijiaolian\v2\kohana\modules\orm\classes\kohana\orm.php(1262): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 E:\user\ijiaolian\v2\kohana\modules\orm\classes\kohana\orm.php(1358): Kohana_ORM->create(NULL)
#3 E:\user\ijiaolian\v2\kohana\modules\admin\classes\controller\admin\crud.php(96): Kohana_ORM->save()
#4 [internal function]: Controller_Admin_Crud->action_update()
#5 E:\user\ijiaolian\v2\kohana\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Link))
#6 E:\user\ijiaolian\v2\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 E:\user\ijiaolian\v2\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 E:\user\ijiaolian\v2\public\index.php(113): Kohana_Request->execute()
#9 {main}
2012-09-20 16:02:39 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL account/upload/avatar_big.gif was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2012-09-20 16:02:39 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL account/upload/avatar_big.gif was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 E:\user\ijiaolian\v2\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 E:\user\ijiaolian\v2\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 E:\user\ijiaolian\v2\public\index.php(113): Kohana_Request->execute()
#3 {main}
2012-09-20 16:02:39 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL account/upload/banner2.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2012-09-20 16:02:39 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL account/upload/banner2.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 E:\user\ijiaolian\v2\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 E:\user\ijiaolian\v2\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 E:\user\ijiaolian\v2\public\index.php(113): Kohana_Request->execute()
#3 {main}
2012-09-20 16:02:39 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL account/upload/banner4.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2012-09-20 16:02:39 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL account/upload/banner4.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 E:\user\ijiaolian\v2\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 E:\user\ijiaolian\v2\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 E:\user\ijiaolian\v2\public\index.php(113): Kohana_Request->execute()
#3 {main}
2012-09-20 16:02:39 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL account/upload/banner3.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2012-09-20 16:02:39 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL account/upload/banner3.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 E:\user\ijiaolian\v2\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 E:\user\ijiaolian\v2\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 E:\user\ijiaolian\v2\public\index.php(113): Kohana_Request->execute()
#3 {main}
2012-09-20 16:02:39 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL account/media/ico/logo.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2012-09-20 16:02:39 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL account/media/ico/logo.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 E:\user\ijiaolian\v2\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 E:\user\ijiaolian\v2\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 E:\user\ijiaolian\v2\public\index.php(113): Kohana_Request->execute()
#3 {main}
2012-09-20 16:02:43 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL account/upload/banner3.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2012-09-20 16:02:43 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL account/media/ico/logo.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2012-09-20 16:02:43 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL account/upload/banner3.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 E:\user\ijiaolian\v2\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 E:\user\ijiaolian\v2\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 E:\user\ijiaolian\v2\public\index.php(113): Kohana_Request->execute()
#3 {main}
2012-09-20 16:02:43 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL account/media/ico/logo.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 E:\user\ijiaolian\v2\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 E:\user\ijiaolian\v2\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 E:\user\ijiaolian\v2\public\index.php(113): Kohana_Request->execute()
#3 {main}
2012-09-20 16:02:43 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL account/upload/avatar_big.gif was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2012-09-20 16:02:43 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL account/upload/avatar_big.gif was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 E:\user\ijiaolian\v2\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 E:\user\ijiaolian\v2\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 E:\user\ijiaolian\v2\public\index.php(113): Kohana_Request->execute()
#3 {main}
2012-09-20 16:02:43 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL account/upload/banner4.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2012-09-20 16:02:43 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL account/upload/banner4.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 E:\user\ijiaolian\v2\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 E:\user\ijiaolian\v2\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 E:\user\ijiaolian\v2\public\index.php(113): Kohana_Request->execute()
#3 {main}
2012-09-20 16:02:43 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL account/upload/banner2.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2012-09-20 16:02:43 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL account/upload/banner2.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 E:\user\ijiaolian\v2\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 E:\user\ijiaolian\v2\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 E:\user\ijiaolian\v2\public\index.php(113): Kohana_Request->execute()
#3 {main}
2012-09-20 16:02:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL account/upload/avatar_big.gif was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2012-09-20 16:02:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL account/upload/avatar_big.gif was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 E:\user\ijiaolian\v2\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 E:\user\ijiaolian\v2\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 E:\user\ijiaolian\v2\public\index.php(113): Kohana_Request->execute()
#3 {main}
2012-09-20 16:02:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL account/upload/banner2.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2012-09-20 16:02:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL account/upload/banner2.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 E:\user\ijiaolian\v2\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 E:\user\ijiaolian\v2\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 E:\user\ijiaolian\v2\public\index.php(113): Kohana_Request->execute()
#3 {main}
2012-09-20 16:02:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL account/media/ico/logo.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2012-09-20 16:02:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL account/media/ico/logo.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 E:\user\ijiaolian\v2\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 E:\user\ijiaolian\v2\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 E:\user\ijiaolian\v2\public\index.php(113): Kohana_Request->execute()
#3 {main}
2012-09-20 16:02:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL account/upload/banner4.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2012-09-20 16:02:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL account/upload/banner4.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 E:\user\ijiaolian\v2\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 E:\user\ijiaolian\v2\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 E:\user\ijiaolian\v2\public\index.php(113): Kohana_Request->execute()
#3 {main}
2012-09-20 16:02:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL account/upload/banner3.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2012-09-20 16:02:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL account/upload/banner3.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 E:\user\ijiaolian\v2\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 E:\user\ijiaolian\v2\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 E:\user\ijiaolian\v2\public\index.php(113): Kohana_Request->execute()
#3 {main}
2012-09-20 16:02:55 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL account/media/ico/logo.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2012-09-20 16:02:55 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL account/media/ico/logo.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 E:\user\ijiaolian\v2\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 E:\user\ijiaolian\v2\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 E:\user\ijiaolian\v2\public\index.php(113): Kohana_Request->execute()
#3 {main}
2012-09-20 16:02:55 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL account/upload/banner4.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2012-09-20 16:02:55 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL account/upload/avatar_big.gif was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2012-09-20 16:02:55 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL account/upload/banner4.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 E:\user\ijiaolian\v2\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 E:\user\ijiaolian\v2\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 E:\user\ijiaolian\v2\public\index.php(113): Kohana_Request->execute()
#3 {main}
2012-09-20 16:02:55 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL account/upload/avatar_big.gif was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 E:\user\ijiaolian\v2\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 E:\user\ijiaolian\v2\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 E:\user\ijiaolian\v2\public\index.php(113): Kohana_Request->execute()
#3 {main}
2012-09-20 16:02:55 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL account/upload/banner2.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2012-09-20 16:02:55 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL account/upload/banner2.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 E:\user\ijiaolian\v2\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 E:\user\ijiaolian\v2\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 E:\user\ijiaolian\v2\public\index.php(113): Kohana_Request->execute()
#3 {main}
2012-09-20 16:02:55 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL account/upload/banner3.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2012-09-20 16:02:55 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL account/upload/banner3.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 E:\user\ijiaolian\v2\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 E:\user\ijiaolian\v2\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 E:\user\ijiaolian\v2\public\index.php(113): Kohana_Request->execute()
#3 {main}
2012-09-20 16:03:44 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL account/upload/avatar_big.gif was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2012-09-20 16:03:44 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL account/upload/avatar_big.gif was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 E:\user\ijiaolian\v2\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 E:\user\ijiaolian\v2\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 E:\user\ijiaolian\v2\public\index.php(113): Kohana_Request->execute()
#3 {main}
2012-09-20 16:03:44 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL account/upload/banner2.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2012-09-20 16:03:44 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL account/upload/banner2.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 E:\user\ijiaolian\v2\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 E:\user\ijiaolian\v2\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 E:\user\ijiaolian\v2\public\index.php(113): Kohana_Request->execute()
#3 {main}
2012-09-20 16:03:44 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL account/upload/banner3.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2012-09-20 16:03:44 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL account/upload/banner3.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 E:\user\ijiaolian\v2\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 E:\user\ijiaolian\v2\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 E:\user\ijiaolian\v2\public\index.php(113): Kohana_Request->execute()
#3 {main}
2012-09-20 16:03:44 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL account/upload/banner4.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2012-09-20 16:03:44 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL account/upload/banner4.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 E:\user\ijiaolian\v2\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 E:\user\ijiaolian\v2\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 E:\user\ijiaolian\v2\public\index.php(113): Kohana_Request->execute()
#3 {main}
2012-09-20 16:03:49 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL account/upload/avatar_big.gif was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2012-09-20 16:03:49 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL account/upload/avatar_big.gif was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 E:\user\ijiaolian\v2\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 E:\user\ijiaolian\v2\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 E:\user\ijiaolian\v2\public\index.php(113): Kohana_Request->execute()
#3 {main}
2012-09-20 16:03:49 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL account/upload/banner2.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2012-09-20 16:03:49 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL account/upload/banner2.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 E:\user\ijiaolian\v2\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 E:\user\ijiaolian\v2\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 E:\user\ijiaolian\v2\public\index.php(113): Kohana_Request->execute()
#3 {main}
2012-09-20 16:03:49 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL account/upload/banner4.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2012-09-20 16:03:49 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL account/upload/banner4.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 E:\user\ijiaolian\v2\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 E:\user\ijiaolian\v2\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 E:\user\ijiaolian\v2\public\index.php(113): Kohana_Request->execute()
#3 {main}
2012-09-20 16:03:49 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL account/upload/banner3.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2012-09-20 16:03:49 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL account/upload/banner3.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 E:\user\ijiaolian\v2\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 E:\user\ijiaolian\v2\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 E:\user\ijiaolian\v2\public\index.php(113): Kohana_Request->execute()
#3 {main}
2012-09-20 16:03:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL account/upload/banner3.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2012-09-20 16:03:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL account/upload/banner3.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 E:\user\ijiaolian\v2\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 E:\user\ijiaolian\v2\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 E:\user\ijiaolian\v2\public\index.php(113): Kohana_Request->execute()
#3 {main}
2012-09-20 16:03:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL account/upload/avatar_big.gif was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2012-09-20 16:03:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL account/upload/avatar_big.gif was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 E:\user\ijiaolian\v2\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 E:\user\ijiaolian\v2\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 E:\user\ijiaolian\v2\public\index.php(113): Kohana_Request->execute()
#3 {main}
2012-09-20 16:03:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL account/upload/banner2.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2012-09-20 16:03:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL account/upload/banner4.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2012-09-20 16:03:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL account/upload/banner2.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 E:\user\ijiaolian\v2\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 E:\user\ijiaolian\v2\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 E:\user\ijiaolian\v2\public\index.php(113): Kohana_Request->execute()
#3 {main}
2012-09-20 16:03:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL account/upload/banner4.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 E:\user\ijiaolian\v2\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 E:\user\ijiaolian\v2\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 E:\user\ijiaolian\v2\public\index.php(113): Kohana_Request->execute()
#3 {main}
2012-09-20 16:04:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL account/upload/banner3.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2012-09-20 16:04:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL account/upload/banner3.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 E:\user\ijiaolian\v2\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 E:\user\ijiaolian\v2\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 E:\user\ijiaolian\v2\public\index.php(113): Kohana_Request->execute()
#3 {main}
2012-09-20 16:04:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL account/upload/banner2.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2012-09-20 16:04:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL account/upload/banner2.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 E:\user\ijiaolian\v2\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 E:\user\ijiaolian\v2\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 E:\user\ijiaolian\v2\public\index.php(113): Kohana_Request->execute()
#3 {main}
2012-09-20 16:04:26 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL account/upload/avatar_big.gif was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2012-09-20 16:04:26 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL account/upload/avatar_big.gif was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 E:\user\ijiaolian\v2\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 E:\user\ijiaolian\v2\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 E:\user\ijiaolian\v2\public\index.php(113): Kohana_Request->execute()
#3 {main}
2012-09-20 16:04:26 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL account/upload/banner4.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2012-09-20 16:04:26 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL account/upload/banner4.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 E:\user\ijiaolian\v2\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 E:\user\ijiaolian\v2\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 E:\user\ijiaolian\v2\public\index.php(113): Kohana_Request->execute()
#3 {main}
2012-09-20 16:05:42 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL account/upload/banner2.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2012-09-20 16:05:42 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL account/upload/banner2.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 E:\user\ijiaolian\v2\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 E:\user\ijiaolian\v2\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 E:\user\ijiaolian\v2\public\index.php(113): Kohana_Request->execute()
#3 {main}
2012-09-20 16:05:42 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL account/upload/banner4.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2012-09-20 16:05:42 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL account/upload/banner4.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 E:\user\ijiaolian\v2\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 E:\user\ijiaolian\v2\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 E:\user\ijiaolian\v2\public\index.php(113): Kohana_Request->execute()
#3 {main}
2012-09-20 16:05:42 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL account/upload/banner3.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2012-09-20 16:05:42 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL account/upload/banner3.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 E:\user\ijiaolian\v2\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 E:\user\ijiaolian\v2\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 E:\user\ijiaolian\v2\public\index.php(113): Kohana_Request->execute()
#3 {main}
2012-09-20 16:44:10 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\template.php [ 91 ]
2012-09-20 16:44:10 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\template.php [ 91 ]
--
#0 E:\user\ijiaolian\v2\application\views\template.php(91): Kohana_Core::error_handler(2, 'Invalid argumen...', 'E:\user\ijiaoli...', 91, Array)
#1 E:\user\ijiaolian\v2\kohana\system\classes\kohana\view.php(61): include('E:\user\ijiaoli...')
#2 E:\user\ijiaolian\v2\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('E:\user\ijiaoli...', Array)
#3 E:\user\ijiaolian\v2\kohana\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 E:\user\ijiaolian\v2\application\classes\controller\frame.php(171): Kohana_Controller_Template->after()
#5 [internal function]: Controller_Frame->after()
#6 E:\user\ijiaolian\v2\kohana\system\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Account))
#7 E:\user\ijiaolian\v2\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 E:\user\ijiaolian\v2\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 E:\user\ijiaolian\v2\public\index.php(113): Kohana_Request->execute()
#10 {main}
2012-09-20 17:03:08 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\admin\coach\edit.php [ 133 ]
2012-09-20 17:03:08 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\admin\coach\edit.php [ 133 ]
--
#0 E:\user\ijiaolian\v2\application\views\admin\coach\edit.php(133): Kohana_Core::error_handler(8, 'Trying to get p...', 'E:\user\ijiaoli...', 133, Array)
#1 E:\user\ijiaolian\v2\kohana\system\classes\kohana\view.php(61): include('E:\user\ijiaoli...')
#2 E:\user\ijiaolian\v2\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('E:\user\ijiaoli...', Array)
#3 E:\user\ijiaolian\v2\kohana\system\classes\kohana\view.php(228): Kohana_View->render()
#4 E:\user\ijiaolian\v2\kohana\modules\admin\views\admin\content.php(53): Kohana_View->__toString()
#5 E:\user\ijiaolian\v2\kohana\system\classes\kohana\view.php(61): include('E:\user\ijiaoli...')
#6 E:\user\ijiaolian\v2\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('E:\user\ijiaoli...', Array)
#7 E:\user\ijiaolian\v2\kohana\system\classes\kohana\view.php(228): Kohana_View->render()
#8 E:\user\ijiaolian\v2\kohana\modules\admin\classes\controller\admin.php(100): Kohana_View->__toString()
#9 E:\user\ijiaolian\v2\kohana\modules\admin\classes\controller\admin\crud.php(175): Controller_Admin->after()
#10 [internal function]: Controller_Admin_Crud->after()
#11 E:\user\ijiaolian\v2\kohana\system\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Admin_Coach))
#12 E:\user\ijiaolian\v2\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 E:\user\ijiaolian\v2\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 E:\user\ijiaolian\v2\public\index.php(113): Kohana_Request->execute()
#15 {main}