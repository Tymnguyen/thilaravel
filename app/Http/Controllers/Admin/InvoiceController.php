<?Php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

Class InvoiceController extends Controller
{
    public function index(){
        return view('admin/invoice/index');
    }
    public function index2($id){
        echo $id;
        return view('admin/invoice/index2');
    }
    
}


?>