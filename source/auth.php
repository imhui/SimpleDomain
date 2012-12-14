<?php

header( "Content-type: text/html; charset=utf-8" );

include 'config/auth_config.php';
if ( !isset( $_SERVER['PHP_AUTH_USER'] ) || $_SERVER['PHP_AUTH_USER']!=PHP_AUTH_USER || $_SERVER['PHP_AUTH_PW']!=PHP_AUTH_PW ) {
	header( 'WWW-Authenticate: Basic realm="My Protection"' );
	header( 'HTTP/1.0 401 Unauthorized' );
	exit( '请认证' );
}

if ( !defined( 'ACCESS_TOKEN' ) ) {
	exit( 'Access Denied' );
	exit;
}
