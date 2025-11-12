<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
 
class Post extends Model
{
    use HasFactory;
 
    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'user_id',
        'name',
        'contents',
    ];
 
    /**
     * Disable timestamps (created_at, updated_at)
     *
     * @var bool
     */
    public $timestamps = false;
}