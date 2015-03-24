<?php
/**
 * @product OBX:Core Bitrix Module
 * @author Maksim S. Makarov aka pr0n1x
 * @license Affero GPLv3
 * @mailto rootfavell@gmail.com
 * @copyright 2015 Devtop
 */

namespace OBX\Core\Assistant;

interface IState {
	function linkStateTo(&$EXTERNAL);
	function getStatus($getFloat = false);
	function setStateKey($key, $data);
} 