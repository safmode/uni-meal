<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('student_id'); // Matches student matric_no
            $table->string('delivery_option');
            $table->string('payment_method');
            $table->decimal('total_amount', 8, 2)->default(0);
            $table->string('status')->default('Confirmed');
            $table->string('address')->nullable();
            $table->timestamps();
            $table->decimal('shipping_fee', 8, 2)->default(0.00);
            $table->decimal('sales_tax', 8, 2)->default(0.00);

            $table->foreign('student_id')->references('matric_no')->on('students')->onDelete('cascade');

        });
    }

    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
