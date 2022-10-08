<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPageBannerH1H2TagsToPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->string('page_banner')->nullable()->after('dislike');
            $table->string('h1_tags')->nullable()->after('dislike');
            $table->string('h2_tags')->nullable()->after('dislike');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->string('page_banner');
            $table->string('h1_tags');
            $table->string('h2_tags');
        });
    }
}
