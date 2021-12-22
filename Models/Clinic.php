<?php

namespace App\Models;

use App\Core\Database\MySql\Database;
use App\Core\Model;

class Clinic extends Model
{
    protected $table  = 'clinics';


    public function getSections($clinic_id)
    {
        return $this->getManytoManyRelation(
            $clinic_id,
            'clinic_section',
            'sections',
            'clinic_id',
            'section_id',

        );
        // $pivot = Database::onTable('clinic_section')->read(compact('clinic_id'));

        // $ids = [];
        // foreach ($pivot as $record) {
        //     array_push($ids, $record->section_id);
        // }

        // return Section::do()->readIn('id', $ids);
    }



    public function getSectionId($clinic_id)
    {
        return $this->getManytoManyIds(
            $clinic_id,
            'clinic_section',
            'clinic_id',
            'section_id',

        );
    }

    public function syncsection($clinic_id, array $ids)
    {
        Database::onTable('clinic_section')->remove([
            'clinic_id' => $clinic_id
        ]);
        foreach ($ids as $id) {
            Clinic::do()->setSection($clinic_id, $id);
        }
    }


    public function setSection($clinic_id, $section_id)
    {
        return $this->setManyToManyrelation($clinic_id, $section_id, 'clinic_section');
    }
}
