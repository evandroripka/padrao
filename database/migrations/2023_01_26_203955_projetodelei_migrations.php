<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ProjetodeleiMigrations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Cria tabela ProjetosdeLei com os campos id,titulo, n_lei, ano, atualizacao, id_entidade, id_autor, emissao_de_certificado, status, timestamp, user_id
        Schema::create('projetosdelei', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->text('descricao')->nullable();
            $table->string('n_lei');
            $table->string('ano');
            $table->string('atualizacao');
            $table->integer('id_entidade');
            $table->integer('id_autor');
            $table->string('emissao_de_certificado')->nullable();
            $table->integer('status');
            $table->integer('user_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
