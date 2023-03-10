<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;


class Escola extends Model {
    use HasFactory;

    protected $fillable = ['nome', 'cie', 'regiao', 'bairro', 'endereco', 'observacao'];



    // public function users() {
    //     return $this->hasMany(User::class, 'escola_sede_id', 'id');
    // }

    public function users(){
        return $this->belongsToMany(User::class);
    }

    // Accessors
    public function getFormatedObsAttribute() {
        if($this->attributes['observacao'] == "")  {
            return "Sem Observações.";
        } else {
            return $this->attributes['observacao'];
        }
    }

    public function getGestoresAttribute() {
        return $this->users->where('cargo', '=', 'gestor');
    }

    public function getAdministrativosAttribute() {
        return $this->users->where('cargo', '=', 'administrativo');
    }





}