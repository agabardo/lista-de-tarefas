<?php
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class AddTokenToUsers extends Migration{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
      Schema::table('users', function (Blueprint $table) {
          $table->string('api_token', 60)->unique();
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(){
    }
}
