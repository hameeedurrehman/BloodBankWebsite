<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('donors', function (Blueprint $table) {
            
            $table->string("name",35);
            $table->string("fathername",35);
            $table->string("address",35);
            $table->string("phoneno",35);
            $table->string("cnic",35)->primary();
            $table->string("dob",35);
            $table->string("age",35);
            $table->string("gender",35);
            $table->unsignedbiginteger('Bloodgroup');
            $table->foreign('Bloodgroup')->references('id')->on('bloodgroups') 
            ->onDelete('cascade');
            $table->unsignedbiginteger('Hospital');
            $table->foreign('Hospital')->references('id')->on('hospitals') 
            ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('donors');
    }
};
