<?php
namespace Languara\Wrapper;

class LanguaraWrapper extends \Languara\Library\Lib_Languara
{
    public function __construct()
    {
        parent::__construct();
        \Config::load('languara');
        \Config::load('static_resources');
        
        $this->language_location = APPPATH . \Config::get('language_location');
        $this->conf = \Config::get('conf');
        $this->endpoints = \Config::get('endpoints');
        $this->arr_messages = \Config::get('messages');
        $this->origin_site = \Config::get('origin_site');
        $this->config_files = \Config::get('config_files');
        $this->platform = \Config::get('platform');
        $this->driver = new \Languara\Driver\FuelResourceGroupDriver();
        
        // change config files to have absoluth paths
        if (is_array($this->config_files))
        {
            foreach ($this->config_files as $config_key => $config_file)
            {
                $this->config_files[$config_key] = PKGPATH .'languara'. $config_file;
            }
        }
        
    }
    
    /**
     * Loads the local config files and sets them in the appropriate fields
     */
    protected function load_config_file()
    {
        \Config::load('languara', null, true, true);
            
        $this->language_location = APPPATH . \Config::get('language_location');
        $this->conf = \Config::get('conf');
    }

    /**
     * Pushes the local translations to Languaras servers.
     * 
     * @return Response
     */
    public function push()
    {
        $external_request_id = \Input::post('external_request_id');
        $client_signature = \Input::post('signature');
        
        $languara = new LanguaraWrapper();  

        try
        {
            $languara->check_auth($external_request_id, $client_signature);
            $languara->upload_local_translations();
        }
        catch (\Exception $e)
        {
            return \Response::forge($e->getMessage(), 400);
        }
        
        return \Response::forge(1);
    }

    /**
     * Pulls the translations for the current project from 
     * Languaras servers
     * 
     * @return Response
     */
    public function pull()
    {
        $external_request_id = \Input::post('external_request_id');
        $client_signature = \Input::post('signature');
              
        $languara = new LanguaraWrapper();  
        
        try
        {
            $languara->check_auth($external_request_id, $client_signature);
            $languara->download_and_process();
        }
        catch (\Exception $e)
        {
            return \Response::forge($e->getMessage(), 400);
        }
        
        return \Response::forge(1);
    }
}