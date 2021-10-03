<?php

namespace App\Models;

use CodeIgniter\Model;

class UsuariosModel extends Model
{
    protected $table = 'tbUsuarios';
    protected $primaryKey = 'idUsuario';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = [
        'nome',
        'userName',
        'senha'
    ];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';


    protected $validationRules = [
        'nome' => 'required',
        'userName' => 'required',
    ];

    /**
     * Retorna um usuário pelo seu e-mail
     *
     * @param string $email
     * @return array
     */
    public function getByEmail(string $email): array
    {
        $rq =  $this->where('userName', $email)->first();

        return !is_null($rq) ? $rq : [];
    }


    public function usuariosJoinEnquetes($idUsuario)
    {

        $db = db_connect();

        $builder = $db->table('tbUsuarios');

        $builder->join('tbEnquetes', 'tbEnquetes.idUsuario = tbUsuarios.idUsuario')->where('tbUsuarios.idUsuario', $idUsuario)->orderBy('idEnquete', 'DESC');

        $query = $builder->get();

        $query =  $query->getResultArray();



        return $query;
    }

}
