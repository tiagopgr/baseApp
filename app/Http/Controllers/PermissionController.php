<?php

namespace App\Http\Controllers;

use App\Repositories\PermissionRepository;
use Illuminate\Http\Request;

class PermissionController extends AbstractBaseController
{

    public $_repositoryClass = PermissionRepository::class;
    public $_columns = ['id', 'name', 'users'];
    public $_title = "Permissões de Usuário";



}
