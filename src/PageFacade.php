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

use qq8044023\framework\build\Facade;

class PageFacade extends Facade {
	public static function getFacadeAccessor() {
		return 'Page';
	}
}