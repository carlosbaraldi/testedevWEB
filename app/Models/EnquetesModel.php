<?php

namespace App\Models;

use CodeIgniter\Model;

class EnquetesModel extends Model
{
    protected $table = 'tbEnquetes';
    protected $primaryKey = 'idEnquete';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;



    protected $allowedFields = [
        'idUsuario',
        'tituloEnquete',
        'perguntaEnquete',
        'urlLink'
    ];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';


    protected $validationRules = [
        'tituloEnquete' => 'required',
        'perguntaEnquete' => 'required',
    ];


    public function ultimoID()
    {
        $query = $this->query("SELECT idEnquete FROM tbEnquetes ORDER BY idEnquete DESC LIMIT 1")->getResultArray();

        $ultimoID = ($query['0']['idEnquete']);

        return $ultimoID;
    }


    public function enquetesJoinRespostas($idEnquete)
    {


        $db = db_connect();

        $builder = $db->table('tbEnquetes');

        $builder->join('tbRespostas', 'tbRespostas.enquete_id = tbEnquetes.idEnquete')->where('tbEnquetes.idEnquete', $idEnquete);

        $query = $builder->get();

        $query =  $query->getResultArray();

        

        return $query;
    }

 
}
