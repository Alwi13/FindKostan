<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ForeignKeyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pokemons',function (Blueprint $table){
            $table->foreign('element_id')
                ->references('id')
                ->on('elements')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });

        Schema::table('comments',function (Blueprint $table){
            $table->foreign('user')
                ->references('id')
                ->on('elements')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreign('pokemon')
                ->references('id')
                ->on('pokemons')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });

        Schema::table('carts',function (Blueprint $table){
            $table->foreign('pokemon')
                ->references('id')
                ->on('pokemons')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });

        Schema::table('transactions',function (Blueprint $table){
            $table->foreign('cart')
                ->references('id')
                ->on('carts')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->foreign('user')
                ->references('id')
                ->on('users')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pokemons',function (Blueprint $table){
            $table->dropForeign(['element_id']);
        });

        Schema::table('comments',function (Blueprint $table){
            $table->dropForeign(['user']);
        });

        Schema::table('comments',function (Blueprint $table){
            $table->dropForeign(['pokemon']);
        });

        Schema::table('carts',function (Blueprint $table){
            $table->dropForeign(['pokemon']);
        });

        Schema::table('transactions',function (Blueprint $table){
            $table->dropForeign(['cart']);
        });

        Schema::table('transactions',function (Blueprint $table){
            $table->dropForeign(['user']);
        });
    }
}
