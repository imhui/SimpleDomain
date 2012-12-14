<?php

/**
 * [rand_str 生成随机字符串]
 *
 * @param [int]   $length [目标字符串长度]
 * @param string  $type   [类型， all:所有 num:数字 lower:小写 upper:大写]
 * @return [string]
 */
function rand_str( $length, $type='all' ) {
	$nums = '0123456789';
	$lowers = 'abcdefghijklmnopqrstuvwxyz';
	$uppers = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
	if ( $type == 'all' ) {
		$src = $nums.$lowers.$uppers;
	} else {
		$src = '';
		if ( strpos( $type, 'num' ) !== false )
			$src .= $nums;
		if ( strpos( $type, 'lower' ) !== false )
			$src .= $lowers;
		if ( strpos( $type, 'upper' ) !== false )
			$src .= $uppers;
	}
	return $src? substr( str_shuffle( $src ), 0, $length ) : $src;
}


/**
 * [has_prefix 检查字符串前缀]
 *
 * @param [string] $haystack [字符串]
 * @param [string] $needle   [前缀]
 * @return boolean
 */
function has_prefix( $haystack, $needle ) {
	$length = strlen( $needle );
	return substr( $haystack, 0, $length ) === $needle;
}


/**
 * [has_suffix 检查字符串后缀]
 *
 * @param [string] $haystack [字符串]
 * @param [string] $needle   [后缀]
 * @return boolean
 */
function has_suffix( $haystack, $needle ) {
	$length = strlen( $needle );
	$start  = $length * -1; //negative
	return substr( $haystack, $start ) === $needle;
}



?>
