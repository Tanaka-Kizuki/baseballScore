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
        Schema::create('pitcher_score', function (Blueprint $table) {
            $table->id();
            $table->integer('pitching');//登板数
            $table->integer('starter');//先発
            $table->integer('intermediate');//中継ぎ
            $table->integer('win');//勝数
            $table->integer('lose');//負数
            $table->integer('complete_game');//完投
            $table->integer('shoutout');//完封
            $table->integer('save');//セーブ
            $table->integer('hold');//ホールド
            $table->integer('pitching_innings');//投球数
            $table->integer('batters');//打者数
            $table->integer('pitches');//球数
            $table->integer('hits');//被安打
            $table->integer('homeruns');//被本塁打
            $table->integer('strikeout');//奪三振
            $table->integer('fly');//フライ
            $table->integer('grounder');//ごろ
            $table->integer('walks');//与四球
            $table->integer('HB');//与死球
            $table->integer('wild_pitch');//暴投
            $table->integer('conceded_points');//失点
            $table->integer('earned_run');//自責点
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pitcher_score');
    }
};
