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
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->integer('no')->unique();
            $table->date('tanggal_invoice');
            $table->date('tanggal_jatuh_tempo');
            $table->char('customer', 25);
            $table->integer('diskon');
            $table->integer('pajak');
            $table->enum('status_invoice', ['Publish', 'Draft']);
            $table->enum('status_payment_invoice', ['Paid', 'Unpaid', 'Partial Paid']);
            $table->text('deskripsi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('invoices');
    }
};
