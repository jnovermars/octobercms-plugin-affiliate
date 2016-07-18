<?php
namespace xleeuwx\Affiliate\Model;

use October\Rain\Database\Model;


class ProductSpecifications extends Model
{

    /**
     * @var string $table The database table used by the model.
     */
    public $table = 'xleeuwx_affiliate_products_specifications';

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
     * Find Products Specifications
     *
     * @param int $productID
     * @return array
     */
    public static function getProductSpecifications($productID) {

    }
}