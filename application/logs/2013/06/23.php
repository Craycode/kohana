<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-06-23 16:11:33 --- CRITICAL: ErrorException [ 2 ]: include(): Filename cannot be empty ~ MODPATH\kostache\init.php [ 4 ] in J:\wamp\www\kohana\modules\kostache\init.php:4
2013-06-23 16:11:33 --- DEBUG: #0 J:\wamp\www\kohana\modules\kostache\init.php(4): Kohana_Core::error_handler(2, 'include(): File...', 'J:\wamp\www\koh...', 4, Array)
#1 J:\wamp\www\kohana\modules\kostache\init.php(4): include()
#2 J:\wamp\www\kohana\system\classes\Kohana\Core.php(602): require_once('J:\wamp\www\koh...')
#3 J:\wamp\www\kohana\application\bootstrap.php(120): Kohana_Core::modules(Array)
#4 J:\wamp\www\kohana\index.php(102): require('J:\wamp\www\koh...')
#5 {main} in J:\wamp\www\kohana\modules\kostache\init.php:4
2013-06-23 16:29:12 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: class ~ APPPATH\classes\Controller\Welcome.php [ 7 ] in J:\wamp\www\kohana\application\classes\Controller\Welcome.php:7
2013-06-23 16:29:12 --- DEBUG: #0 J:\wamp\www\kohana\application\classes\Controller\Welcome.php(7): Kohana_Core::error_handler(8, 'Undefined varia...', 'J:\wamp\www\koh...', 7, Array)
#1 J:\wamp\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 J:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 J:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 J:\wamp\www\kohana\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 J:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in J:\wamp\www\kohana\application\classes\Controller\Welcome.php:7
2013-06-23 16:29:38 --- CRITICAL: ErrorException [ 1 ]: Class 'View_Welcome' not found ~ APPPATH\classes\Controller\Welcome.php [ 7 ] in :
2013-06-23 16:29:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-06-23 16:30:14 --- CRITICAL: ErrorException [ 1 ]: Class 'View_Welcome' not found ~ APPPATH\classes\Controller\Welcome.php [ 7 ] in :
2013-06-23 16:30:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-06-23 16:30:48 --- CRITICAL: ErrorException [ 2 ]: Missing argument 1 for Kohana_Kostache::__construct(), called in J:\wamp\www\kohana\application\classes\Controller\Welcome.php on line 7 and defined ~ MODPATH\kostache\classes\Kohana\Kostache.php [ 34 ] in J:\wamp\www\kohana\modules\kostache\classes\Kohana\Kostache.php:34
2013-06-23 16:30:48 --- DEBUG: #0 J:\wamp\www\kohana\modules\kostache\classes\Kohana\Kostache.php(34): Kohana_Core::error_handler(2, 'Missing argumen...', 'J:\wamp\www\koh...', 34, Array)
#1 J:\wamp\www\kohana\application\classes\Controller\Welcome.php(7): Kohana_Kostache->__construct()
#2 J:\wamp\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 J:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 J:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 J:\wamp\www\kohana\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 J:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in J:\wamp\www\kohana\modules\kostache\classes\Kohana\Kostache.php:34
2013-06-23 18:14:25 --- CRITICAL: ErrorException [ 4096 ]: Argument 1 passed to Symfony\Component\OptionsResolver\OptionsResolver::setOptional() must be of the type array, string given, called in J:\wamp\www\kohana\application\classes\Controller\Welcome.php on line 10 and defined ~ DOCROOT\vendor\symfony\options-resolver\Symfony\Component\OptionsResolver\OptionsResolver.php [ 103 ] in J:\wamp\www\kohana\vendor\symfony\options-resolver\Symfony\Component\OptionsResolver\OptionsResolver.php:103
2013-06-23 18:14:25 --- DEBUG: #0 J:\wamp\www\kohana\vendor\symfony\options-resolver\Symfony\Component\OptionsResolver\OptionsResolver.php(103): Kohana_Core::error_handler(4096, 'Argument 1 pass...', 'J:\wamp\www\koh...', 103, Array)
#1 J:\wamp\www\kohana\application\classes\Controller\Welcome.php(10): Symfony\Component\OptionsResolver\OptionsResolver->setOptional('sections')
#2 J:\wamp\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 J:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 J:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 J:\wamp\www\kohana\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 J:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in J:\wamp\www\kohana\vendor\symfony\options-resolver\Symfony\Component\OptionsResolver\OptionsResolver.php:103
2013-06-23 18:14:49 --- CRITICAL: ErrorException [ 4096 ]: Argument 1 passed to Symfony\Component\OptionsResolver\OptionsResolver::setOptional() must be of the type array, string given, called in J:\wamp\www\kohana\application\classes\Controller\Welcome.php on line 10 and defined ~ DOCROOT\vendor\symfony\options-resolver\Symfony\Component\OptionsResolver\OptionsResolver.php [ 103 ] in J:\wamp\www\kohana\vendor\symfony\options-resolver\Symfony\Component\OptionsResolver\OptionsResolver.php:103
2013-06-23 18:14:49 --- DEBUG: #0 J:\wamp\www\kohana\vendor\symfony\options-resolver\Symfony\Component\OptionsResolver\OptionsResolver.php(103): Kohana_Core::error_handler(4096, 'Argument 1 pass...', 'J:\wamp\www\koh...', 103, Array)
#1 J:\wamp\www\kohana\application\classes\Controller\Welcome.php(10): Symfony\Component\OptionsResolver\OptionsResolver->setOptional('sections')
#2 J:\wamp\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 J:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 J:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 J:\wamp\www\kohana\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 J:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in J:\wamp\www\kohana\vendor\symfony\options-resolver\Symfony\Component\OptionsResolver\OptionsResolver.php:103
2013-06-23 18:15:22 --- CRITICAL: ErrorException [ 4096 ]: Argument 1 passed to Symfony\Component\OptionsResolver\OptionsResolver::setOptional() must be of the type array, string given, called in J:\wamp\www\kohana\application\classes\Controller\Welcome.php on line 10 and defined ~ DOCROOT\vendor\symfony\options-resolver\Symfony\Component\OptionsResolver\OptionsResolver.php [ 103 ] in J:\wamp\www\kohana\vendor\symfony\options-resolver\Symfony\Component\OptionsResolver\OptionsResolver.php:103
2013-06-23 18:15:22 --- DEBUG: #0 J:\wamp\www\kohana\vendor\symfony\options-resolver\Symfony\Component\OptionsResolver\OptionsResolver.php(103): Kohana_Core::error_handler(4096, 'Argument 1 pass...', 'J:\wamp\www\koh...', 103, Array)
#1 J:\wamp\www\kohana\application\classes\Controller\Welcome.php(10): Symfony\Component\OptionsResolver\OptionsResolver->setOptional('sections')
#2 J:\wamp\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 J:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 J:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 J:\wamp\www\kohana\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 J:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in J:\wamp\www\kohana\vendor\symfony\options-resolver\Symfony\Component\OptionsResolver\OptionsResolver.php:103
2013-06-23 18:16:08 --- CRITICAL: ErrorException [ 4096 ]: Argument 1 passed to Symfony\Component\OptionsResolver\OptionsResolver::setOptional() must be of the type array, string given, called in J:\wamp\www\kohana\application\classes\Controller\Welcome.php on line 10 and defined ~ DOCROOT\vendor\symfony\options-resolver\Symfony\Component\OptionsResolver\OptionsResolver.php [ 103 ] in J:\wamp\www\kohana\vendor\symfony\options-resolver\Symfony\Component\OptionsResolver\OptionsResolver.php:103
2013-06-23 18:16:08 --- DEBUG: #0 J:\wamp\www\kohana\vendor\symfony\options-resolver\Symfony\Component\OptionsResolver\OptionsResolver.php(103): Kohana_Core::error_handler(4096, 'Argument 1 pass...', 'J:\wamp\www\koh...', 103, Array)
#1 J:\wamp\www\kohana\application\classes\Controller\Welcome.php(10): Symfony\Component\OptionsResolver\OptionsResolver->setOptional('sections')
#2 J:\wamp\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 J:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 J:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 J:\wamp\www\kohana\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 J:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in J:\wamp\www\kohana\vendor\symfony\options-resolver\Symfony\Component\OptionsResolver\OptionsResolver.php:103
2013-06-23 18:16:19 --- CRITICAL: ErrorException [ 4096 ]: Argument 1 passed to Symfony\Component\OptionsResolver\OptionsResolver::setOptional() must be of the type array, string given, called in J:\wamp\www\kohana\application\classes\Controller\Welcome.php on line 10 and defined ~ DOCROOT\vendor\symfony\options-resolver\Symfony\Component\OptionsResolver\OptionsResolver.php [ 103 ] in J:\wamp\www\kohana\vendor\symfony\options-resolver\Symfony\Component\OptionsResolver\OptionsResolver.php:103
2013-06-23 18:16:19 --- DEBUG: #0 J:\wamp\www\kohana\vendor\symfony\options-resolver\Symfony\Component\OptionsResolver\OptionsResolver.php(103): Kohana_Core::error_handler(4096, 'Argument 1 pass...', 'J:\wamp\www\koh...', 103, Array)
#1 J:\wamp\www\kohana\application\classes\Controller\Welcome.php(10): Symfony\Component\OptionsResolver\OptionsResolver->setOptional('sections')
#2 J:\wamp\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 J:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 J:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 J:\wamp\www\kohana\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 J:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in J:\wamp\www\kohana\vendor\symfony\options-resolver\Symfony\Component\OptionsResolver\OptionsResolver.php:103
2013-06-23 19:16:15 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '=' ~ APPPATH\classes\View\Welcome.php [ 21 ] in :
2013-06-23 19:16:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-06-23 19:20:27 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: option ~ APPPATH\classes\View\Welcome.php [ 27 ] in J:\wamp\www\kohana\application\classes\View\Welcome.php:27
2013-06-23 19:20:27 --- DEBUG: #0 J:\wamp\www\kohana\application\classes\View\Welcome.php(27): Kohana_Core::error_handler(8, 'Undefined varia...', 'J:\wamp\www\koh...', 27, Array)
#1 J:\wamp\www\kohana\modules\kostache\vendor\mustache\src\Mustache\Context.php(138): View_Welcome->options()
#2 J:\wamp\www\kohana\modules\kostache\vendor\mustache\src\Mustache\Context.php(110): Mustache_Context->findVariableInStack('options', Array)
#3 J:\wamp\www\kohana\application\cache\mustache\__Mustache_05b16923beba22e3a506b3639a75d6bc.php(10): Mustache_Context->findDot('options.section...')
#4 J:\wamp\www\kohana\modules\kostache\vendor\mustache\src\Mustache\Template.php(62): __Mustache_05b16923beba22e3a506b3639a75d6bc->renderInternal(Object(Mustache_Context))
#5 J:\wamp\www\kohana\modules\kostache\classes\Kohana\Kostache.php(48): Mustache_Template->render(Object(View_Welcome))
#6 J:\wamp\www\kohana\application\classes\Controller\Welcome.php(10): Kohana_Kostache->render(Object(View_Welcome))
#7 J:\wamp\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#8 [internal function]: Kohana_Controller->execute()
#9 J:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#10 J:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 J:\wamp\www\kohana\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#12 J:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#13 {main} in J:\wamp\www\kohana\application\classes\View\Welcome.php:27
2013-06-23 19:20:40 --- CRITICAL: ErrorException [ 4096 ]: Argument 2 passed to Symfony\Component\OptionsResolver\Options::setNormalizer() must be an instance of Closure, none given, called in J:\wamp\www\kohana\application\classes\View\Welcome.php on line 32 and defined ~ DOCROOT\vendor\symfony\options-resolver\Symfony\Component\OptionsResolver\Options.php [ 117 ] in J:\wamp\www\kohana\vendor\symfony\options-resolver\Symfony\Component\OptionsResolver\Options.php:117
2013-06-23 19:20:40 --- DEBUG: #0 J:\wamp\www\kohana\vendor\symfony\options-resolver\Symfony\Component\OptionsResolver\Options.php(117): Kohana_Core::error_handler(4096, 'Argument 2 pass...', 'J:\wamp\www\koh...', 117, Array)
#1 J:\wamp\www\kohana\application\classes\View\Welcome.php(32): Symfony\Component\OptionsResolver\Options->setNormalizer(Object(Closure))
#2 J:\wamp\www\kohana\modules\kostache\vendor\mustache\src\Mustache\Context.php(138): View_Welcome->options()
#3 J:\wamp\www\kohana\modules\kostache\vendor\mustache\src\Mustache\Context.php(110): Mustache_Context->findVariableInStack('options', Array)
#4 J:\wamp\www\kohana\application\cache\mustache\__Mustache_05b16923beba22e3a506b3639a75d6bc.php(10): Mustache_Context->findDot('options.section...')
#5 J:\wamp\www\kohana\modules\kostache\vendor\mustache\src\Mustache\Template.php(62): __Mustache_05b16923beba22e3a506b3639a75d6bc->renderInternal(Object(Mustache_Context))
#6 J:\wamp\www\kohana\modules\kostache\classes\Kohana\Kostache.php(48): Mustache_Template->render(Object(View_Welcome))
#7 J:\wamp\www\kohana\application\classes\Controller\Welcome.php(10): Kohana_Kostache->render(Object(View_Welcome))
#8 J:\wamp\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#9 [internal function]: Kohana_Controller->execute()
#10 J:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#11 J:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 J:\wamp\www\kohana\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 J:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#14 {main} in J:\wamp\www\kohana\vendor\symfony\options-resolver\Symfony\Component\OptionsResolver\Options.php:117