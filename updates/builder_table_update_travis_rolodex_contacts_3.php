<?php namespace Travis\Rolodex\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateTravisRolodexContacts3 extends Migration
{
    public function up()
    {
        Schema::table('travis_rolodex_contacts', function($table)
        {
            $table->renameColumn('sort_order', 'order_id');
        });
    }
    
    public function down()
    {
        Schema::table('travis_rolodex_contacts', function($table)
        {
            $table->renameColumn('order_id', 'sort_order');
        });
    }
}
