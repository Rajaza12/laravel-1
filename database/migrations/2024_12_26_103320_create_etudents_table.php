<?php

use App\Models\Groupe;
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
        Schema::create('etudents', function (Blueprint $table) {
            $table->id();
            
            $table->string('name');
            // $table->bigInteger('id_groupe');
            // $table->foreing('id_groupe')->references('id')->on('groupe');
            $table->foreignIdFor(Groupe::class)->constrained()->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('etudents');
    }
};
