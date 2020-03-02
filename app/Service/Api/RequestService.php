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
    public function index($user_id)
    {
        dd($user_id);
        //
        return DB::table('users')
            ->select('*')
            ->where([
                ['users.fb_id', '=', $user_id],
            ])
            ->join('scores', function($join) {
                $join->on('users.id', '=', 'scores.user_id');
            })
            ->join('apps', function($join) {
                $join->on('apps.id', '=', 'scores.app_id')
                    ->where('apps.id', '=', '234');
            })
            ->get()->toArray();
        dd($request);
        return response()
            ->json([
                'model' => Apps::DataTablePaginate()
            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
