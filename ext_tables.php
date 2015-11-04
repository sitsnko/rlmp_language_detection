<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}
$tempColumns = array (
				'disable_language_detection' => array (
					'exclude' => 1,
					'label'   => 'LLL:EXT:rlmp_language_detection/locallang_db.xml:sys_domain.disable_language_detection',
					'config'  => array (
						'type'    => 'check',
						'default' => '1'
					)
				)
);

t3lib_div::loadTCA("sys_domain");
t3lib_extMgm::addTCAcolumns("sys_domain",$tempColumns,1);
t3lib_extMgm::addToAllTCAtypes('sys_domain','disable_language_detection');

?>