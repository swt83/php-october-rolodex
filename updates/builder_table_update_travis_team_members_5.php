<?php namespace Travis\Team\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateTravisTeamMembers5 extends Migration
{
    public function up()
    {
        Schema::table('travis_team_members', function($table)
        {
            $table->string('photo', 500)->nullable()->unsigned(false)->default(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('travis_team_members', function($table)
        {
            $table->text('photo')->nullable()->unsigned(false)->default(null)->change();
        });
    }
}
