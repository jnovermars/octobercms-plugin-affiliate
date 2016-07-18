<?php namespace xleeuwx\Affiliate\updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateXleeuwxAffiliateSettings extends Migration
{
    public function up()
    {
        Schema::create('xleeuwx_affiliate_settings', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('setting')->nullable();
            $table->string('value')->nullable();
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('xleeuwx_affiliate_settings');
    }
}