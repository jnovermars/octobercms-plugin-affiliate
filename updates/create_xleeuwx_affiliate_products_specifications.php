<?php namespace xleeuwx\Affiliate\updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateXleeuwxAffiliateProductsSpecifications extends Migration
{
    public function up()
    {
        Schema::create('xleeuwx_affiliate_products_specifications', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('productID')->nullable();
            $table->string('desc')->nullable();
            $table->string('value')->nullable();
            $table->string('sort')->nullable();
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('xleeuwx_affiliate_products_specifications');
    }
}