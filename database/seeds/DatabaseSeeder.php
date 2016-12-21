<?php
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        Model::unguard();
        $this->call(SeederListaDeTarefas::class);
        $this->command->info('Tarefas adicionadas com sucesso a tabela ListaDeTarefas');
        Model::reguard();
    }
}
