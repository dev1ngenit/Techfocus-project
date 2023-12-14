<?php

namespace App\Traits;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

trait HasSlug
{
    protected static function bootHasSlug()
    {
        static::creating(function ($model) {
            if (!isset($model->slugSourceColumn)) {
                throw new \Exception('Slug source column is not defined in the model.');
            }

            $slugSourceColumn = $model->slugSourceColumn;
            $model->slug = $model->generateUniqueSlug($model->$slugSourceColumn);
        });
    }

    private function generateUniqueSlug($value)
    {
        $slug = Str::slug($value);
        $counter = 1;

        while ($this->slugExists($slug)) {
            $slug = Str::slug($value) . '-' . $counter;
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
