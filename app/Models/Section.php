<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    use HasFactory;
    

    protected $fillable=[
        'name','grade_id','classroom_id',
        'status'
    ];

    public function grade(){
        return $this->belongsTo(Grade::class,'grade_id','id');
    }
    
    public function classroom(){
        return $this->belongsTo(Classroom::class,'classroom_id','id');
    }
}
