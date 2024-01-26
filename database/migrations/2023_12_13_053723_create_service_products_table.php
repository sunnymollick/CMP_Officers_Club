<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiceProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service_products', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('parent_product_id');
            $table->integer('child_product_id')->nullable();
            $table->integer('warehouse_id')->nullable();
            $table->integer('product_variant_id')->nullable();
            $table->integer('quantity')->nullable();
            $table->integer('subtotal')->nullable();
            $table->integer('purchase_unit_id')->nullable();
            $table->timestamps(6);
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('service_products');
    }
}
