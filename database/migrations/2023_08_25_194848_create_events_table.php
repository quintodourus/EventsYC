<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/*** Class CreateEventsTable */
class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     * @return void
     */
    public function up(): void
    {
        Schema::create(
            'events',
            static function (Blueprint $table) {
                $table->id();
                $table->string('title', 50);
                $table->timestamp('date');
                $table->string('city', 30);
                $table->string('address', 40);
                $table->string('event_type', 20);
                $table->unsignedInteger('organizer_id');
                $table->json('filters')->nullable();
                $table->timestamp('created_at')->useCurrent();
                $table->timestamp('updated_at')->useCurrentOnUpdate();
        });
    }
}
