<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateToolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tools', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('tool_group_id');
            $table->string('name')->unique();
            $table->timestamp('purchase_date')->default(null);
            $table->decimal('cost_price', 5, 2);
            $table->timestamps();
            $table->foreign('tool_group_id')->references('id')->on('tool_groups');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tools');
    }
}
