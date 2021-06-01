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

    /**
     * Identifica a classe de repository.
     */
    public $_repositoryClass = null;
    public $_serviceClass = null;
    public $_formClass = null;

    public $_autorender = true;
    public $_autoCheckInstances = true;
    public $_title = "";
    public $_columns = [];
    public $_data = null;
    public $_userService = false;

    protected $_repository = null;
    protected $_service = null;
    protected $_form = null;

    public function __construct()
    {
        if (!App::runningInConsole()) {

            if ($this->_repositoryClass !== null) {
                $this->_repository = app($this->_repositoryClass);
            }

            if ($this->_serviceClass !== null) {
                $this->_service = App::make($this->_serviceClass);
            }

        }
    }

    public function index()
    {
        // TODO: todas as regras de negocio e depois retorna o showView
        $this->checkInstancies();
        $this->data = $this->_repository->all();

        \Session::flash('alert-danger', 'Erro comum!');
        \Session::flash('alert-subtitle', 'Esse erro não deveria acontecer, verifique com o administrador do sistema');

        if ($this->_autorender === true) {
            return $this->renderView();
        }


    }

    public function create()
    {

        if ($this->_formClass !== null) {
            $form = $this->form($this->_formClass, [
                "method" => "post",
                "url" => "",
            ]);
        }

        \View::share("form", $form);
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
        \View::share("title", $this->_title);
        \View::share("data", $this->_data);
        $viewfile = $this->ResolveViewPath();
        return view($viewfile);
    }

    protected function checkInstancies()
    {
        if ($this->_autoCheckInstances === true) {
            try {
                if (is_null($this->_repository)) {
                    throw new \Exception("Classe do Repositório: \"$this->_repositoryClass\" não instanciado.");
                }

                if (!is_null($this->_service) && $this->_userService === true) {
                    throw new \Exception("Classe de Service não instanciada.");
                }
            } catch (\Exception $e) {
                abort(500, $e->getMessage());
            }
        }

    }


    public function ResolveViewPath()
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
