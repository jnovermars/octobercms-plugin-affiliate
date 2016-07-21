<?php
namespace xleeuwx\Affiliate\models;

use October\Rain\Database\Model;
use xleeuwx\Affiliate\models\Bol\ProductBol;
use xleeuwx\Affiliate\models\DealExtreme\ProductDx;


class Product extends Model
{

    /**
     * @var string $table The database table used by the model.
     */
    public $table = 'xleeuwx_affiliate_products';

    /**
     * @var array $guarded Guarded fields
     */
    protected $guarded = [];

    /**
     * @var array Relations
     */
    public $hasOne = [];
    public $hasMany = [];
    public $belongsTo = [];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];



    /**
     * Find Products
     *
     * @param $brand
     * @param $category
     * @param $sort
     */
    public function getProducts($brand, $category, $sort) {
        return 'function';
    }

    // Get Product Specifications
    public function getProductSpecifications($productID) {
        return ProductSpecifications::getProductSpecifications($productID);
    }

    // Get DX
    public function getProductDx($productID) {
        return ProductDx::getProduct($productID);
    }

    // Get Bol
    public function getProductBol($productID) {
        return ProductBol::getProduct($productID);
    }

}