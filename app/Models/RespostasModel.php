<?php

namespace App\Models;

use CodeIgniter\Model;

class RespostasModel extends Model
{
    protected $table = 'tbRespostas';
    protected $primaryKey = 'idResposta';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = [
        'enquete_id',
        'resposta',
        'qtdVotos'
    ];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';


    protected $validationRules = [
        'resposta' => 'required'
    ];

}
