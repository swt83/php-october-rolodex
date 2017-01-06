<?php namespace Travis\Rolodex\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateTravisRolodexContacts5 extends Migration
{
    public function up()
    {
        Schema::table('travis_rolodex_contacts', function($table)
        {
            $table->string('social_twitter', 200)->nullable();
            $table->string('social_facebook', 200)->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('travis_rolodex_contacts', function($table)
        {
            $table->dropColumn('social_twitter');
            $table->dropColumn('social_facebook');
        });
    }
}
