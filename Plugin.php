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
    public function registerSettings()
    {
        return [
            'settings' => [
                'label'       => 'Affiliate Settings',
                'description' => 'Configure Affiliate settings and API access.',
                'icon'        => 'icon-cog',
                'class'       => 'xleeuwx\Affiliate\models\Settings',
                'order'       => 700,
                'keywords'    => 'affiliate bol dealextreme'
            ]
        ];
    }
}