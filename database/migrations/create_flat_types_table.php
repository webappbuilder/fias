<?php

declare(strict_types=1);

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFlatTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('flat_types', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('FLTYPEID')->nullable()->comment('Идентификатор')->index();
            $table->string('NAME', 20)->nullable()->comment('Наименование')->index();
            $table->string('SHORTNAME', 20)->nullable()->comment('Краткое наименование')->index();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('flat_types');
    }
}
