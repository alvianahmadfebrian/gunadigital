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
        Schema::create('invitation_projects', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('groom_name');
            $table->string('bride_name')->nullable();
            $table->string('client_phone')->nullable();
            $table->string('event_type')->default('Pernikahan');
            $table->string('package_name')->default('Gold (Best Seller)');
            $table->string('slug')->unique();
            $table->string('custom_domain')->nullable();
            $table->date('event_date')->nullable();
            $table->string('location_name')->nullable();
            $table->unsignedBigInteger('price')->default(0);
            $table->unsignedInteger('rsvp_count')->default(0);
            $table->string('music_title')->nullable();
            $table->string('status')->default('active'); // active, draft, completed, expired
            $table->text('notes')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invitation_projects');
    }
};
