<?php namespace Travis\Rolodex\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateTravisRolodexContacts6 extends Migration
{
    public function up()
    {
        Schema::table('travis_rolodex_contacts', function($table)
        {
            $table->string('social_website', 200)->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('travis_rolodex_contacts', function($table)
        {
            $table->dropColumn('social_website');
        });
    }
}
