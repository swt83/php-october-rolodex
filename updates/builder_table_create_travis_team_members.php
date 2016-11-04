<?php namespace Travis\Team\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateTravisTeamMembers extends Migration
{
    public function up()
    {
        Schema::create('travis_team_members', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('first', 100)->nullable();
            $table->string('last', 100)->nullable();
            $table->text('bio')->nullable();
            $table->string('email', 100);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('travis_team_members');
    }
}
