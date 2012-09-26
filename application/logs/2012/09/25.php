<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2012-09-25 13:41:01 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\classes\model\district.php [ 86 ]
2012-09-25 13:41:01 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\classes\model\district.php [ 86 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-25 13:42:22 --- ERROR: ErrorException [ 4096 ]: Argument 1 passed to Model_Coach::init_location() must be an instance of Model_District, none given, called in E:\user\ijiaolian\v2\application\classes\model\coach.php on line 74 and defined ~ APPPATH\classes\model\coach.php [ 109 ]
2012-09-25 13:42:22 --- STRACE: ErrorException [ 4096 ]: Argument 1 passed to Model_Coach::init_location() must be an instance of Model_District, none given, called in E:\user\ijiaolian\v2\application\classes\model\coach.php on line 74 and defined ~ APPPATH\classes\model\coach.php [ 109 ]
--
#0 E:\user\ijiaolian\v2\application\classes\model\coach.php(109): Kohana_Core::error_handler(4096, 'Argument 1 pass...', 'E:\user\ijiaoli...', 109, Array)
#1 E:\user\ijiaolian\v2\application\classes\model\coach.php(74): Model_Coach->init_location()
#2 E:\user\ijiaolian\v2\kohana\modules\admin\classes\controller\admin\crud.php(96): Model_Coach->save()
#3 [internal function]: Controller_Admin_Crud->action_update()
#4 E:\user\ijiaolian\v2\kohana\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Coach))
#5 E:\user\ijiaolian\v2\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 E:\user\ijiaolian\v2\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 E:\user\ijiaolian\v2\public\index.php(113): Kohana_Request->execute()
#8 {main}
2012-09-25 13:43:19 --- ERROR: Kohana_Exception [ 0 ]: The location property does not exist in the Model_Coach class ~ MODPATH\orm\classes\kohana\orm.php [ 692 ]
2012-09-25 13:43:19 --- STRACE: Kohana_Exception [ 0 ]: The location property does not exist in the Model_Coach class ~ MODPATH\orm\classes\kohana\orm.php [ 692 ]
--
#0 E:\user\ijiaolian\v2\kohana\modules\orm\classes\kohana\orm.php(643): Kohana_ORM->set('location', '???????????????...')
#1 E:\user\ijiaolian\v2\application\classes\model\coach.php(74): Kohana_ORM->__set('location', '???????????????...')
#2 E:\user\ijiaolian\v2\kohana\modules\admin\classes\controller\admin\crud.php(96): Model_Coach->save()
#3 [internal function]: Controller_Admin_Crud->action_update()
#4 E:\user\ijiaolian\v2\kohana\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Coach))
#5 E:\user\ijiaolian\v2\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 E:\user\ijiaolian\v2\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 E:\user\ijiaolian\v2\public\index.php(113): Kohana_Request->execute()
#8 {main}
2012-09-25 13:44:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: avatar/c4c/c4ca4238a0b923820dcc509a6f75849b.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-25 13:44:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: avatar/c4c/c4ca4238a0b923820dcc509a6f75849b.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 E:\user\ijiaolian\v2\public\index.php(113): Kohana_Request->execute()
#1 {main}
2012-09-25 14:11:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: avatar/c4c/c4ca4238a0b923820dcc509a6f75849b.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-25 14:11:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: avatar/c4c/c4ca4238a0b923820dcc509a6f75849b.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 E:\user\ijiaolian\v2\public\index.php(113): Kohana_Request->execute()
#1 {main}
2012-09-25 16:13:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL unittest was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-09-25 16:13:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL unittest was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 E:\user\ijiaolian\v2\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 E:\user\ijiaolian\v2\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 E:\user\ijiaolian\v2\public\index.php(113): Kohana_Request->execute()
#3 {main}
2012-09-25 16:30:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL unittest was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-09-25 16:30:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL unittest was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 E:\user\ijiaolian\v2\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 E:\user\ijiaolian\v2\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 E:\user\ijiaolian\v2\public\index.php(113): Kohana_Request->execute()
#3 {main}
2012-09-25 16:32:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kohana/modules/unittest ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-25 16:32:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kohana/modules/unittest ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 E:\user\ijiaolian\v2\public\index.php(113): Kohana_Request->execute()
#1 {main}
2012-09-25 16:50:26 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL unittest was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-09-25 16:50:26 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL unittest was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 E:\user\ijiaolian\v2\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 E:\user\ijiaolian\v2\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 E:\user\ijiaolian\v2\public\index.php(113): Kohana_Request->execute()
#3 {main}
2012-09-25 16:50:28 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL unittest was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-09-25 16:50:28 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL unittest was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 E:\user\ijiaolian\v2\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 E:\user\ijiaolian\v2\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 E:\user\ijiaolian\v2\public\index.php(113): Kohana_Request->execute()
#3 {main}
2012-09-25 16:58:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: avatar/c4c/c4ca4238a0b923820dcc509a6f75849b.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-25 16:58:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: avatar/c4c/c4ca4238a0b923820dcc509a6f75849b.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 E:\user\ijiaolian\v2\public\index.php(113): Kohana_Request->execute()
#1 {main}
2012-09-25 17:00:35 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL unittest was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-09-25 17:00:35 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL unittest was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 E:\user\ijiaolian\v2\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 E:\user\ijiaolian\v2\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 E:\user\ijiaolian\v2\public\index.php(113): Kohana_Request->execute()
#3 {main}
2012-09-25 17:00:50 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL unittest was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-09-25 17:00:50 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL unittest was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 E:\user\ijiaolian\v2\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 E:\user\ijiaolian\v2\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 E:\user\ijiaolian\v2\public\index.php(113): Kohana_Request->execute()
#3 {main}