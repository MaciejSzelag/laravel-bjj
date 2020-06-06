<?php
namespace App\Persistance;

use Illuminate\Database\Eloquent\Model;

class EloquentTimetableClassInformation extends Model
{
    protected $table = 'class_information';

    protected $fillable = ['title','content','title_text_color','title_background_color'];
}
