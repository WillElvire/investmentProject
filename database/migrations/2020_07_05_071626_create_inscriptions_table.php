<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInscriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
        public function up()
        {
            Schema::create('inscriptions', function (Blueprint $table) {
                    $table->increments('id');
                    $table->string('nom',50);
                    $table->string('prenom',50);
                    $table->string('email',50);
                    $table->unique('email','user_email');
                    $table->string('number',40);
                    $table->unique('number','user_phone');
                    $table->enum('status',[0,1])->nullable()->default(0);
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
            Schema::dropIfExists('inscriptions');
        }
}
