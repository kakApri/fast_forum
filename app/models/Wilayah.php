<?php

class Wilayah extends Eloquent
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'wilayah';
    protected $primaryKey = 'kode';
    protected $connection = 'mysql2';

    public function fakta(){
    	return $this->hasMany('Fakta','kode_wilayah','kode');
    }


}