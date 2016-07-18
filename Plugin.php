<?php namespace xleeuwx\Affiliate;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{

    public function pluginDetails()
    {
        return [
            'name'        => 'GWSN Affiliate',
            'description' => 'Show Affiliate products',
            'author'      => 'xleeuwx',
            'icon'        => 'icon-sun-o'
        ];
    }

    public function registerComponents()
    {
        return [
            '\xleeuwx\Affiliate\components\AffiliateProducts' => 'AffiliateProducts'
        ];
    }
}