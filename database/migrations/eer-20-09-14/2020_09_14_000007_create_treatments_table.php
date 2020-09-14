<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTreatmentsTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'treatments';

    /**
     * Run the migrations.
     * @table treatments
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->string('sante_soin', 5);
            $table->string('type');
            $table->timestamp('date')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->string('nom_produit')->nullable()->default(null);
            $table->string('effectue_par')->nullable()->default(null);
            $table->string('remarques')->nullable()->default(null);
            $table->string('rappel', 3)->nullable()->default('non');
            $table->unsignedBigInteger('health_records_id');

            $table->index(["health_records_id"], 'fk_entries_health_records1_idx');
            $table->timestamps();


            $table->foreign('health_records_id', 'fk_entries_health_records1_idx')
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
