<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnPlaceCoveredAndBannerToPackageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('packages', function (Blueprint $table) {
            $table->string('place_covered')->nullable()->after('status');
            $table->string('page_banner_alt')->nullable()->after('status');
            $table->string('page_banner_image')->nullable()->after('status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('packages', function (Blueprint $table) {
            $table->dropColumn('place_covered'); 
            $table->dropColumn('page_banner_alt');
            $table->dropColumn('page_banner_image');
        });
    }
}
