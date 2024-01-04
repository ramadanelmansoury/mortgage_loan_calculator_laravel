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
        Schema::create('loans', function (Blueprint $table) {
            $table->id();
            $table->double('loan_amount');
            $table->integer('loan_term');
            $table->float('interest_rate');

            $table->double('Monthly_fixed_extra_payment')->nullable();
            $table->double('remaining_loan_term_after_extra_repayment')->nullable();


            $table->foreignIdFor(\App\Models\User::class)->constrained()->cascadeOnDelete();


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('loans');
    }
};
