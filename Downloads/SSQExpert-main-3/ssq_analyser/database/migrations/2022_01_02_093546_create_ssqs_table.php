<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Institution;
class CreateSsqsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('SSQs', function (Blueprint $table) {
            $table->id();
           // $table->string('key')->unique();
            $table->foreignIdFor(Institution::class);
            $table->json('GoalsAndObjectives');
            $table->json('Curriculum');
            $table->json('Classrooms');
            $table->json('StaffOffices');
            $table->json('AdministrativeStaff');
            $table->string('Programme');
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
        Schema::dropIfExists('ssqs');
    }
}
