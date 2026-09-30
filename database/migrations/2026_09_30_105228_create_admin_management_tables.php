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
        Schema::create('portfolios', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->enum('category', ['website', 'undangan'])->default('website');
            $table->string('tag')->nullable();
            $table->string('image')->nullable();
            $table->text('description')->nullable();
            $table->string('link')->nullable();
            $table->string('badge_color')->default('blue');
            $table->boolean('is_featured')->default(true);
            $table->integer('order')->default(0);
            $table->timestamps();
        });

        Schema::create('contact_messages', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('service_type')->default('website');
            $table->string('budget')->nullable();
            $table->text('message');
            $table->enum('status', ['new', 'contacted', 'in_progress', 'completed', 'spam'])->default('new');
            $table->text('admin_notes')->nullable();
            $table->timestamps();
        });

        Schema::create('pricing_packages', function (Blueprint $table) {
            $table->id();
            $table->enum('category', ['website', 'undangan'])->default('website');
            $table->string('name');
            $table->string('price');
            $table->string('period')->default('sekali bayar');
            $table->text('description')->nullable();
            $table->json('features')->nullable();
            $table->boolean('is_popular')->default(false);
            $table->string('badge')->nullable();
            $table->string('cta_text')->default('Pilih Paket');
            $table->integer('order')->default(0);
            $table->timestamps();
        });

        Schema::create('testimonials', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('role')->nullable();
            $table->string('service_name')->nullable();
            $table->tinyInteger('rating')->default(5);
            $table->text('content');
            $table->string('avatar')->nullable();
            $table->boolean('is_active')->default(true);
            $table->integer('order')->default(0);
            $table->timestamps();
        });

        Schema::create('faqs', function (Blueprint $table) {
            $table->id();
            $table->string('question');
            $table->text('answer');
            $table->string('category')->default('general');
            $table->boolean('is_active')->default(true);
            $table->integer('order')->default(0);
            $table->timestamps();
        });

        Schema::create('site_settings', function (Blueprint $table) {
            $table->id();
            $table->string('key')->unique();
            $table->text('value')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('site_settings');
        Schema::dropIfExists('faqs');
        Schema::dropIfExists('testimonials');
        Schema::dropIfExists('pricing_packages');
        Schema::dropIfExists('contact_messages');
        Schema::dropIfExists('portfolios');
    }
};
