<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('page_managers', function (Blueprint $table) {
            $table->after('id', function ($table) {
            $table->string( 'menu_name')->nullable();
            $table->string( 'menu_slug')->nullable()->unique();
            $table->string( 'position')->nullable();
            $table->string( 'feature_image')->nullable();
            $table->string( 'page_content')->nullable();
            $table->string( 'redirect_url')->nullable();
            $table->boolean( 'status') ->default(0)->nullable();
            });
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('page_managers', function (Blueprint $table) {
            $table->dropColumn('menu_name');
            $table->dropColumn('menu_slug');
            $table->dropColumn('position');
            $table->dropColumn('feature_image');
            $table->dropColumn('page_content');
            $table->dropColumn('redirect_url');
            $table->dropColumn('status');




        });
    }
};
