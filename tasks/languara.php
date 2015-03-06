<?php

namespace Fuel\Tasks;

use \Languara\Wrapper\Languara as LanguaraWrapper;

class Languara
{
    public function run()
    {
        $languara = new LanguaraWrapper();
        
        \Cli::write($languara->get_message_text('notice_available_commands'));
        \Cli::write($languara->get_message_text('notice_push_command_info'));
        \Cli::write($languara->get_message_text('notice_pull_command_info'));
        \Cli::write($languara->get_message_text('notice_register_command_info'));
    }
    
    public static function push()
    {
        $languara = new LanguaraWrapper();
        
        // this is a hack, because FuelPHP buffers all response before printing
        // in the command line, unless you use the frameworks methods for outputing
        while (@ob_end_flush());
        
        echo PHP_EOL;
        $languara->print_message('notice_starting_upload', 'SUCCESS');
        echo PHP_EOL;
        
        try
        {
            $languara->upload_local_translations();            
        } 
        catch (\Exception $ex) 
        {
            echo PHP_EOL;
            ($languara->print_message($ex->getMessage(), 'FAILURE'));
            echo PHP_EOL;
            return;
        }
        
        echo PHP_EOL;
        ($languara->print_message('success_upload_successful', 'SUCCESS'));
        echo PHP_EOL . PHP_EOL;
    }
    
    public static function pull()
    {
        $languara = new LanguaraWrapper();
        
        // this is a hack, because FuelPHP buffers all response before printing
        // in the command line, unless you use the frameworks methods for outputing
        while (@ob_end_flush());
        
        echo PHP_EOL;
        ($languara->print_message('notice_starting_download', 'SUCCESS'));
        echo PHP_EOL;
        
        try
        {
            $languara->download_and_process();          
        } 
        catch (\Exception $ex) 
        {
            echo PHP_EOL;
            ($languara->print_message($ex->getMessage(), 'FAILURE'));
            echo PHP_EOL. PHP_EOL;
            return;
        }
        
        echo PHP_EOL;
        ($languara->print_message('success_download_successful', 'SUCCESS'));
        echo PHP_EOL . PHP_EOL;
    }
    
    public static function register()
    {
        $languara = new LanguaraWrapper();
        
        // this is a hack, because FuelPHP buffers all response before printing
        // in the command line, unless you use the frameworks methods for outputing
        while (@ob_end_flush());
        
        ($languara->print_message('notice_register_command', 'SUCCESS'));
        echo PHP_EOL . PHP_EOL;
        
        try
        {
            $languara->register($languara->platform);          
        } 
        catch (\Exception $ex) 
        {
            ($languara->print_message($ex->getMessage(), 'FAILURE'));
            echo PHP_EOL . PHP_EOL;
            return;
        }
        
        echo PHP_EOL;
        ($languara->print_message('success_registration_completed', 'SUCCESS'));
        echo PHP_EOL . PHP_EOL;
    }
    
    public static function translate()
    {
        $languara = new LanguaraWrapper();
        
        // this is a hack, because FuelPHP buffers all response before printing
        // in the command line, unless you use the frameworks methods for outputing
        while (@ob_end_flush());
        
        ($languara->print_message('test_translate', 'SUCCESS'));
        echo PHP_EOL . PHP_EOL;
        
        try
        {
            $languara->translate();          
        } 
        catch (\Exception $ex) 
        {
            ($languara->print_message($ex->getMessage(), 'FAILURE'));
            echo PHP_EOL . PHP_EOL;
            return;
        }
        
        echo PHP_EOL;
        ($languara->print_message('success_translate_completed', 'SUCCESS'));
        echo PHP_EOL . PHP_EOL;
    }
}

/* End of file tasks/languara.php */
