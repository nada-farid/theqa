<?php

namespace App\Models;

use DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Translatable\HasTranslations;


class Strategy extends Model
{
    use SoftDeletes, HasFactory, HasTranslations;


    public $table = 'strategies';

    public $translatable = ['title', 'description'];


    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'title',
        'description',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected static function booted()
    {
        static::retrieved(function ($model) {
            foreach ($model->getTranslatableAttributes() as $name) {
                $fallbackLocale = app()->getLocale() === 'ar' ? 'en' : 'ar';
                $model->{$name} = $model->getTranslation($name,app()->getLocale()) ?  $model->getTranslation($name,app()->getLocale()) :  $model->getTranslation($name, $fallbackLocale) ;
            }
        });
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }

}
