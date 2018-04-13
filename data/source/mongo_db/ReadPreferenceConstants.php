<?php
/**
 * li₃: the most RAD framework for PHP (http://li3.me)
 *
 * Copyright 2010, Union of RAD. All rights reserved. This source
 * code is distributed under the terms of the BSD 3-Clause License.
 * The full license text can be found in the LICENSE.txt file.
 */

namespace lithium\data\source\mongo_db;

/**
 * This File is necessary, due to a change in the MongoDB ReadPreference Class.
 *
 * Read preference describes how MongoDB clients route read operations to the members
 * of a replica set. The PHP Driver file contains integer based ReadPreferences, whereas
 * the Driver itself needs string-based ReadPreferences, which is the reason, this very file
 * exists.
 *
 * IMPORTANT
 * All read preference modes except primary may return stale data because secondaries replicate
 * operations from the primary with some delay. Ensure that your application can tolerate stale
 * data if you choose to use a non-primary mode.
 *
 * @see lithium\data\source\MongoDb::__construct()
 * @link https://pecl.php.net/package/mongodb
 * @link http://www.mongodb.org/
 * @link https://secure.php.net/manual/en/class.mongodb-driver-readpreference.php
 * @link https://docs.mongodb.com/manual/core/read-preference/#read-preference-modes
 * @link https://docs.mongodb.com/manual/core/read-preference/#edge-cases-2-primaries
 * @link https://jira.mongodb.org/browse/PHPC-887
 * @link https://jira.mongodb.org/browse/PHPC-1020
 */
class ReadPreferenceConstants {

	/**
	 * Default mode. All operations read from the current replica set primary.
	 */
	const RP_PRIMARY = "primary";

	/**
	 * In most situations, operations read from the primary but if it is
	 * unavailable, operations read from secondary members.
	 */
	const RP_PRIMARY_PREFERRED = "primaryPreferred";

	/**
	 * All operations read from the secondary members of the replica set.
	 */
	const RP_SECONDARY = "secondary";

	/**
	 * In most situations, operations read from secondary members but if no
	 * secondary members are available, operations read from the primary.
	 */
	const RP_SECONDARY_PREFERRED = "secondaryPreferred";

	/**
	 * Operations read from member of the replica set with the least network
	 * latency, irrespective of the member’s type.
	 */
	const RP_NEAREST = "nearest";

}
