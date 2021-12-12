<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use App\Models\Artist;

/**
 * @OA\GET(
 * path="/artist",
 * summary="Список исполнителей",
 * description="Получить список всех исполнителей",
 * tags={"Артист"},
 * @OA\Response(
 *    response=200,
 *    description="Получение списка исполнителей",
 *    @OA\JsonContent(
 *       @OA\Property(property="artist", type="array",
     @OA\Items(ref="#/components/schemas/Artist"),)
 *       )
 *    )
 * )
*/

/**
 * @OA\GET(
 * path="/artist/{id}",
 * summary="Конкретный артист",
 * description="Получить конкретного артиста",
 * tags={"Артист"},
 * @OA\Response(
 *    response=200,
 *    description="Получение конкретного артиста",
 *    @OA\JsonContent(
 *        @OA\Property(property="artist", type="object", ref="#/components/schemas/Artist"),
 *     )
 *    ),
 * @OA\Response(
 *    response=404,
 *    description="Артист не найден",
 *    @OA\JsonContent(
 *       @OA\Property(property="message", type="string", example="ARTIST_NOT_FOUND")
 *        )
 *     )
 * )
*/



class ArtistController extends Controller {


    public function index() {
        return Artist::all();
    }

    public function show(Int $id) {
        $result = null;

        $artist = Artist::query()
                            ->where(['id' => $id])
                            ->first();

        if ($artist === null) {
                    throw new NotFoundHttpException('Артист не найден.');
                }
        return $artist;
    }
}
