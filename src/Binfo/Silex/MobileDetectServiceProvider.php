<?php

/*
* This file is part of MobileDetectServiceProvider.
*
* (c) Lhassan Baazzi <baazzilhassan@gmail.com>
*
* For the full copyright and license information, please view the LICENSE
* file that was distributed with this source code.
*/

namespace Binfo\Silex;

use Silex\Application;
use Silex\ServiceProviderInterface;

class MobileDetectServiceProvider implements ServiceProviderInterface
{

	public function register(Application $app)
	{
		$app['mobile_detect'] = $app->share(function() {
			return new \Mobile_Detect();
		});
	}

	public function boot(Application $app)
	{

	}
}