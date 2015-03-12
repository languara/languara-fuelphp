<?php
// Languara CodeIgniter Plugin Configuration
// For more information visit http://languara.com
// (c) 2015 - Languara.  All rights reserved.
//

return array(
"endpoints"	=> array(
    "translation"			=> "api/translation/find_all.json",
    "resource"				=> "api/resource/find_all.json",
    "resource_group"		=> "api/resourcegroup/find_all.json",
    "project_locale"		=> "api/project/locales.json",
    "upload_translations"	=> "api/project/process_batch_data",
    "register"              => "api/user/register.json",
    "get_translation_quote" => "api/project/get_project_translation_price",
    "translate_project"     => "api/project/order_project_translation",
    ),
"config_files" => array (
  'project_config' => '/languara/config/languara.php',
  'static_resources' => '/languara/config/static_resources.php',
),
"origin_site"  => "https://languara.com/",
"platform" => "FuelPHP",
"messages" => array(
    // error messages
    'error_language_location' => 'ERROR: Language location is not set correctly, check the config file or download a new config file from Languara and replace the old one!',
    'error_language_dir_missing' => 'ERROR: Language directory not found, check the location of the language directory in the config file and try again!',
    'error_malformed_resource_cd' => 'ERROR: Some resource codes do not comply to the Languara guidelines and will not be processed: ',
    'error_action_aborted' => 'ERROR: Action aborted by user!',
    'error_plugin_problem' => 'ERROR: There was a problem with the plugin, re-download the plugin and try again!',
    'error_language_dir_not_writable' => 'ERROR: Language directory is not writable, make sure the proper permission are set!',
    'error_project_no_languages' => 'ERROR: Project has no languages, add some languages on Languara and then try pulling your content!',
    'error_config_file_error' => 'ERROR: Could not create the config file, make sure the config folder is writable!',
    'error_retrieving_endpoint' => 'ERROR: Failed to retrieving endpoint. Check your local configuration and make sure the endpoints array is correctly defined or just download a new config file from the server. Endpoint: ',
    'error_general_request_error' => 'ERROR: There was a error processing your request, please try again. If that does not work contact the administrators for more information!',
    'error_config_file_help_info' => 'Make sure your local config file is configured correctly. If you are not sure how to do that generate a new plugin files on Languara and replace the ones you have on your server at the moment!',
    'error_languara_servers_respond' => 'Languara\'s servers responded with an error:',
    'error_curl_not_enabled' => 'ERROR: CURL is not enabled for translation service, please enable curl and try again!',
    'error_storage_engine' => 'ERROR: Storage engine is not supported!',
    'error_no_local_content' => 'ERROR: Looks like you don\'t have any language resources defined in ',
    
    // notice messages
    'notice_retrieve_data' => 'Retrieving local data!',
    'notice_resource_cd_help_link' => 'Go to this link and check how resource codes should be formed!',
    'notice_pushing_content' => 'Pushing locales and translations to the Languara servers!',
    'notice_retrieve_languages' => 'Retrieving all languages from the server!',
    'notice_languages_downloaded' => 'Languages downloaded from the server: ',
    'notice_resource_groups_downloaded' => 'Resource groups downloaded from the server: ',
    'notice_translations_downloaded' => 'Translations downloaded from the server: ',
    'notice_retrieve_resource_groups' => 'Retrieving all resource groups from the server!',
    'notice_retrieve_translations' => 'Retrieving all translations from the server!',
    'notice_backing_up_data' => 'Backing up local data!',
    'notice_removing_files' => 'Removing local files!',
    'notice_adding_content' => 'Adding content to local files!',
    'notice_languages_pushed' => 'Languages pushed to the server',
    'notice_resource_groups_pushed' => 'Resource groups pushed to the server',
    'notice_translations_pushed' => 'Translations pushed to the server',
    'notice_available_commands' => 'Available commands:',
    'notice_push_command_info' => '   php oil refine languara:push            This command is used for uploading content to Languaras servers!',
    'notice_pull_command_info' => '   php oil refine languara:pull            This command is used for downloading content from Languaras servers!',
    'notice_register_command_info' => '   php oil refine languara:register        Use this command if you wish to register a new user on http://languara.com',
    'notice_starting_upload' => 'Starting upload process!',
    'notice_starting_download' => 'Starting download process!',
    'notice_register_command' => 'Completing the following process will register you for an account on http://languara.com!',
    'notice_start_translate' => 'Starting the translation process:',
    'notice_no_account_associated' => 'You need to have a user registered on http://languara.com before you can continue!',
    
    // success messages
    'success_upload_successful' => 'Upload successful!',
    'success_download_successful' => 'Download successful!',
    'success_registration_completed' => 'Registration completed successfully!',
    'success_content_translated_successfully' => 'Your content was translated successfully!',
    'success_translate_completed' => 'Translation process finished successfully!',
    
    // prompt messages
    'prompt_proceed_with_upload' => 'Do you want to proceed with uploading of the content [yes/no]? ',
    'prompt_enter_first_name' => 'Enter you first name: ',
    'prompt_first_name_validation' => 'First name should be only letters and white spaces!',
    'prompt_enter_last_name' => 'Enter you last name: ',
    'prompt_last_name_validation' => 'Last name should be only letters and white spaces!',
    'prompt_enter_email' => 'Enter you email: ',
    'prompt_email_validation' => 'Enter a valid email!',
    'prompt_create_language_dir' => 'Do you want me to create the language folder for you',
    'prompt_push_content' => 'Do you want to upload your content first [yes/no]? ',
    'prompt_pull_content' => 'Do you want to download your content from the server [yes/no]? ',
    'prompt_continue_translating' => 'Do you want to proceed translating with the current costs [yes/no]? ',
    'prompt_register_before_continue' => 'You need to register before continuing [yes/no]? ',
)
);
