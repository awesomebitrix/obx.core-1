<?php
/**
 * @product OBX:Core Bitrix Module
 * @author Maksim S. Makarov aka pr0n1x
 * @license Affero GPLv3
 * @mailto rootfavell@gmail.com
 * @copyright 2015 Devtop
 */

namespace OBX\Core\DBEntityEditor;


interface IConfig {
	function getModuleID();
	function getEntityID();
	function getNamespace();
	function getClass();
	function getAlias();
	function getTableName();
	function getLangPrefix();
	function getLangMessages();
	function getFieldsList($bOWnFields = false);
	function getField($fieldCode);
	function getIndex();
	function getUnique();
	function getDefaultSort();
	function getDefaultGroupBy();
	function getReferences();
	function isReadSuccess();
	function getCreateTableCode();
	function getConfigContent();
	function getConfigPath();
	function getClassPath();
	function saveConfigFile($path = null);
}
