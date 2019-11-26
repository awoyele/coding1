<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddNewColumnsUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		Schema::table('users', function($table) {
		$table->timestamp('birth_date');
		$table->timestamp('start_date');
		$table->timestamp('dead_line');
		$table->string('missed_visit');
        $table->timestamp('visit_date');
		$table->string('follow_up');
    	});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function($table) {
		$table->dropColumn('birth_date');
        $table->dropColumn('start_date');
		$table->dropColumn('dead_line');
		$table->dropColumn('missed_visit');
		$table->dropColumn('visit_date');
		$table->dropColumn('follow_up');
    	});
    }
}
