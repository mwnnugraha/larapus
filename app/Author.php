<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\facades\Session;

class Author extends Model
{
    protected $fillable = ['name'];
    
    public function author()
    public static function boot)()
    {
    	parnent::boot();

    	self::deleting(functio($author) {
    		// mengecek apakah penulis masih punya buku
    		if ($author->books->count() > 0) {
    			$html = 'penulis tidak bisa dihapus karena masih mmiliki buku : ';
    			$html .= '<ul>';
    			foreach ($author->books as $book){
    				$html .= "<li>$book->title</li>";
    			}
    			$html .= '</ul>';

    			Sesiion::flash("flash_notification", ["level"=>"danger","message"=>$html]);

    			// membatalkan proses penghapusan
    			return false;
    		}
    	});
    }
}