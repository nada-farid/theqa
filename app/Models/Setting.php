<?php

namespace App\Models;

use DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Spatie\Translatable\HasTranslations;

class Setting extends Model implements HasMedia
{
    use SoftDeletes, InteractsWithMedia, HasFactory, HasTranslations;

    public $table = 'settings';

    public $translatable = ['description','about_description' ,'home_section_1' , 'home_section_2' , 'why_us_text' , 'vision_text' , 'mission_text','chairman_description','contact_text','chairman_description','short_descrption'];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $appends = [
        'about_photo',
        'logo',
        'chairman_image',
        'about_image',
        'vision_image',
        'mission_image',
        'inner_image',
        'signature_image',
    ];

    protected $fillable = [
        'description',
        'phone',
        'address',
        'email',
        'facebook',
        'twitter',
        'linkedin',
        'youtubte',
        'about_description',
        'site_name',
        'instagram',
        'chairman_description',
        'counter_1_text',
        'counter_1_value',
        'counter_2_text',
        'counter_2_value',
        'counter_3_text',
        'counter_3_value',
        'counter_4_text',
        'counter_4_value',
        'short_descrption',
        'contact_text',
        'vision_text',
        'mission_text',
        'why_us_text',
        'home_section_1',
        'home_section_2',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }

    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaConversion('thumb')->fit('crop', 50, 50);
        $this->addMediaConversion('preview')->fit('crop', 120, 120);
    }

    public function getAboutPhotoAttribute()
    {
        $file = $this->getMedia('about_photo')->last();
        if ($file) {
            $file->url       = $file->getUrl();
            $file->thumbnail = $file->getUrl('thumb');
            $file->preview   = $file->getUrl('preview');
        }

        return $file;
    }

    public function getLogoAttribute()
    {
        $file = $this->getMedia('logo')->last();
        if ($file) {
            $file->url       = $file->getUrl();
            $file->thumbnail = $file->getUrl('thumb');
            $file->preview   = $file->getUrl('preview');
        }

        return $file;
    }
    public function getWhiteLogoAttribute()
    {
        $file = $this->getMedia('white_logo')->last();
        if ($file) {
            $file->url       = $file->getUrl();
            $file->thumbnail = $file->getUrl('thumb');
            $file->preview   = $file->getUrl('preview');
        }

        return $file;
    }


    public function getChairmanImageAttribute()
    {
        $file = $this->getMedia('chairman_image')->last();
        if ($file) {
            $file->url       = $file->getUrl();
            $file->thumbnail = $file->getUrl('thumb');
            $file->preview   = $file->getUrl('preview');
        }

        return $file;
    }

    public function getAboutImageAttribute()
    {
        $file = $this->getMedia('about_image')->last();
        if ($file) {
            $file->url       = $file->getUrl();
            $file->thumbnail = $file->getUrl('thumb');
            $file->preview   = $file->getUrl('preview');
        }

        return $file;
    }

    public function getVisionImageAttribute()
    {
        $file = $this->getMedia('vision_image')->last();
        if ($file) {
            $file->url       = $file->getUrl();
            $file->thumbnail = $file->getUrl('thumb');
            $file->preview   = $file->getUrl('preview');
        }

        return $file;
    }

    public function getMissionImageAttribute()
    {
        $file = $this->getMedia('mission_image')->last();
        if ($file) {
            $file->url       = $file->getUrl();
            $file->thumbnail = $file->getUrl('thumb');
            $file->preview   = $file->getUrl('preview');
        }

        return $file;
    }

    public function getInnerImageAttribute()
    {
        $file = $this->getMedia('inner_image')->last();
        if ($file) {
            $file->url       = $file->getUrl();
            $file->thumbnail = $file->getUrl('thumb');
            $file->preview   = $file->getUrl('preview');
        }

        return $file;
    }

    public function getSignatureImageAttribute()
    {
        $file = $this->getMedia('signature_image')->last();
        if ($file) {
            $file->url       = $file->getUrl();
            $file->thumbnail = $file->getUrl('thumb');
            $file->preview   = $file->getUrl('preview');
        }

        return $file;
    }

    public function toArray()
    {
        $attributes = parent::toArray();

        foreach ($this->getTranslatableAttributes() as $name) {
            $attributes[$name] = $this->getTranslation($name, app()->getLocale());
        }

        return $attributes;
    }
}
