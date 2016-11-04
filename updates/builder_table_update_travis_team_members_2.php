<?php namespace Travis\Team\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateTravisTeamMembers2 extends Migration
{
    public function up()
    {
        Schema::table('travis_team_members', function($table)
        {
            $table->string('phone_mobile', 100);
            $table->string('phone_office', 100);
        });
    }
    
    public function down()
    {
        Schema::table('travis_team_members', function($table)
        {
            $table->dropColumn('phone_mobile');
            $table->dropColumn('phone_office');
        });
    }
}
