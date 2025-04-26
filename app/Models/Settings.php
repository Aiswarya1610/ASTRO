<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Settings extends Model
{
    use HasFactory;
    protected $fillable = [
        'keyname',
        'value',
        'status',
        
    ];

    public static function getValue($key, $default = null)
    {
        return cache()->remember("setting_{$key}", 60*60, function () use ($key, $default) {
            return self::where('keyname', $key)->value('value') ?? $default;
        });
    }

    public static function setValue($key, $value)
    {
        self::updateOrCreate(['keyname' => $key], ['value' => $value]);
        cache()->forget("setting_{$key}");
    }
}

