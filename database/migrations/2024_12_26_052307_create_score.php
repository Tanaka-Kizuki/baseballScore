<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('scores', function (Blueprint $table) {
            $table->id();
            $table->integer('game_id');
            $table->integer('user_id');
            $table->integer('bat');//打数
            $table->integer('hit');//安打数
            $table->integer('single_hit');//単打
            $table->integer('double_hit');//二塁打
            $table->integer('triple_hit');//三塁打
            $table->integer('homerun');//本塁打
            $table->integer('fourball');//四球
            $table->integer('deadball');//死球
            $table->integer('score');//得点
            $table->integer('rbi');//打点
            $table->integer('sacrifice_hit');//犠打
            $table->integer('sacrifice_fly');//犠飛
            $table->integer('adavance_base');//進塁打
            $table->integer('stolen_Base');//盗塁
            $table->integer('death_stolen');//盗塁死
            $table->integer('strike_out');//三振
            $table->integer('faux_pas');//失策
            $table->integer('double_play');//併殺
            $table->integer('assisting');//捕殺
            $table->integer('stabbing_death');//刺殺
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('scores');
    }
};
