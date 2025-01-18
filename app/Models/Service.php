<?php

namespace App\Models;

use DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Spatie\Translatable\HasTranslations;

class Service extends Model implements HasMedia
{
    use InteractsWithMedia, HasFactory , HasTranslations;

    public $table = 'services';

    public $translatable = ['name','short_description' ,'description'];

    protected $appends = [
        'image',
        'inside_image',
        'small_image',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'name',
        'description',
        'short_description',
        'category_id',
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

    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaConversion('thumb')->fit('crop', 50, 50);
        $this->addMediaConversion('preview')->fit('crop', 120, 120);
    }

    public function getImageAttribute()
    {
        $file = $this->getMedia('image')->last();
        if ($file) {
            $file->url       = $file->getUrl();
            $file->thumbnail = $file->getUrl('thumb');
            $file->preview   = $file->getUrl('preview');
        }

        return $file;
    }

    public function getInsideImageAttribute()
    {
        $file = $this->getMedia('inside_image')->last();
        if ($file) {
            $file->url       = $file->getUrl();
            $file->thumbnail = $file->getUrl('thumb');
            $file->preview   = $file->getUrl('preview');
        }

        return $file;
    }

    public function getSmallImageAttribute()
    {
        $file = $this->getMedia('small_image')->last();
        if ($file) {
            $file->url       = $file->getUrl();
            $file->thumbnail = $file->getUrl('thumb');
            $file->preview   = $file->getUrl('preview');
        }

        return $file;
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
}
