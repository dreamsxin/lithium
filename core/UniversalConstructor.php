<?php
/**
 * li₃: the most RAD framework for PHP (http://li3.me)
 *
 * Copyright 2016, Union of RAD. All rights reserved. This source
 * code is distributed under the terms of the BSD 3-Clause License.
 * The full license text can be found in the LICENSE.txt file.
 */

namespace lithium\core;

/**
 * Universal constructor: Any class which defines a `__construct()` method should take
 * exactly one parameter (`$config`), and that parameter should always be an array. Any settings
 * passed to the constructor will be stored in the `$_config` property of the object.
 */
interface UniversalConstructor {

	public function __construct(array $config);
}

?>