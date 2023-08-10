<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Invoice extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function attachment()
    {
        return $this->morphMany(Attachment::class, 'attachmentable');
    } 

    public function products(): BelongsToMany
    {
        return $this->belongsToMany(Product::class);
    }
}
