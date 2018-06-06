<?php namespace mine_apple;

use Illuminate\Database\Eloquent\Model;

class Assinatura extends Model {

    protected $tabel = 'assinatura';
    public $timestamps = false
    protected $guarded = ['id'];

    public function produtor() {
    	return $this->hasOne('App/Pordutor', 'foreign_key');
    }

    public function compra() {
    	return $this->hasOne('App/Compra', 'foreign_key');
    }

    public function pagamento() {
    	return $this->hasMany('App/Pagamento', 'foreign_key');
    }

    public function avaliacao() {
    	return $this->hasMany('App/Avaliacao', 'foreign_key');
    }	

}