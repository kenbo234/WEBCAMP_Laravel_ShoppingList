<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompletedShoppingListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('completed_shopping_lists', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255)->comment('買うもの名（商品名）');
            $table->unsignedBigInteger('user_id')->comment('購入者');
            $table->dateTime('created_at')->useCurrent()->comment('購入日');
            $table->dateTime('updated_at')->useCurrent()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('completed_shopping_lists');
    }
}
