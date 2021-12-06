<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use App\Models\Artist;

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
