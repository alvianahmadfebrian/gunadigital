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
        Schema::create('website_projects', function (Blueprint $table) {
            $table->id();
            $table->string('client_name');
            $table->string('client_phone')->nullable();
            $table->string('project_name');
            $table->string('category')->default('Company Profile');
            $table->string('package_name')->default('Business Pro');
            $table->string('domain')->nullable();
            $table->unsignedBigInteger('price')->default(0);
            $table->string('status')->default('in_progress'); // in_progress, review, online, pending
            $table->date('deadline')->nullable();
            $table->text('notes')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('website_projects');
    }
};
