<?php

namespace App\Models;


use App\Models\Image;
use App\Models\Category;
use Laravel\Scout\Searchable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Article extends Model
{
    use HasFactory;
    use Searchable;

    public function toSearchableArray()
    {
        return [
            'id'=>$this->id,
            'title'=>$this->title,
            'description'=>$this->description,
            'category'=>$this->category
       ];
    }

    protected $fillable = [
        'title',
        'description',
        'price',
        'category_id',
        'user_id'
    ];

    public function user():BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    
    public function category():BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    
    public function setAccepted($value){

        $this->is_accepted = $value;
        $this->save();
        return true;
    }

    public static function toBeRevisedCount()
    {
        $userId = Auth::id();
        return self::where('is_accepted', null)
                ->where('user_id', '!=', $userId)
                ->count();
    }

    public function images():HasMany
    {
        return $this->hasMany(Image::class);
    }
        
}
