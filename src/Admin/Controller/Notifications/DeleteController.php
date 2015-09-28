<?php
/**
 * Part of phoenix project.
 *
 * @copyright  Copyright (C) 2015 {ORGANIZATION}. All rights reserved.
 * @license    GNU General Public License version 2 or later.
 */

namespace Admin\Controller\Notifications;

use Phoenix\Controller\Batch\DeleteController as PhoenixDeleteController;

/**
 * The DeleteController class.
 *
 * @since  {DEPLOY_VERSION}
 */
class DeleteController extends PhoenixDeleteController
{
	/**
	 * Property name.
	 *
	 * @var  string
	 */
	protected $name = 'notifications';

	/**
	 * Property itemName.
	 *
	 * @var  string
	 */
	protected $itemName = 'notification';

	/**
	 * Property listName.
	 *
	 * @var  string
	 */
	protected $listName = 'notifications';
}