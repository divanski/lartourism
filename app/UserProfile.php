<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model {

    /**
     * @var array whit fillable fields
     * for an UserProfile
     */
    protected $fillable = [
        'first_name',
        'middle_name',
        'family_name',
        'gender',
        'country_of_birth',
        'region_of_birth',
        'municipality_of_birth',
        'place_of_birth',
        'date_of_birth',
        'nationality',
        'personal_no',
        'identity_card_no',
        'date_of_issue',
        'date_of_expiry',
        'country_of_residence',
        'region_of_residence',
        'municipality_of_residennce',
        'place_of_residence',
        'address_of_residence',
        'personal_phone'
    ];

    /**Additional fields to treat a Carbon instance
     * @var array
     */
    protected $dates = [
        'date_of_birth',
        'date_of_issue',
        'date_of_expiry'
    ];

    /**
     * Profile belongs to User
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }

}
