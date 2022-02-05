<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class User extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'status'];


    public function scopeActive($query, $id = null)
    {
        if ($id !== null) {
            $query->where('id', $id);
        }
        return $query->where('status', true);
    }

    /*
    * Relations
    */
    public function posts(): hasMany
    {
        return $this->hasMany(Post::class);
    }

}
