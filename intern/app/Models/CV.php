<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use phpDocumentor\Reflection\DocBlock\Tags\Formatter;

class CV extends Model
{
    use HasFactory;


    protected $table = 'cv';

    protected $primaryKey = 'id';

    protected $fillable = [
        'first_name',
        'middle_name',
        'last_name',
        'date_of_birth',
        'university_name',
        'grade',
        'technologies',
    ];

    /**
     * set the categories
     */
    public function setCatAttribute($value)
    {
        $this->attributes['technologies'] = json_encode($value);
    }

    /**
     * Get the categories
     *
     */
    public function getCatAttribute($value)
    {
        return $this->attributes['technologies'] = json_decode($value);
    }

    /**
     * @param $value
     *
     */
    public function setBirthDateAttribute($value){
        $this->attributes['date_of_birth']=Carbon::createFromFormat('m/d/Y',$value)->format('Y-m-d');
    }

    /**
     * @return Carbon
     *
     */
    public function getBirthDateAttribute(){
       return Carbon::createFromFormat('Y-m-d', $this->attributes['date_of_birth'])->format('m/d/Y');
    }
}
