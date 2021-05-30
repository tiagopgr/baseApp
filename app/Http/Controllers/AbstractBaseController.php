<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Log;
use Illuminate\View\View;
use Kris\LaravelFormBuilder\FormBuilder;
use Kris\LaravelFormBuilder\FormBuilderTrait;


abstract class AbstractBaseController extends Controller
{

    use FormBuilderTrait;

    public $_repositoryClass = null;
    public $_repositoryService = null;
    public $_autorender = true;
    public $_columns = [];
    public $_title = "";

    protected $_repository = null;
    protected $_service = null;


    public function index()
    {
        // TODO: todas as regras de negocio e depois retorna o showView
        \View::share("title", $this->_title);
        if ($this->_autorender === true) {
            return $this->renderView();
        }
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }

    public function renderView()
    {
        $viewfile = $this->ResolveViewPath();
        Log::info("View Carregada $viewfile");
        return view($viewfile);
    }


    protected function ResolveViewPath()
    {
        if (!App::runningInConsole()) {
            $request = \Request::route();
            $action = $request->getAction();
            $controller_parts = explode("@", $action["controller"]);
            $actionfile = $controller_parts[1];
            $basename = class_basename($controller_parts[0]);
            $basename = str_replace("Controller", "", $basename);
            $basename = strtolower($basename);
            $viewfile = $basename . "." . $actionfile;

            if (!\View::exists($viewfile)) {
                $viewfile = "default.$actionfile";
            }

            return $viewfile;
        }
    }
}
