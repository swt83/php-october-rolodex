<?php namespace Travis\Team\Models;

use Model;

/**
 * Model
 */
class Member extends Model
{
    use \October\Rain\Database\Traits\Validation;

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
    public $table = 'travis_team_members';

    /**
     * @var array Attach Many relation
     */
    public $attachOne = [
        'avatar' => 'System\Models\File'
    ];
}