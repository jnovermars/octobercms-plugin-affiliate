<?php
namespace xleeuwx\Affiliate\models;


use October\Rain\Database\Model;

class Settings extends Model
{

    public $implement = ['System.Behaviors.SettingsModel'];

    // A unique code
    public $settingsCode = 'xleeuwx_affiliate_settings';

    // Reference to field configuration
    public $settingsFields = 'fields.yaml';

    /**
     * Validation rules
     */
    public $rules = [
    //    'api_key' => 'required'
    ];

}