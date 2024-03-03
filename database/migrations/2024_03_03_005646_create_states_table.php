<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

use App\Models\Country;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up () : void {
        Schema::create('states', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignIdFor(Country::class)->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down () : void {
        Schema::dropIfExists('states');
    }
};