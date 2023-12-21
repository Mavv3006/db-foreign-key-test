<?php

use App\Models\TestB;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::table('test_as', function (Blueprint $table) {
            $table->foreignIdFor(TestB::class)->constrained();
        });
    }
};
