<?php namespace Travis\Rolodex\Models;

use Model;

/**
 * Model
 */
class Contact extends Model
{
    use \October\Rain\Database\Traits\Validation;
    use \October\Rain\Database\Traits\Sortable; // add to allow sortable trait
    #const SORT_ORDER = 'order_id';

    /*
     * Validation
     */
    public $rules = [
    ];

    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;

    /**
     * @var string The database table used by the model.
     */
    public $table = 'travis_rolodex_contacts';

    /**
     * @var array Attach Many relation
     */
    public $attachOne = [
        'avatar' => 'System\Models\File'
    ];
}