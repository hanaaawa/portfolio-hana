<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('projects', function (Blueprint $table) {
            // Kita tambahkan kolom-kolom yang dicari oleh database MySQL kamu
            if (!Schema::hasColumn('projects', 'title')) {
                $table->string('title')->nullable();
            }
            if (!Schema::hasColumn('projects', 'description')) {
                $table->text('description')->nullable();
            }
            if (!Schema::hasColumn('projects', 'status')) {
                $table->string('status')->nullable();
            }
            if (!Schema::hasColumn('projects', 'problem_analysis')) {
                $table->text('problem_analysis')->nullable();
            }
            if (!Schema::hasColumn('projects', 'tech_stack')) {
                $table->string('tech_stack')->nullable();
            }
        });
    }

    public function down(): void
    {
        Schema::table('projects', function (Blueprint $table) {
            $table->dropColumn(['title', 'description', 'status', 'problem_analysis', 'tech_stack']);
        });
    }
};