<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transfusao extends Model implements Authenticatable
{
    use HasFactory;

    protected $fillable = ['historico_id', 'data'];

    public static $rules = ['historico_id'=>'required', 'data'=>'required'];

    public static $messages = ['historico_id.*' => 'O campo Historico Id é obrigatório',
                                'data.*'=>'O campo data é obrigatório'];

    public function historico(){
      return $this->belongsTo('central-do-pet\Historico');
    }

    public function getAuthIdentifierName()
    {
        // TODO: Implement getAuthIdentifierName() method.
    }

    public function getAuthIdentifier()
    {
        // TODO: Implement getAuthIdentifier() method.
    }

    public function getAuthPassword()
    {
        // TODO: Implement getAuthPassword() method.
    }

    public function getRememberToken()
    {
        // TODO: Implement getRememberToken() method.
    }

    public function setRememberToken($value)
    {
        // TODO: Implement setRememberToken() method.
    }

    public function getRememberTokenName()
    {
        // TODO: Implement getRememberTokenName() method.
    }
}
