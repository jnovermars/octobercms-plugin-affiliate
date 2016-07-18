<?php namespace xleeuwx\Affiliate\components;

use Cache;
use Request;
use Cms\Classes\ComponentBase;
use System\Classes\ApplicationException;

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
                'options'           => ['1'=>'1', '2'=>'2']
            ],
            'brand' => [
                'title'             => 'Brand',
                'description'       => 'Show Produts based on Brand',
                'type'              => 'dropdown',
                'default'           => '',
                'placeholder'       => 'Select units',
                'options'           => ['1'=>'2', '3'=>'4']
            ],
            'sort' => [
                'title'             => 'Sort',
                'description'       => 'Units for the temperature and wind speed',
                'type'              => 'dropdown',
                'default'           => 'p_a',
                'placeholder'       => 'Select units',
                'options'           => ['p_a'=>'Price ASC', 'p_d'=>'Price Desc']
            ]
        ];
    }

}