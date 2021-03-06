<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 *
 * @OA\Schema(
 * schema="Artist",
 * required={"id","name","description"},
 * @OA\Property(property="id", type="integer", example="1"),
 * @OA\Property(property="name", type="string", example="Dvoreckov"),
 * @OA\Property(property="description", type="string", example="Певец самородок"),
 * )
 *
 * Class Artist
 *
*/


class Artist extends Model
{
    protected $table = 'artists';

    protected $fillable = [
        'name',
        'description'
    ];

    public function toArray()
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'description' => $this->description,
        ];
    }
}
