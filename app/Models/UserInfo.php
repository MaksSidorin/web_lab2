<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 *
 * @OA\Schema(
 * schema="Profile",
 * required={"id","name", "email"},
 * @OA\Property(property="id", type="integer", example="1"),
 * @OA\Property(property="name", type="string", example="Maks"),
 * @OA\Property(property="email", type="string", example="myemail@.ru")
 * )
 *
 * Class Profile
 *
*/


class UserInfo extends Model
{
    protected $table = 'user_info';

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
