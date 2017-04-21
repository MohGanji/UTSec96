<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FixMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('members', function(Blueprint $table) {
            $table->dropForeign('members_discount_id_foreign');
            $table->dropColumn('discount_id');
        });

        Schema::table('discounts', function(Blueprint $table) {
            $table->integer('member_id')->nullable()->unsigned()->after('id');
            $table->foreign('member_id')->references('id')->on('members')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('discounts', function(Blueprint $table) {
            $table->dropForeign('discounts_member_id_foreign');
            $table->dropColumn('member_id');
        });

        Schema::table('members', function(Blueprint $table) {
            $table->integer('discount_id')->unsigned()->nullable()->after('is_leader');
            $table->foreign('discount_id')->references('id')->on('discounts')->onDelete('set null');
        });
    }
}
