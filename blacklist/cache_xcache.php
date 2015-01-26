<?php

/**
* cache_xcache.php ($Revision: 1.2 $)
* 
* by hsur ( http://blog.cles.jp/np_cles )
* $Id: cache_xcache.php,v 1.2 2006/12/12 16:51:05 hsur Exp $
*/

function pbl_ipcache_write(){
	$key = sprintf("BL%u", ip2long(serverVar('REMOTE_ADDR')));

	// XCache
	xcache_set($key, 1, NP_BLACKLIST_CACHE_LIFE);
}

function pbl_ipcache_read(){
	$key = sprintf("BL%u", ip2long(serverVar('REMOTE_ADDR')));
	// XCache
	if( xcache_isset($key) ){
		return true;	
	}
	return false;
}

function pbl_ipcache_gc(){
}
