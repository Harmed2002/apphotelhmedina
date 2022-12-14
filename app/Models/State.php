<?php

namespace App\Models;

/*use Illuminate\Database\Eloquent\Factories\HasFactory;*/
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class State extends Model
{
    use SoftDeletes;
    /*use HasFactory;*/
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'states';
    protected $fillable = ['id_country', 'nombre'];
    protected $hidden = ['id'];


    public function getStateById($id)
    {
        return State::find($id);
    }

    public function Hotel()
    {
        return $this->hasMany('App\Models\Hotel', 'id', 'id_state' );
    }

    public function City()
    {
        return $this->hasMany('App\Models\City', 'id', 'id_state' );
    }

    public function Country()
    {
        return $this->belongsTo('App\Models\Country', 'id_country', 'id');
    }

}
