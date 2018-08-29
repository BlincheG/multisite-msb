<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Requests extends Model
{
    public function store(Request $request)
    {
        $this->name  = $request->name;
        $this->phone = $request->phone;
        $this->site  = $request->getHttpHost();

        return $this->save();
    }
}
