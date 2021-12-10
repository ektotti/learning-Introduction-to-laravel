<?php 
namespace App\Http\Composer;

use Illuminate\View\View;

class HelloComposer{
    
    public function compose(View $view){

        $view->with('compose_msg', 'コンポーザーメッセージです');

    }

}

?>