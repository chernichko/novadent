<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddActiveColumesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('news', function (Blueprint $table) {
            $table->boolean('active')->after('image')->default(null)->nullable();
        });

        Schema::table('service_groups', function (Blueprint $table) {
            $table->boolean('active')->after('description')->default(null)->nullable();
        });

        Schema::table('services', function (Blueprint $table) {
            $table->boolean('active')->after('price')->default(null)->nullable();
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('news', function (Blueprint $table) {
            $table->dropColumn('active');
        });

        Schema::table('service_groups', function (Blueprint $table) {
            $table->dropColumn('active');
        });

        Schema::table('services', function (Blueprint $table) {
            $table->dropColumn('active');
        });
    }
}
