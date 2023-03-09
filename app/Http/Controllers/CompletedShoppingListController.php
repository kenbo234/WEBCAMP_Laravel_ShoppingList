<?php
declare(strict_types=1);
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\ShoppingListRegisterPostRequest;
use Illuminate\Support\Facades\Auth;
use App\Models\ShoppingList as ShoppingListModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\CompletedShoppingList as CompletedShoppingListModel;

class CompletedShoppingListController extends Controller
{
    public function list()
    {
         $per_page = 3;
        
        $list =CompletedShoppingListModel::orderBy('created_at')->paginate($per_page);
        
        
    
        
        return view('shopping_list.completed_shopping_list',['list' => $list]);
    }
    
    protected function getListBuilder()
    {
        /**return CompletedTaskModel::where('user_id', Auth::id())
                     ->orderBy('priority', 'DESC')
                     ->orderBy('period')
                     ->orderBy('created_at');
                     **/
    }
}
