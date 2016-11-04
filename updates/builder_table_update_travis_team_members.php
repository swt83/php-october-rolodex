<?php namespace Travis\Team\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateTravisTeamMembers extends Migration
{
    public function up()
    {
        Schema::table('travis_team_members', function($table)
        {
            $table->boolean('is_active');
            $table->string('role', 100)->nullable();
            $table->increments('id')->unsigned(false)->change();
            $table->string('email', 100)->nullable()->change();
        });
    }
    
    public function down()
    {
        Schema::table('travis_team_members', function($table)
        {
            $table->dropColumn('is_active');
            $table->dropColumn('role');
            $table->increments('id')->unsigned()->change();
            $table->string('email', 100)->nullable(false)->change();
        });
    }
}
