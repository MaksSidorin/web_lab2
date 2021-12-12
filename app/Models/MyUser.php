<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 *
 * @OA\Schema(
 * schema="MyUser",
 * @OA\Property(property="name", type="string", example="Maks"),
 * @OA\Property(property="email", type="string", example="sidorin.maks@mail..ru")
 * )
 *
 * Class MyUser
 *
*/


class MyUser extends Model
{
    protected $table = 'user';

    protected $fillable = [
        'name',
        'email'
    ];

    public function toArray()
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'email' => $this->email,
        ];
    }
}
