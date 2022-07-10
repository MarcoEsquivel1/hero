<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Enemy;
use App\Models\Hero;
use PhpParser\Node\Expr\Print_;

class BSController extends Controller
{
    public function index(){
        // dd($this->runManualBattle(3,3));
        return view('admin.bs.index', $this->runAutoBattle(3,2));
    }


    public static function runAutoBattle($heroId, $enemyId){
        $hero = Hero::find($heroId);
        $enemy = Enemy::find($enemyId);

        $events = [];

        while($hero->hp > 0 && $enemy->hp > 0){
            $luck = random_int(0, 100);

            if ($luck >= $hero->luck) {
                $hp = ($enemy->def - $hero->atq);

                if($hp < 0){
                    $enemy->hp -= $hp * -1;
                    if($enemy->hp > 0){
                        $ev = [
                            "winner" => "hero",
                            "text" => $hero->name . " hizo un daño de " . ($hp * -1) . " a " . $enemy->name
                        ];
                    }else{
                        $ev = [
                            "winner" => "hero",
                            "text" => $hero->name . " acabó con la vida de " . $enemy->name . " y ganó " . $enemy->xp . " de experiencia"
                        ];

                        /* $hero->xp = $hero->xp + $enemy->xp;

                        if($hero->xp >= $hero->level->xp){
                            $hero->xp = 0;
                            $hero->level_id += 1;
                        }

                        $hero->save(); */
                    }
                }else{
                    $ev = [
                        "winner" => "hero",
                        "text" => $hero->name . " no pudo con la armadura de " . $enemy->name . ", no hizo daño!"
                    ];
                }
            }else {
                $hp = ($hero->def - $enemy->atq);

                if($hp < 0){
                    $hero->hp -= $hp * -1;
                    if($hero->hp > 0){
                        $ev = [
                            "winner" => "enemy",
                            "text" => $hero->name . " recibió un daño de " . ($hp * -1). " por " . $enemy->name
                        ];
                    }else{
                        $ev = [
                            "winner" => "enemy",
                            "text" => $hero->name . " fue asesinado por " . $enemy->name
                        ];
                    }
                }else{
                    $ev = [
                        "winner" => "enemy",
                        "text" => $hero->name . " soportó con su armadura el golpe de " . $enemy->name . ", no recibio daño!"
                    ];
                }
            }

            array_push($events, $ev);
        }

        return [
            "events" => $events,
            "heroName" => $hero->name,
            "enemyName" => $enemy->name,
            "heroAvatar" => $hero->img_path,
            "enemyAvatar" => $enemy->img_path
        ];
    }

    public function runManualBattle($heroId, $enemyId){
        $hero = Hero::find($heroId);
        $enemy = Enemy::find($enemyId);

        $luck = random_int(0, 100);

        if ($luck >= $hero->luck) {
            $hp = ($enemy->def - $hero->atq);
            if($hp < 0){
                $enemy->hp -= $hp * -1;
                if($enemy->hp > 0){
                    return [
                        "winner" => "hero",
                        "text" => $hero->name . " hizo un daño de " . ($hp * -1) . " a " . $enemy->name
                    ];
                }else{
                    return [
                        "winner" => "hero",
                        "text" => $hero->name . " acabó con la vida de " . $enemy->name . " y ganó " . $enemy->xp . " de experiencia"
                    ];

                    /* $hero->xp = $hero->xp + $enemy->xp;

                    if($hero->xp >= $hero->level->xp){
                        $hero->xp = 0;
                        $hero->level_id += 1;
                    }

                    $hero->save(); */
                }
            }else{
                return [
                    "winner" => "hero",
                    "text" => $hero->name . " no pudo con la armadura de " . $enemy->name . ", no hizo daño!"
                ];
            }
        }else{
            $hp = ($hero->def - $enemy->atq);

            if($hp < 0){
                $hero->hp -= $hp * -1;
                if($hero->hp > 0){
                    return [
                        "winner" => "enemy",
                        "text" => $hero->name . " recibió un daño de " . ($hp * -1). " por " . $enemy->name
                    ];
                }else{
                    return [
                        "winner" => "enemy",
                        "text" => $hero->name . " fue asesinado por " . $enemy->name
                    ];
                }
            }else{
                return [
                    "winner" => "enemy",
                    "text" => $hero->name . " soportó con su armadura el golpe de " . $enemy->name . ", no recibio daño!"
                ];
            }
        }
    }
}
