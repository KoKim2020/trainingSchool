<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('namee',100);
            $table->string('namem',100);
            $table->string('email',100)->unique();
            $table->string('phone',100);
            $table->text('address');
            $table->text('education');
            $table->string('city',100);
            $table->string('accepted_year',100);
            $table->date('dob');
            $table->string('gender',100);
            $table->unsignedBigInteger('batch_id');

            $table->string('p1',100);
            $table->string('p1_phone',100);
            $table->string('p1_relationship',100);
            // -------------------------------

            $table->string('p2',100);
            $table->string('p2_phone',100);
            $table->string('p2_relationship',100);
// --------------------------------------
            $table->text('because');

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
        Schema::dropIfExists('students');
    }
}
