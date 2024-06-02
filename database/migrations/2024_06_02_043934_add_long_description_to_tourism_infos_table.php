<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('tourism_infos', function (Blueprint $table) {
            $table->text('long_description')->nullable()->after('description');
        });
    }
    
    public function down()
    {
        Schema::table('tourism_infos', function (Blueprint $table) {
            $table->dropColumn('long_description');
        });
    }    
};
