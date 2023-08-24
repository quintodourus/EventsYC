<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/*** Class CreateUserEventsTable */
class CreateUserEventsTable extends Migration
{
    /**
     * Run the migrations.
     * @return void
     */
    public function up(): void
    {
        Schema::create(
            'user_events',
            static function (Blueprint $table) {
                $table->id();
                $table->foreignId('event_id')->constrained('events');
                $table->foreignId('user_id')->constrained('users');
                $table->boolean('is_user_organizer')->default(FALSE);
                $table->timestamp('created_at')->useCurrent();
                $table->timestamp('updated_at')->useCurrentOnUpdate();
        });
    }
}
