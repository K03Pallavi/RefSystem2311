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
        Schema::create('frontusers', function (Blueprint $table) {
            $table->id('userid');
            $table->string('username');
            $table->string('useremail')->unique();
            $table->bigInteger('usercontact');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('userpassword');
            $table->rememberToken();
            $table->timestamps();
            $table->string('referrals');
            $table->string('actions');
            $table->integer('points')->default(10);

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('frontusers');
        
    }
};
