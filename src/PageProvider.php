<?php
/** .-------------------------------------------------------------------
 * |  Software: [HDCMS framework]
 * |      Site: www.hdcms.com
 * |-------------------------------------------------------------------
 * |    Author: 向军 <2300071698@qq.com>
 * |    WeChat: aihoudun
 * | Copyright (c) 2012-2019, www.qq8044023.com. All Rights Reserved.
 * '-------------------------------------------------------------------*/
namespace qq8044023\page;

use qq8044023\framework\build\Provider;

class PageProvider extends Provider {

	//延迟加载
	public $defer = true;

	public function boot() {
	}

	public function register() {
		$this->app->single( 'Page', function ( $app ) {
			return Page::single( $app );
		} );
	}
}