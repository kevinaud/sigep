<?php

namespace app\models;

use yii\base\Model;
use app\assets\AppAsset;

class RecruitmentForm extends Model
{
    public $first_name;
    public $last_name;
    public $class;
    public $major;
    public $email;
    public $phone;
    public $town;
    public $state;
    public $dorm;
    public $legacy;
    public $class_list = [
    	'Freshman' => 'Freshman',
    	'Sophomore' => 'Sophomore',
    	'Junior' => 'Junior',
    	'Senior' => 'Senior'
    ];
    public $state_list = [
    	'AL' => 'AL','AK' => 'AK','AZ' => 'AZ','AR' => 'AR','CA' => 'CA',
    	'CO' => 'CO','CT' => 'CT','DC' => 'DC','DE' => 'DE','FL' => 'FL',
    	'GA' => 'GA','HI' => 'HI','ID' => 'ID','IL' => 'IL','IN' => 'IN',
    	'IA' => 'IA','KS' => 'KS','KY' => 'KY','LA' => 'LA','ME' => 'ME',
    	'MD' => 'MD','MA' => 'MA','MI' => 'MI','MN' => 'MN','MS' => 'MS',
    	'MO' => 'MO','MT' => 'MT','NE' => 'NE','NV' => 'NV','NH' => 'NH',
    	'NJ' => 'NJ','NM' => 'NM','NY' => 'NY','NC' => 'NC','ND' => 'ND',
    	'OH' => 'OH','OK' => 'OK','OR' => 'OR','PA' => 'PA','RI' => 'RI',
    	'SC' => 'SC','SD' => 'SD','TN' => 'TN','TX' => 'TX','UT' => 'UT',
    	'VT' => 'VT','VA' => 'VA','WA' => 'WA','WV' => 'WV','WI' => 'WI',
    	'WY' => 'WY'
    ];
 
    /**
     * Describes form validation rules for RecruitmentForm
     * @return {Multi-dimensional Array}, returns rule set
     */
    public function rules()
    {
        return [

            /* All listed attributes must not be Null */
            [
                ['first_name', 
                 'last_name', 
                 'class', 
                 'major', 
                 'email',
                 'state',
                 'legacy'
                 ], 

                'required'
            ],
            /* The info entered for email must be in the format of an email */
            //['email', 'email'],
            /* Trim whitespace from around all listed attributes */
            [
                ['first_name', 
                 'last_name',
                 'major',
                 'email', 
                 'phone',
                 'town',
                 'dorm'
                 ], 

                'filter', 'filter' => 'trim',
            ],
        ];
    }
}
