<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

use App\Models\City;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up () : void {
        Schema::table('users', function (Blueprint $table) {
            $table->integer('age')->after('name');
            $table->foreignIdFor(City::class)->after('age');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down () : void {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('age');
        });
    }
};