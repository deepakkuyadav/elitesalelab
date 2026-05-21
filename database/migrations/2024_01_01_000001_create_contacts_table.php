<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
return new class extends Migration {
    public function up(): void {
        Schema::create('contacts', function(Blueprint $t) {
            $t->id(); $t->string('name'); $t->string('email'); $t->string('phone',20)->nullable();
            $t->string('company')->nullable(); $t->string('service')->nullable(); $t->string('budget')->nullable();
            $t->text('message'); $t->enum('status',['new','read','replied'])->default('new');
            $t->string('ip_address',45)->nullable(); $t->timestamps();
        });
    }
    public function down(): void { Schema::dropIfExists('contacts'); }
};