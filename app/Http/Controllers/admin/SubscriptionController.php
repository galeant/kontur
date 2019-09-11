<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Subscription;
use Illuminate\Support\Arr;

class SubscriptionController extends Controller
{
    public function index(Request $request){
        if($request->has('json')){
            
            // fullset for datatables function
            $start = $request->input('start',0);
            $length = $request->input('length',10);
            
            $sortReq  = $request->order;
            $sortField = $request->columns[$sortReq[0]['column']+1]['name'];
            $sortOrder = $sortReq[0]['dir'];
            // end fullset datatables

            $model = new Subscription;
            $data = $model->offset($start)
                            ->limit($length)
                            ->orderBy($sortField,$sortOrder)
                            ->withTrashed();
                            
            
            if($request->filled('name')){
                $data = $data->where('firstname','like','%'.$request->name.'%')
                                ->orWhere('lastname','like','%'.$request->name.'%');
            }

            if($request->filled('email')){
                $data = $data->where('email','like','%'.$request->email.'%');
            }

            if($request->filled('status')){
                $data = $data->where('status',$request->status);
            }
            if($request->filled('subscription')){
                $data = $data->where('subscription',$request->subscription);
            }
            
            $dataCount = $model->count();
            
            // format for datatables
            $response = [
                'draw' => $request->draw,
                'recordsTotal' => $dataCount,
                'recordsFiltered' => $dataCount,
                'data' => $data->get()
            ];
            // end
            
            return response()->json($response,200);
        }
        return view('admin.subscription.list');
    }
}
