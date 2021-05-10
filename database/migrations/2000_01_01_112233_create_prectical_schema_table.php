<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrecticalSchemaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement('CREATE SCHEMA IF NOT EXISTS rlogical_practical');
        // DB::statement("CREATE SCHEMA IF NOT EXISTS env('DB_DATABASE')");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         DB::statement('DROP SCHEMA IF EXISTS rlogical_practical');
         // DB::statement("DROP SCHEMA IF EXISTS env('DB_DATABASE')");
    }
}
