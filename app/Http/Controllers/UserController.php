<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use App\Models\MyUser;
use App\Models\UserInfo;

/**
 * @OA\GET(
 * path="/profile/{personal_hash}",
 * summary="Получить профиль",
 * description="Получить профиль пользователя",
 * tags={"Профиль"},
 * @OA\Response(
 *    response=200,
 *    description="Получение профиля",
 *    @OA\JsonContent(
 *        @OA\Property(property="profile", type="object", ref="#/components/schemas/Profile"),
 *     )
 *    ),
 * @OA\Response(
 *    response=404,
 *    description="Пользователь не найден",
 *    @OA\JsonContent(
 *       @OA\Property(property="message", type="string", example="USER_NOT_FOUND")
 *        )
 *     )
 * )
*/

/**
 * @OA\POST(
 * path="/auth",
 * summary="Авторизация",
 * description="Авторизация",
 * tags={"Авторизация"},
 * @OA\RequestBody(
 *    required=true,
 *    description="Данные о пользователе",
 *    @OA\JsonContent(
 *       required={"name","email"},
 *       @OA\Property(property="name", type="string", example="Maks"),
 *       @OA\Property(property="email", type="string", example="maks@mail.ru"),
 *    ),
 * ),
 * @OA\Response(
 *    response=200,
 *    description="Получение профиля",
 *    @OA\JsonContent(
 *        @OA\Property(property="result", type="boolean", example="true"),
 *        @OA\Property(property="personal_hash", type="string", example="qvde3vf3f4v3vubo5tb5nb03vv02v2v042v0v2jvv3"),
 *     )
 *    ),
 * @OA\Response(
 *    response=403,
 *    description="Пользователь не найден",
 *    @OA\JsonContent(
 *        @OA\Property(property="result", type="boolean", example="false"),
 *     )
 *    )
 * )
*/

public function show(String $personalHash) {
        $profiles = UserInfo::all();
        $result = null;

        foreach ($profiles as $profile) {
            if (hash("sha256", $profile->name) == $personalHash) {
                $result = $profile;
            }
        }

        if ($result === null) {
            throw new NotFoundHttpException('Пользователь не найден.');
        }

        return $result;
    }

    public function auth(Request $request) {
        $profile = MyUser::query()
            ->where([
                ['name', '=', $request->get('name')],
                ['email', '=', $request->get('email')]
            ])
            ->first();

        if ($profile === null) {
            return response(['result' => false], 403);
        }

        return response(['result' => true, 'personal_hash' => hash('sha256', $profile->name)], 200);
    }
}

