<?php namespace App\Modules\News\Models;

use SoftDeletingTrait, BaseModel;

class Newscat extends BaseModel {

    use SoftDeletingTrait;

    protected $dates = ['deleted_at'];

    protected $fillable = ['title'];

    public static $fileHandling = ['image' => ['type' => 'image']];
    
    public static $rules = [
        'title'   => 'required',
    ];

    public static $relationsData = [
        'creator'   => [self::BELONGS_TO, 'User', 'title' => 'username'],
    ];
    
}