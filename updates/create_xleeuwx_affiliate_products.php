<?php namespace xleeuwx\Affiliate\updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateXleeuwxAffiliateProducts extends Migration
{
    public function up()
    {
        Schema::create('xleeuwx_affiliate_products', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('brand')->nullable();
            $table->string('category')->nullable();
            $table->string('productName')->nullable();
            $table->string('title')->nullable();
            $table->string('subTitle')->nullable();
            $table->string('description')->nullable();
            $table->double('price', 15, 2)->nullable();
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('xleeuwx_affiliate_products');
    }
}