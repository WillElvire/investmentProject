<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvestissementsTable extends Migration
{
   /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('investissements', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id',10);
            $table->string('pack',50);
            $table->string('montant',50);
            $table->string('duree',50);
            $table->enum('status',[0,1])->nullable()->default(0);
            $table->date('payDay')->nullable();
            $table->string('received',50);
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
        Schema::dropIfExists('investissements');
    }
}
