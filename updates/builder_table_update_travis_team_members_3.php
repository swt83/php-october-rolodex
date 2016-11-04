<?php namespace Travis\Team\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateTravisTeamMembers3 extends Migration
{
    public function up()
    {
        Schema::table('travis_team_members', function($table)
        {
            $table->string('phone_mobile', 100)->nullable()->change();
            $table->string('phone_office', 100)->nullable()->change();
        });
    }
    
    public function down()
    {
        Schema::table('travis_team_members', function($table)
        {
            $table->string('phone_mobile', 100)->nullable(false)->change();
            $table->string('phone_office', 100)->nullable(false)->change();
        });
    }
}
