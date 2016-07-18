<?php
namespace xleeuwx\Affiliate\models;


abstract class ProductImport
{

    abstract function getExternalProductDetails($productID);

    abstract function getExternalProduct($productID);

    abstract function getExternalProductPrice($productID);

    abstract function updateExternalProduct($productID);

}