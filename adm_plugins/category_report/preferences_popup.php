<?php
/**
 * Displays a pop-up window with instructions in the Preferences module
 *
 * @copyright 2004-2021 The Admidio Team
 * @see https://www.admidio.org/
 * @license https://www.gnu.org/licenses/gpl-2.0.html GNU General Public License v2.0 only
 *
 * Parameters:	none
 *
 ***********************************************************************************************
 */

require_once(__DIR__ . '/../../adm_program/system/common.php');

// only authorized user are allowed to start this module
if (!$gCurrentUser->isAdministrator())
{
	$gMessage->show($gL10n->get('SYS_NO_RIGHTS'));
}

// set headline of the script
$headline = $gL10n->get('PLG_CATEGORY_REPORT_CONFIGURATIONS');

header('Content-type: text/html; charset=utf-8');

echo '
<div class="modal-header">
    <h4 class="modal-title">'.$headline.'</h4>
</div>
<div class="modal-body">
	<strong>'.$gL10n->get('PLG_CATEGORY_REPORT_COL_DESC').'</strong><br/>
    '.$gL10n->get('PLG_CATEGORY_REPORT_COL_DESC_DESC').'<br/><br/>
    <strong>'.$gL10n->get('PLG_CATEGORY_REPORT_COLUMN_SELECTION').'</strong><br/>
	'.$gL10n->get('PLG_CATEGORY_REPORT_COLUMN_SELECTION_DESC').'<br/><br/>		
    <strong>'.$gL10n->get('PLG_CATEGORY_REPORT_DISPLAY_TEXT_MEMBERSHIP_YES').'</strong><br/>
	'.$gL10n->get('PLG_CATEGORY_REPORT_DISPLAY_TEXT_MEMBERSHIP_YES_DESC').'<br/><br/>
    <strong>'.$gL10n->get('PLG_CATEGORY_REPORT_DISPLAY_TEXT_MEMBERSHIP_NO').'</strong><br/>
	'.$gL10n->get('PLG_CATEGORY_REPORT_DISPLAY_TEXT_MEMBERSHIP_NO_DESC').'<br/><br/>
    <strong>'.$gL10n->get('PLG_CATEGORY_REPORT_ROLE_SELECTION').'</strong><br/>
	'.$gL10n->get('PLG_CATEGORY_REPORT_ROLE_SELECTION_CONF_DESC').'<br/><br/>
	<strong>'.$gL10n->get('PLG_CATEGORY_REPORT_CAT_SELECTION').'</strong><br/>
	'.$gL10n->get('PLG_CATEGORY_REPORT_CAT_SELECTION_CONF_DESC').'<br/><br/>	
    <strong>'.$gL10n->get('PLG_CATEGORY_REPORT_NUMBER_COL').'</strong><br/>
	'.$gL10n->get('PLG_CATEGORY_REPORT_NUMBER_COL_DESC').'
</div>';
