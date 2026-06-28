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
        Schema::table('bookings', function (Blueprint $table) {
            $table->string('booking_code')->nullable()->after('id');
            $table->string('snap_token')->nullable()->after('status');
            $table->string('midtrans_order_id')->nullable()->after('snap_token');
            $table->string('payment_type')->nullable()->after('midtrans_order_id');
            $table->string('transaction_status')->nullable()->after('payment_type');
            $table->timestamp('paid_at')->nullable()->after('transaction_status');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('bookings', function (Blueprint $table) {
        $table->dropColumn([
            'booking_code',
            'snap_token',
            'midtrans_order_id',
            'payment_type',
            'transaction_status',
            'paid_at',
    ]);
        });
    }
};
