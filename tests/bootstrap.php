<?php
declare(strict_types = 1);
/**
 * Immutable object library
 *
 * @copyright Copyright 2019 Lisachenko Alexander <lisachenko.it@gmail.com>
 *
 * This source file is subject to the license that is bundled
 * with this source code in the file LICENSE.
 */

use Immutable\ImmutableHandler;
use ZEngine\Core;

ini_set('display_errors', 'on');

include __DIR__ . '/../vendor/autoload.php';

// Library initialization by hands
Core::init();
ImmutableHandler::install();
