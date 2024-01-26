<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsToClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('clients', function (Blueprint $table) {
            $table->string('nid', 191)->nullable();
            $table->string('telephone', 191)->nullable();
            $table->string('whatsapp', 191)->nullable();
            $table->string('presentAddress', 191)->nullable();
            $table->string('permanentAddress', 191)->nullable();
            $table->string('fathersName', 191)->nullable();
            $table->string('mothersName', 191)->nullable();
            $table->string('dateOfBirth', 191)->nullable();
            $table->string('passportNumber', 191)->nullable();
            $table->string('maritalStatus', 191)->nullable();
            $table->string('spouseName', 191)->nullable();
            $table->string('spouseAge', 191)->nullable();
            $table->string('spouseProfession', 191)->nullable();

            $table->string('spousePhoto', 191)->nullable();

            $table->string('child1Name', 191)->nullable();
            $table->string('child1Age', 191)->nullable();
            $table->string('child1Profession', 191)->nullable();

            $table->string('child1Photo', 191)->nullable();

            $table->string('child2Name', 191)->nullable();
            $table->string('child2Age', 191)->nullable();
            $table->string('child2Profession', 191)->nullable();

            $table->string('child2Photo', 191)->nullable();

            $table->string('child3Name', 191)->nullable();
            $table->string('child3Age', 191)->nullable();
            $table->string('child3Profession', 191)->nullable();

            $table->string('child3Photo', 191)->nullable();

            $table->string('child4Name', 191)->nullable();
            $table->string('child4Age', 191)->nullable();
            $table->string('child4Profession', 191)->nullable();
            
            $table->string('child4Photo', 191)->nullable();

            $table->string('bloodGroup', 191)->nullable();
            $table->string('religion', 191)->nullable();
            $table->string('emergencyContact', 191)->nullable();
            $table->string('interests', 191)->nullable();
            $table->string('designation', 191)->nullable();
            $table->string('institution', 191)->nullable();
            $table->string('otherClubMembership', 191)->nullable();
            $table->string('socialActivity', 191)->nullable();
            $table->string('joinClubReason', 191)->nullable();
            $table->string('membershipNumber', 191)->nullable();
            $table->string('membershipCardNumber', 191)->nullable();
            $table->string('memberCategory', 191)->nullable();
            $table->string('paymentMode', 191)->nullable();
            $table->string('paymentDetails', 191)->nullable();
            $table->string('yearlySubscription', 191)->nullable();
            $table->string('refundableAmount', 191)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('clients', function (Blueprint $table) {
            //
        });
    }
}
