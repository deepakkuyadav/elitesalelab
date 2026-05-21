<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
return new class extends Migration {
    public function up(): void {
        Schema::create('job_applications', function(Blueprint $t) {
            $t->id(); $t->string('name'); $t->string('email'); $t->string('phone',20)->nullable();
            $t->string('linkedin')->nullable(); $t->string('portfolio')->nullable();
            $t->string('role'); $t->text('message'); $t->string('resume_path')->nullable();
            $t->enum('status',['new','reviewing','shortlisted','rejected'])->default('new'); $t->timestamps();
        });
    }
    public function down(): void { Schema::dropIfExists('job_applications'); }
};