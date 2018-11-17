<?php

namespace App;

use Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Document extends Model
{

    protected $fillable = [
        'source', 'user_id', 'status',
    ];

    private static $destination = "D:\journal-uni\journal\public\documents";

    public static function upload(Request $request)
    {

        if ($request->hasFile('document')) {

            $extension = $request->file('document')->getClientOriginalExtension();
            $source = md5(Auth::user()->id . "-" . microtime()) . "." . $extension;
            $request->file('document')->move(self::$destination, $source);

            return $source;
        }
    }

    public function deleteFile()
    {
        $file = self::$destination.'\\'.$this->source;
        unlink($file);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
