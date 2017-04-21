<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MainMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('groups', function(Blueprint $tbl) {
            $tbl->increments('id');
            $tbl->string('name');
            $tbl->boolean('tmp')->default(true);
            $tbl->timestamps();
        });


        Schema::create('discounts', function(Blueprint $table){
            $table->increments('id');
            $table->string('code')->unique();
            $table->string('email')->nullable();
            $table->boolean('used')->default(false);
            $table->integer('percent')->default(10);
//            $table->integer('count')->unsigned()->default(1);
//            $table->integer('used')->unsigned();
            $table->timestamp('expiration_date');
            $table->timestamps();
        });


        Schema::create('members', function(Blueprint $tbl) {
            $tbl->increments('id');

//            $tbl->enum('type', ['ut', 'acm', 'uni', ]);

            $tbl->integer('group_id')->unsigned();
            $tbl->foreign('group_id')->references('id')->on('groups')->onDelete('cascade');

            $tbl->string('name');
            $tbl->string('family');
            $tbl->string('email');
            $tbl->string('mobile');
            $tbl->string('student_number');
            $tbl->string('university');

            $tbl->boolean('is_leader');

            $tbl->integer('discount_id')->unsigned()->nullable();
            $tbl->foreign('discount_id')->references('id')->on('discounts')->onDelete('set null');
            $tbl->boolean('tmp')->default(true);

            $tbl->timestamps();
        });

//
//        Schema::table('discount_usage', function(Blueprint $table) {
//            $table->increments('id');
//            $table->integer('discount_code_id')->unsigned();
//            $table->foreign('discount_code_id')->references('id')->on('discount_codes');
//            $table->integer('member_id')->unsigned();
//            $table->foreign('member_id')->references('id')->on('members');
//        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('members');
        Schema::drop('discounts');
        Schema::drop('groups');
    }
}
