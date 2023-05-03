<?php

use App\Models\User;
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
        Schema::create('applications', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email')->unique();
            $table->string('phone')->unique();
            $table->string('company_name');
            $table->string('company_email')->unique();
            $table->enum('status', [1, 2, 3])->default(1)->comment('1 - Pending, 2 - Accepted, 3 - Declined');
            $table->foreignIdFor(User::class, 'approved_by')->nullable();
            $table->dateTime('approved_at')->nullable();
            $table->foreignIdFor(User::class, 'declined_by')->nullable();
            $table->dateTime('declined_at')->nullable();
            $table->text('comments')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('applications');
    }
};
