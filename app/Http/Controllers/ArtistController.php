<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class ArtistController extends Controller {

    protected $ARTIST = [
        [
            'id' => '1',
            'name' => "Big Baby Tape",
            'description' => "Big Baby Tape (Биг Бэйби Тэйп) – рэп-исполнитель, саунд-продюсер. Начинал свою творческую карьеру с создания минусов под ником DJ Tape. В 2016 году представил первый инструментальный альбом The Further Adventures Inside The Trap. В 2017-ом порадовал слушателей микстейпом Cookin Anthem, а спустя год артист презентовал релиз под названием Hustle Tales. Широкую известность получил после сольника Dragonborn, который был выпущен во второй половине 2018-го."
        ],
        [
            'id' => '2',
            'name' => "Kizaru",
            'description' => "Олег Нечипоренко, более известный под псевдонимом KIZARU, впервые увидел свет 21-го мая 1989 года в Ленинграде.И наконец после очень продолжительного ожидания 3 ноября 2017 года выходит новый альбом KIZARU «Яд», в трек-лист которого входит восемнадцать композиций. Альбом который так долго ждали все поклонники Кизару, занимает первое место в топе айтюнса, и приносит много шума его персоне."
        ],
        [
            'id' => '3',
            'name' => "Скриптонит",
            'description' => "Скриптонит - рэпер с казахскими корнями приобрел известность на родине еще в юности, а к 26 годам стал открытием в российской музыке. Будучи на вершине успеха, исполнитель решил сделать перерыв в сольном творчестве, но реализовал талант в группе и коллаборациях с другими известными музыкантами. Исполнитель и музыкальный продюсер, основатель лейбла Musica36."
        ],
        [
        'id' => '4',
        'name' => "Макс Корж",
        'description' => "Макс Корж — молодой, энергичный и талантливый исполнитель из Беларуси, собирающий крупнейшие концертные площадки по всему миру. Его песни — это некий гибрид клубного и дворового жанров. При этом на выходе «рождаются» 100-процентные хиты. Он говорит, что музыка — это его все. Популярность рэпера зашкаливает, что не мешает Максу ломать стереотипы восприятия современной музыки и устраивать на сцене настоящий домашний «флэт»."
        ],
    ];

    public function index() {
        return $this->ARTIST;
    }

    public function show(Int $id) {
        $result = null;

        foreach ($this->ARTIST as $artist) {
            if ($artist['id'] == $id) {
                $result = $artist;
            }
        }

        if ($result != null) {
            return $result;
        } else {
            return response()->json(null, 403);
        }
    }
}