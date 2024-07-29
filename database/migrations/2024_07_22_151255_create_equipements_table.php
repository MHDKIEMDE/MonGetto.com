<?php




use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEquipementsTable extends Migration
{
    public function up()
    {
        Schema::create('equipements', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Nom de l'équipement
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('equipements');
    }
}


// use Illuminate\Database\Migrations\Migration;
// use Illuminate\Database\Schema\Blueprint;
// use Illuminate\Support\Facades\Schema;

// return new class extends Migration
// {

//     public function up(): void
//     {
//         Schema::create('equipements', function (Blueprint $table) {
//             $table->id();
//             $table->foreignId('propriete_id')->constrained()->onDelete('cascade');
//             $table->foreignId('equipement_id')->constrained()->onDelete('cascade');
//             $table->timestamps();
//         });
//     }

//     public function down(): void
//     {
//         Schema::dropIfExists('equipements');
//     }
    





// };
