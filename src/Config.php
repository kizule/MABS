<?php
/**
 * Load config object for MABS
 *
 * Copyright © 2018 NicheWork, LLC
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 * @author Mark A. Hershberger <mah@nichework.com>
 */

namespace MediaWiki\Extension\MABS;

use GlobalVarConfig;

class Config extends GlobalVarConfig {

	// phpcs:ignore PSR12.Properties.ConstantVisibility.NotFound
	const REPO = 'Repo';

	public function __construct() {
		parent::__construct( 'MABS' );
	}

	/**
	 * Factory method for MediaWikiServices
	 *
	 * @return Config
	 */
	public static function newInstance() {
		return new self();
	}
}
