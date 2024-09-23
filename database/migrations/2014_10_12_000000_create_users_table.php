<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('profileimage')->default('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQJdj_g-QIwNa91IKr4jYQqzK-tRMwbOVNytJPoKRg1MS7xzyXXt6vRuPxtljcJp0LN6fU&usqp=CAU');
            $table->rememberToken();
            $table->boolean('role')->default(false);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('users');
    }
}
