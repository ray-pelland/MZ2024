<?php

namespace App\Models;

use CodeIgniter\Model;

class TunesModel extends Model
{
    protected $table      = 'mztunes';
    protected $primaryKey = 'memID';

    protected $useAutoIncrement = false;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = [''];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = true;


    /*    fn01=>null,fn02=>null,fn03=>null,fn04=>null,fn05=>null,fn06=>null,fn07=>null,fn08=>null,fn09=>null,fn10=>null,fn11=>null,fn12=>null,
        fn13=>null,fn14=>null,fn15=>null,fn16=>null,fn17=>null,fn18=>null,fn19=>null,fn20=>null,fn21=>null,fn22=>null,fn23=>null,fn24=>null,
       fn25=>null,fn26=>null,fn27=>null,fn28=>null,fn29=>null,fn30=>null,fn31=>null,fn32=>null,fn33=>null,fn34=>null,fn35=>null,fn36=>null
    */



}
