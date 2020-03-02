<?php
namespace App\Service\Api;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Users;
use App\Apps;

class RequestService {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function info_user($fb_id, $app_id)
    {
        return DB::table('users')
            ->select(
                'apps.name as app_name',
                'version_ios',
                'version_android',
                'wins.prize',
                'wins.plan_test',
                'scores.point'
            )
            ->leftJoin('wins','users.id', '=', 'wins.user_id')
            ->leftJoin('scores','users.id', '=', 'scores.user_id')
            ->leftJoin('apps', function($join) use($app_id) {
                $join->on('apps.id', '=', 'scores.app_id')
                    ->where('apps.id', '=', $app_id);
            })
            ->where([
                ['users.fb_id', '=', $fb_id],
            ])
            ->get()->toArray();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function info_question($app_id)
    {
        //
        return DB::table('questions')
            ->select('*')
            ->where('app_id', '=', $app_id)
            ->get();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function info_score($app_id)
    {
        //
        return DB::table('apps')
            ->select(
                'fb_id',
                'users.name as user_name',
                'apps.name as user_app',
                'scores.point'
            )
            ->leftJoin('scores', 'apps.id', '=', 'scores.app_id')
            ->leftJoin('users', 'scores.user_id', '=', 'users.id')
            ->where('apps.id', '=', $app_id)
            ->get();

        return DB::table('users')
            ->select(
                'fb_id',
                'users.name as user_name',
                'apps.name as user_app',
                'scores.point'
            )
            ->leftJoin('scores', 'users.id', '=', 'scores.user_id')
            ->leftJoin('apps', 'scores.app_id', '=', 'apps.id')
            ->where('app_id', '=', $app_id)
            ->get();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
