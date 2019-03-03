<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function(Blueprint $table){
            $table->increments('id');
            $table->string('title')->nullable(); //
            $table->string('name')->nullable(); //
            $table->string('mid_name')->nullable(); //
            $table->string('surname')->nullable(); //
            $table->string('email')->unique(); //
            $table->string('username')->unique()->nullable(); //
            $table->string('password')->unique(); //
            $table->string('degree')->nullable(); //
            $table->string('nickname')->nullable(); //
            $table->string('primary_phone')->nullable(); //
            $table->string('secondary_phone')->nullable(); //
            $table->string('secondary_phone_aim')->nullable(); //
            $table->string('fax')->nullable(); //
            $table->string('prefered_contact_method')->nullable();
            $table->string('position')->nullable();
            $table->string('insitution')->nullable();
            $table->string('department')->nullable();
            $table->string('street_address')->nullable();
            $table->string('city')->nullable();
            $table->string('orcidid')->nullable();
            $table->string('province')->nullable();
            $table->string('zip')->nullable();
            $table->string('country')->nullable();
            $table->string('address_for')->nullable();
            $table->boolean('reviewer')->default(false);
            $table->boolean('confirmed')->default(false);
            $table->boolean('online')->default(false);
            $table->boolean('active')->default(false);
            $table->integer('role')->default(2); //1 admin 2 user
            $table->timestamps();
            $table->rememberToken();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
