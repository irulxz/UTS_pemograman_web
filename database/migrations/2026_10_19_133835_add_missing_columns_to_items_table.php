<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('items', function (Blueprint $table) {
            if (!Schema::hasColumn('items', 'category_id')) {
                $table->foreignId('category_id')
                    ->nullable()
                    ->constrained('categories')
                    ->restrictOnDelete();
            }

            if (!Schema::hasColumn('items', 'name')) {
                $table->string('name')->nullable();
            }

            if (!Schema::hasColumn('items', 'price')) {
                $table->decimal('price', 12, 2)
                    ->default(0);
            }

            if (!Schema::hasColumn('items', 'stock')) {
                $table->unsignedInteger('stock')
                    ->default(0);
            }
        });
    }

    public function down(): void
    {
        Schema::table('items', function (Blueprint $table) {
            if (Schema::hasColumn('items', 'category_id')) {
                $table->dropForeign(['category_id']);
                $table->dropColumn('category_id');
            }

            if (Schema::hasColumn('items', 'name')) {
                $table->dropColumn('name');
            }

            if (Schema::hasColumn('items', 'price')) {
                $table->dropColumn('price');
            }

            if (Schema::hasColumn('items', 'stock')) {
                $table->dropColumn('stock');
            }
        });
    }
};
