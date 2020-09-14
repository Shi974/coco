<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnimalsTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'animals';

    /**
     * Run the migrations.
     * @table animals
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->date('birth_date')->nullable()->default(null);
            $table->string('type', 45);
            $table->string('breed')->nullable()->default(null);
            $table->unsignedBigInteger('users_id');
            $table->unsignedBigInteger('veterinary_id');
            $table->unsignedBigInteger('health_records_id');

            $table->index(["veterinary_id"], 'fk_animal_veterinary1_idx');

            $table->index(["health_records_id"], 'fk_animals_health_records1_idx');

            $table->index(["users_id"], 'fk_animal_users_idx');

            $table->unique(["health_records_id"], 'health_records_id_UNIQUE');
            $table->nullableTimestamps();


            $table->foreign('users_id', 'fk_animal_users_idx')
                ->references('id')->on('users')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('veterinary_id', 'fk_animal_veterinary1_idx')
                ->references('id')->on('veterinaries')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('health_records_id', 'health_records_id_UNIQUE')
                ->references('id')->on('health_records')
                ->onDelete('no action')
                ->onUpdate('no action');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
     public function down()
     {
       Schema::dropIfExists($this->tableName);
     }
}
