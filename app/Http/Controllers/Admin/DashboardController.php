<?Php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

Class DashboardController extends Controller
{
    public function index(){
        return view('admin/dashboard/index');
    }
    
}


?>