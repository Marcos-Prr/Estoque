<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        $this->call('ProdutoTableSeeder');
        // $this->call(UsersTableSeeder::class);
    }
}

class ProdutoTableSeeder extends Seeder {
    public function run()
    {
        DB::insert('insert into produtos (nome,quantidade,valor,descricao)
        values(?,?,?,?)',array('geladeira',2,50,'side by side com gelo'));
        
        DB::insert('insert into produtos (nome,quantidade,valor,descricao)
        values(?,?,?,?)',array('fogao',5,100,'automatico'));
        
        DB::insert('insert into produtos (nome,quantidade,valor,descricao)
        values(?,?,?,?)',array('microondas',1,150,'esquenta tudo'));
        

    }
}
