<?php namespace Travis\Team\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateTravisTeamMembers4 extends Migration
{
    public function up()
    {
        Schema::table('travis_team_members', function($table)
        {
            $table->text('photo')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('travis_team_members', function($table)
        {
            $table->dropColumn('photo');
        });
    }
}
