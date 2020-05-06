<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVeterinariesTable extends Migration {
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'veterinaries';

    /**
     * Run the migrations.
     * @table veterinaries
     *
     * @return void
     */
    public function up() {
        Schema::create($this -> tableName, function (Blueprint $table) {
            $table -> engine = 'InnoDB';
            $table -> bigIncrements('id');
            $table -> string('username');
            $table -> string('email');
            $table -> timestamp('email_verified_at') -> nullable() -> default(null);
            $table -> string('password');
            $table -> rememberToken();
            $table -> string('first_name');
            $table -> string('last_name');
            $table -> string('address_practice');
            $table -> string('address_plus_practice') -> nullable();
            $table -> char('postal_code_practice', 5);
            $table -> string('city_practice', 50);
            $table -> char('country_practice', 2);
            $table -> string('phone_practice', 10);
            $table -> string('phone_plus_practice', 10) -> nullable();

            $table -> unique(["username"], 'username_UNIQUE');

            $table -> unique(["email"], 'users_email_unique');
            $table -> nullableTimestamps();
        });
    }

    /**
    * Reverse the migrations.
    *
    * @return void
    */
    public function down() {
        Schema::dropIfExists($this -> tableName);
    }
}
