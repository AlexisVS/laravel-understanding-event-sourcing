<?php

namespace App\Domain\Account\Database\Migrations;

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('accounts', function (Blueprint $table) {
            $table->id();
            $table->uuid()->index('accounts_uuid');
            $table->string('name');
            $table->integer('balance')->default(0);
            $table->foreignUuid('user_uuid')->nullable()->constrained('users', 'uuid', 'users_uuid');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('accounts');
    }

};
