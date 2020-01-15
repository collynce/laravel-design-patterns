<?php


namespace App\Repositories;

use Illuminate\Support\Facades\DB;

class PostRepository
{
    public function get($id)
    {
        return DB::table('users')->where('id', $id)->get();
    }

    public function all()
    {
        return DB::table('users')->get();
    }

    public function delete($id)
    {
        $post = DB::table('users')->find($id);
        $post->delete();
    }
}
