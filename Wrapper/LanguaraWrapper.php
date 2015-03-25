<?php
namespace Languara\Wrapper;

class LanguaraWrapper extends \Languara\Library\Lib_Languara
{
    public function __construct()
    {
        \Config::load('languara');
        \Config::load('static_resources');
        
        $this->language_location = APPPATH . \Config::get('language_location');
        $this->conf = \Config::get('conf');
        $this->endpoints = \Config::get('endpoints');
        $this->arr_messages = \Config::get('messages');
        $this->origin_site = \Config::get('origin_site');
        $this->config_files = \Config::get('config_files');
        $this->platform = \Config::get('platform');
        
        // change config files to have absoluth paths
        if (is_array($this->config_files))
        {
            foreach ($this->config_files as $config_key => $config_file)
            {
                $this->config_files[$config_key] = PKGPATH .'languara'. $config_file;
            }
        }
        
    }
    
    protected function load_config_file()
    {
        \Config::load('languara', null, true, true);
            
        $this->language_location = APPPATH . \Config::get('language_location');
        $this->conf = \Config::get('conf');
    }
}