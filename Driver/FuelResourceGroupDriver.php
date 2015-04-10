<?php

namespace Languara\Driver;

class FuelResourceGroupDriver implements ResourceGroupDriverInterface
{
    public function load($resource_group_name, $lang_name = null, $file_path = null)
    {
        \Config::set('language', $lang_name);
        return \Fuel\Core\Lang::load($resource_group_name, $resource_group_name, $lang_name, false, true);
    }

    public function save($resource_group_name, $arr_translations, $lang_name = null, $file_path = null)
    {
        \Config::set('language', $lang_name);
        return \Lang::save($resource_group_name, $arr_translations, $lang_name);
    }
}