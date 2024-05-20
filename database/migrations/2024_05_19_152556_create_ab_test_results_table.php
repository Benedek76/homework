<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateABTestResultsTable extends Migration
{
    /**
     * Running migration.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ab_test_results', function (Blueprint $table) {
            $table->id();
            $table->string('variant'); 
            $table->timestamps(); 
        });
    }

    /**
     * Roll back.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ab_test_results');
    }
}

