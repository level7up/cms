<?php
namespace Level7up\CMS\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Level7up\Dashboard\Models\Behaviors\Editable;
use Level7up\Dashboard\Models\Behaviors\Destroyable;

Class Page extends Model
{
   use Editable, Destroyable, SoftDeletes;

    protected $base_route = "dashboard.pages";

    protected $fillable = ['slug','title_ar', 'title_en','content_ar', 'content_en'];
    
    public function getRouteKeyName()
    {
        return 'slug';
    }
    protected static function boot() {
        parent::boot();
        static::creating(function ( $page) {
            $page->slug = Str::slug($page->title_en);
        });
    }
    
    public function getTitleAttibute()
    {
        return is_rtl($this->title_ar, $this->title_en);
    }
}