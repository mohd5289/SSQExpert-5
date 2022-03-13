<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHNDSLTBiochemistrySSQsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('HNDSLTBiochemistrySSQs', function (Blueprint $table) {
            $table->id();
           // $table->string('key')->unique();
            $table->json('GoalsAndObjectives');
            $table->json('Curriculum');
            $table->json('Classrooms');
            $table->json('Laboratories');
            $table->json('StaffOffices');
            $table->json('Library');
            $table->json('TeachingStaff');
            $table->json('ServiceStaff');
            $table->json('TechnicalStaff');
            $table->json('HOD');
            $table->json('AdministrativeStaff');
            $table->json('Recommendations');
            $table->json('MajorDeficiencies');
            $table->json('MinorDeficiencies');
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
        Schema::dropIfExists('_h_n_d__s_l_t__biochemistry__s_s_qs');
    }
}
