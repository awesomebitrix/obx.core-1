<?php
/**
 * @product OBX:Core Bitrix Module
 * @author Maksim S. Makarov aka pr0n1x
 * @license Affero GPLv3
 * @mailto rootfavell@gmail.com
 * @copyright 2015 Devtop
 */

namespace OBX\Core\DBEntityEditor;


interface IGenerator {
	function __construct(IConfig $config);
	function getConfig();
	function generateEntityClass();
	function saveEntityClass($path = null);
}