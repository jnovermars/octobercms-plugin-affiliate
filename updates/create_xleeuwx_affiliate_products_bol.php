<?php namespace xleeuwx\Affiliate\updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateXleeuwxAffiliateProductsBol extends Migration
{
    public function up()
    {
        Schema::create('xleeuwx_affiliate_products_bol', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name')->nullable();
            $table->string('productUrl')->nullable();
            $table->double('price', 15, 2)->nullable();
            $table->double('vat', 15, 2)->nullable();
            $table->double('shipping', 15, 2)->nullable();
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('xleeuwx_affiliate_products_bol');
    }
}