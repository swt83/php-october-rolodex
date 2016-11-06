<?php namespace Travis\Rolodex\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Contacts extends Controller
{
    public $implement = ['Backend\Behaviors\ListController','Backend\Behaviors\FormController','Backend\Behaviors\ReorderController'];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';
    public $reorderConfig = 'config_reorder.yaml';

    public $requiredPermissions = [
        'travis.rolodex.manage_rolodex' 
    ];

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Travis.Rolodex', 'rolodex', 'contacts');
    }
}