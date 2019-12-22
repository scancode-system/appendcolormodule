<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Modules\Portal\Entities\Validation; 
use Modules\Portal\Entities\Append; 

class InsertAppendsRecordsAppendcolor extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $validation = Validation::where('module_name', 'ValidationProduct')->first();
        Append::create(['validation_id' => $validation->id, 'module' => 'AppendColor', 'alias' => 'Cor - (Produto)']);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        (Append::where('module', 'AppendColor')->first())->delete();
    }
}
