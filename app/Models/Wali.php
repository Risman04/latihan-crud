<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wali extends Model
{
    use HasFactory;
    public $fillable = ['nama', 'foto','id_siswa'];
    public $timestamps = true;

    //membuat relasi model
    public function siswa()
    {
        // data dari model 'wali' bisa dimiliki
        // oleh model 'siswa' melalui 'id_siswa'
        return $this->belongsTo(Siswa::class, 'id_siswa');
    }

    public function image()
    {
        if($this->foto && file_exist(public_path('images/wali/' . $this->foto))) {
            return asset('images/wali/' . $this->foto);
        } else {
            return asset('images/no_images.jpg');
        }
    }

    public function deleteImage()
    {
        if($this->foto && file_exist(public_path('images/wali/' . $this->foto))) {
            return unlink(public_path('images/wali/' . $this->foto));
        }
    }
}
