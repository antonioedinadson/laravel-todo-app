<?php

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class)->references('id')->on('users')->onDelete('CASCADE');            
            $table->foreignIdFor(Category::class)->references('id')->on('categories')->onDelete('CASCADE');      
            $table->string('title')->nullable(false);
            $table->string('description')->nullable(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tasks', function(Blueprint $table) {
            $table->dropForeignIdFor(User::class);
            $table->dropForeignIdFor(Category::class);
        });

        Schema::dropIfExists('tasks');
    }
};