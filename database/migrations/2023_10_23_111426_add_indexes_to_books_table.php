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
        Schema::table('books', function (Blueprint $table) {
            $table->unique('slug');
            $table->unique('isbn');
            $table->index(['title', 'category_id', 'price', 'publication_date']);
            $table->fulltext('description');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('books', function (Blueprint $table) {
            $table->dropIndex('slug');
            $table->unique('isbn');
            $table->dropIndex(['title', 'category_id', 'price', 'publication_date']);
            $table->dropIndex(['description']);
        });
    }
};
