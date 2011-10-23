<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');

// labels
$lang['header']			=	'الخطوة الأولى: تهيئة قاعدة البيانات والخادم';
$lang['intro_text']		=	'قبل أن نتمكن من التحقق من قاعدة البيانات، يجب أن نعرف مكانها وبيانات الإتصال بها.';

$lang['db_settings']	=	'إعدادات قاعدة البيانات';
$lang['db_text']		=	'كي يتمكن برنامج التثبيت من التحقق من إصدار خادم MySQL يجب عليك إدخال بيانات اسم المضيف، وإسم المستخدم وكلمة السرّ في الاستمارة أدناه. ستستخدم هذه الإعدادات عند تثبيت قاعدة البيانات.';

$lang['server']			=	'الخادم';
$lang['username']		=	'إسم المستخدم';
$lang['password']		=	'كلمة السرّ';
$lang['portnr']			=	'المنفذ';
$lang['server_settings']=	'إعدادات الخادم';
$lang['httpserver']		=	'خادم HTTP';
$lang['httpserver_text']=	'PyroCMS requires a HTTP Server to display dynamic content when a user goes to your website. It looks like you already have one by the fact that you can see this page, but if know exactly which type then PyroCMS can configure itself even better. If you do not know what any of this means just ignore it and carry on with the installation.'; #translate
$lang['rewrite_fail']	=	'اخترت "(أباتشي مع mod_rewrite)" إلا أننا لم نتمكن من تحديد ما إذا كانت وحدة mod_rewrite مُفعلة على هذا الخادم. رجاءً اسأل مضيف الخادم إن كانت هذه الوحدة مفعّلة أم لا أو قم بتفعيلها على مسؤوليتك.';
$lang['mod_rewrite']	=	'اخترت "(أباتشي مع mod_rewrite)" إلا أن هذه الوحدة غير مفعّلة. رجاءً اطلب من مضيف الخادم تفعيلها أو قم بتثبيت PyroCMS باستخدام خيار "أباتشي (بدون mod_rewrite)".';
$lang['step2']			=	'الخطوة الثانية';

// messages
$lang['db_success']		=	'تم اختبار إعدادات قاعدة البيانات بنجاح.';
$lang['db_failure']		=	'حدثت مشكلة في الاتصال بقاعدة البيانات: ';
