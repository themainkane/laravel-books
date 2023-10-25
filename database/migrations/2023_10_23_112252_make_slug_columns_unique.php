<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // schema::table("authors", function (Blueprint $table) {
        //     $table->unique('slug');
        // });
        schema::table("categories", function (Blueprint $table) {
            $table->unique('slug');
        });
        schema::table("publishers", function (Blueprint $table) {
            $table->unique('slug');
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        schema::table("authors", function (Blueprint $table) {
            $table->dropIndex('slug');
        });
        schema::table("publishers", function (Blueprint $table) {
            $table->dropIndex('slug');
        });

        schema::table("categories", function (Blueprint $table) {
            $table->dropIndex('slug');
        });

    }
};
