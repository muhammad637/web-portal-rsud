<?php

namespace App\Http\Controllers;

use App\Models\LayananUnggulan;
use Illuminate\Http\Request;

class LayananUnggulanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function unggulan()
    {
        return view('admin.pages.pelayanan.layanan-unggulan.index',[
            'layanan_unggulan' => LayananUnggulan::orderBy('updated_at', 'desc')->get()
        ]);
    }

    public function unggulanCreate()
    {
        return "testing";
    }

    public function unggulanShow()
    {
        return "show";
    }

    public function unggulanStore()
    {
        return "store";
    }

    public function unggulanEdit()
    {
        return "edit";
    }

    public function unggulanUpdate()
    {
        return "update";
    }

    public function unggulanDestroy()
    {
        return "delete";
    }
}
