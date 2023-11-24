<?php

namespace App\Traits;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

trait HasSlug
{
    protected static function bootHasSlug()
    {
        static::creating(function ($model) {
            $model->slug = $model->generateUniqueSlug($model->name);
        });
    }

    private function generateUniqueSlug($name)
    {
        $slug = Str::slug($name);
        $counter = 1;

        while ($this->slugExists($slug)) {
            $slug = Str::slug($name) . '-' . $counter;
            $counter++;
        }

        return $slug;
    }

    private function slugExists($slug)
    {
        return DB::table($this->getTable())
            ->where('slug', $slug)
            ->where('id', '!=', $this->id)
            ->exists();
    }
}
