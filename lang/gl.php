<?php

$L = array();
$L["module_name"] = "File Upload";
$L["module_description"] = "This module provides a simple file upload field for use in your Form Tools fields.";

$L["word_help"] = "Help";

$L["phrase_reset_field_type"] = "Reset Field Type";

$L["text_help"] = "For more information on this module, please see the <a href=\"http://modules.formtools.org/field_type_tinymce/\" target=\"_blank\">help documentation</a> on the Form Tools site.";
$L["text_reset_field_type_desc"] = "This button below lets you reset this field type to the latest factory defaults. Generally you don't have to do this, but in case of a failed upgrade this is a failsafe way to ensure it's up to date.";
$L["text_intro_desc"] = "Use the <a href=\"{\$link}\">Settings &raquo; Files</a> page to define the default file upload settings. You can override those settings by editing any form field via the Edit Form &raquo; Fields tab.";

$L["notify_file_not_deleted_no_exist"] = "could not be deleted because it was not found at the location specified ({\$folder}).";
$L["notify_file_not_deleted_permissions"] = "could not be deleted because it didn't have the appropriate permissions ({\$folder}).";
$L["notify_file_not_deleted_unknown_error"] = "could not be deleted bfor an unknown reason ({\$folder}).";
$L["notify_field_type_reset"] = "The field type has been reset.";

$L["notify_file_deleted"] = "The file has been deleted.";
$L["notify_file_not_deleted_no_exist"] = "The file has not been deleted because it doesn't exist at the location expected. <a href=\"#\" onclick=\"{\$js_link}\">Click here</a> to ignore this error message and just remove the reference from the database.";
$L["notify_file_not_deleted_permissions"] = "The file has not been deleted because it has the wrong permissions. <a href=\"#\" onclick=\"{\$js_link}\">Click here</a> to ignore this error message and just remove the reference from the database.";
$L["notify_file_not_deleted_unknown_error"] = "There was an unknown error when trying to delete this file. <a href=\"#\" onclick=\"{\$js_link}\">Click here</a> to ignore this error message and just remove the reference from the database.";
$L["notify_file_too_large"] = "This file is too large. The file was {\$FILESIZE}KB, but the maximum permitted file upload size is {\$MAXFILESIZE}KB.";