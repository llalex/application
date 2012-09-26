<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2012-09-13 14:10:56 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL prototype/ico/hr.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-09-13 14:10:56 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL prototype/ico/hr.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 E:\user\ijiaolian\v2\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 E:\user\ijiaolian\v2\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 E:\user\ijiaolian\v2\public\index.php(113): Kohana_Request->execute()
#3 {main}