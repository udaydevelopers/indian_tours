<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('packages', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->longText('description');
            $table->longText('program');
            $table->longText('policy');
            $table->string('trip_days');
            $table->string('trip_nights');
            $table->integer('adult_sp');
            $table->integer('adult_rp');
            $table->integer('adult_dsc');
            $table->integer('child_sp');
            $table->integer('child_rp');
            $table->integer('child_dsc');
            $table->integer('infant_sp');
            $table->integer('infant_rp');
            $table->integer('infant_dsc');
            $table->integer('couple_sp');
            $table->integer('couple_rp');
            $table->integer('couple_dsc');
            $table->string('category');
            $table->boolean('popular');
            $table->string('project_small_pic');
            $table->string('project_large_pic');
            $table->string('meta_keywords');
            $table->string('meta_descriptions');
            $table->string('slug')->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('packages');
    }
}
