<?php namespace Travis\Rolodex\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateTravisRolodexContacts extends Migration
{
    public function up()
    {
        Schema::create('travis_rolodex_contacts', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('first', 20)->nullable();
            $table->string('last', 20)->nullable();
            $table->string('role', 50)->nullable();
            $table->string('email', 50)->nullable();
            $table->string('phone_office', 20)->nullable();
            $table->string('phone_mobile', 20)->nullable();
            $table->text('bio')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('travis_rolodex_contacts');
    }
}
