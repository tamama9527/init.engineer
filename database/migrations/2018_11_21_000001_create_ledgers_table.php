<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class CreateLedgersTable.
 */
class CreateLedgersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('ledgers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_type')->nullable();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->morphs('recordable');
            $table->unsignedTinyInteger('context');
            $table->string('event');
            $table->text('properties');
            $table->text('modified');
            $table->text('pivot');
            $table->text('extra');
            $table->text('url')->nullable();
            $table->ipAddress('ip_address')->nullable();
            $table->longText('user_agent')->nullable();
            $table->string('signature');
            $table->timestamps();

            $table->index([
                'user_id',
                'user_type',
            ]);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('ledgers');
    }
}
