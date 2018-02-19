<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProvincesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        $prov_array = array(
            'Abra',
            'Agusan del Norte',
'Agusan del Sur',
'Aklan',
'Albay',
'Antique',
'Apayao',
'Aurora',
'Basilan',
'Bataan',
'Batanes',
'Batangas',
'Benguet',
'Biliran',
'Bohol',
'Bukidnon',
'Bulacan',
'Cagayan',
'Camarines Norte',
'Camarines Sur',
'Camiguin',	
'Capiz',
'Catanduanes',
'Cavite',
'Cebu',
'Compostela Valley',
'Cotabato',
'Davao del Norte',
'Davao del Sur',
'Davao Oriental',
'Dinagat Islands',
'Eastern Samar',
'Guimaras',
'Ifugao',
'Ilocos Norte',
'Ilocos Sur',
'Iloilo',
'Isabela',
'Kalinga',
'La Union',
'Laguna',
'Lanao del Norte',
'Lanao del Sur',
'Leyte',
'Maguindanao',
'Marinduque',
'Masbate',
'Metro Manila',
'Misamis Occidental',
'Misamis Oriental',
'Mountain Province',
'Negros Occidental',
'Negros Oriental',
'Northern Samar',
'Nueva Ecija',
'Nueva Vizcaya',
'Occidental Mindoro',
'Oriental Mindoro',
'Palawan',
'Pampanga',
'Pangasinan',
'Quezon',
'Quirino',
'Rizal',
'Romblon',
'Samar',
'Sarangani',
'Shariff Kabunsuan',
'Siquijor',
'Sorsogon',
'South Cotabato',
'Southern Leyte',
'Sultan Kudarat',
'Sulu',
'Surigao del Norte',
'Surigao del Sur',
'Tarlac',
'Tawi-Tawi',
'Zambales',
'Zamboanga del Norte',
'Zamboanga del Sur',
'Zamboanga Sibugay',
        );
        Schema::create('provinces', function (Blueprint $table) {
            $table->increments('prov_id');
            $table->string('prov_name', 70);
        });

        foreach($prov_array as $arr){
            DB::table('provinces')->insert(
                array(
                    'prov_name' => $arr
                )
            );
        }

        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('provinces');
    }
}
