<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * 
     */
    public function up(): void
    {
        Schema::create('teas', function (Blueprint $table) {
            $table->id();
            $table->string('name',150);
            $table->string('image_path');
            $table->decimal('price',11,2)->unsigned();
            $table->string('specification');
            $table->bigInteger('stock')->default(0);
            $table->decimal('discount', 4, 2)->default(0);
            $table->timestamps();

#section for reference and notes, 
            // $table->id(); //bigint unsigned auto_increment not_null primary_key

            // #szöveges mezők
            // $table->string('name',150);//varchar(150)
            // $table->string('image_path')->unique()->index();//varchar(255)
            // $table->text('specification')->nullable();//text

            // #számok egész
            // $table->integer('sfd');
            // $table->bigInteger('price')->unsigned()->default(0);
            // $table->boolean('stock')->default(true); //tinyint(1), 0

            // #számok tizedes
            // $table->decimal('discount', 8, 2) ;
            // $table->float('rating');
            // $table->double('precise_weight_grams');

            // #Időpontok és dátumok
            // $table->date('harvest_date')->nullable();#(éééé-hh-nn)
            // $table->dateTime('last_ordered_at')->nullable();#(éééé-hh-nn óó:pp:mm)
        
            // #Speciális és strukturált mezők
            // $table->enum('type', ['black', 'green', 'herbal', 'white', 'oolong']);
            // $table->json('extra_attributes')->nullable();

            // #Kapcsolatok
            // $table->foreignId('supplier_id');//bigint unsigned, 

            // #Időbélyegek

            // $table->timestamps(); #created_at, updated_at
#endsection
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teas');
    }
};
