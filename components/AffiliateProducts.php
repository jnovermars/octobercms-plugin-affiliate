<?php namespace xleeuwx\Affiliate\components;

use Cache;
use Request;
use Cms\Classes\ComponentBase;
use Config;
use System\Classes\ApplicationException;
use xleeuwx\Affiliate\models\Settings;


class AffiliateProducts extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'Affiliate Products',
            'description' => 'Outputs the affiliate products on a page.'
        ];
    }

    public function defineProperties()
    {
        return [
            'category' => [
                'title'             => 'Category',
                'description'       => 'Show Products based on Category',
                'type'              => 'dropdown',
                'default'           => '',
                'placeholder'       => 'Select Category',
                'options'           => self::getCategories()
            ],
            'brand' => [
                'title'             => 'Brand',
                'description'       => 'Show Produts based on Brand',
                'type'              => 'dropdown',
                'default'           => '',
                'placeholder'       => 'Select units',
                'options'           => self::getBrands()
            ],
            'sort' => [
                'title'             => 'Sort',
                'description'       => 'The sort of products',
                'type'              => 'dropdown',
                'default'           => 'price_asc',
                'placeholder'       => 'Select units',
                'options'           => self::getSorts()
            ]
        ];
    }

    public static function getCategories() {
        return Config::get('xleeuwx.affiliate::categories', []);
    }

    public static function getBrands() {
        return Config::get('xleeuwx.affiliate::brands', []);
    }

    public static function getSorts() {
        return [
            'price_asc'     => 'Price ASC',
            'price_desc'    => 'Price DESC'
        ];
    }

}