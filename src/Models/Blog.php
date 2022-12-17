<?php
namespace Level7up\CMS\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Level7up\Dashboard\Models\Behaviors\Editable;
use Level7up\Dashboard\Models\Behaviors\Destroyable;

Class Blog extends Model
{
   use Editable, Destroyable;

    protected $base_route = "dashboard.blogs";

    protected $fillable = ['title','slug','description','body','image','locale', 'author_id', 'author_type'];

    public function getRouteKeyName()
    {
        return 'slug';
    }
    public function author()
    {
        return $this->morphTo();
    }

    protected static function boot() {
        parent::boot();

        static::creating(function ( $blog) {
            $blog->slug = Str::slug($blog->title);
        });
    }
}