<?php namespace Travis\Rolodex\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateTravisRolodexContacts extends Migration
{
    public function up()
    {
        Schema::table('travis_rolodex_contacts', function($table)
        {
            $table->integer('order_id');
        });
    }
    
    public function down()
    {
        Schema::table('travis_rolodex_contacts', function($table)
        {
            $table->dropColumn('order_id');
        });
    }
}
