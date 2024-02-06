<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RemoveForeignKeyFromComboPlans extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('combo_plans', function (Blueprint $table) {
            Schema::table('combo_plans', function (Blueprint $table) {
                $table->dropForeign('combo_plans_plan_id_foreign');
            });

            Schema::table('combo_plans', function (Blueprint $table) {
                $table->dropColumn('plan_id');
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
        Schema::table('combo_plans', function (Blueprint $table) {
            $table->unsignedBigInteger('plan_id')->after('price');
            $table->foreign('plan_id')->references('id')->on('plans')->onDelete('cascade');
        });
    }
}
