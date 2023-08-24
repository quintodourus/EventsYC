<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/*** Class CreateUsersTable */
class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     * @return void
     */
    public function up(): void
    {
        Schema::create(
            'users',
            static function (Blueprint $table) {
                $table->id();
                $table->string('first_name', 30);
                $table->string('last_name', 30);
                $table->string('phone', 30)->unique();
                $table->string('email', 30)->nullable();
                $table->unsignedInteger('age')->nullable();
                $table->string('sex', 20)->nullable();
                $table->string('city', 40)->nullable();
                $table->json('preferences')->nullable();
                $table->string('password');
                $table->boolean('is_root')->default(FALSE);
                $table->rememberToken();
                $table->timestamp('last_activity_at')->nullable();
                $table->timestamp('created_at')->useCurrent();
                $table->timestamp('updated_at')->useCurrentOnUpdate();
                $table->timestamp('deleted_at')->nullable();
            }
        );
    }
}
