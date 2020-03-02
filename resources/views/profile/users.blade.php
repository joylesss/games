<template>
    @extends('adminlte::page')

    @section('title', '.: Profile : Users :.')

    @section('content_header')
        <h1 class="m-0 text-dark">Users</h1>
    @stop

    @section('content')
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body table-responsive p-0">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Name</th>
                                <th scope="col">Phone</th>
                                <th scope="col">FB_ID</th>
                                <th scope="col">FB_Email</th>
                                <th scope="col">FB_URL</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                                <td>@mdo</td>
                                <td>@mdo</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    @stop
</template>

