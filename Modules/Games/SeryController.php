<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Sery;
use Amranidev\Ajaxis\Ajaxis;
use URL;

/**
 * Class SeryController.
 *
 * @author  The scaffold-interface created at 2016-12-25 01:22:18pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class SeryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Index - sery';
        $serys = Sery::paginate(6);
        return view('sery.index',compact('serys','title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Create - sery';
        
        return view('sery.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param    \Illuminate\Http\Request  $request
     * @return  \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $sery = new Sery();

        
        $sery->serys_name = $request->serys_name;

        
        $sery->serys_slug = $request->serys_slug;

        
        $sery->serys_url = $request->serys_url;

        
        
        $sery->save();

        $pusher = App::make('pusher');

        //default pusher notification.
        //by default channel=test-channel,event=test-event
        //Here is a pusher notification example when you create a new resource in storage.
        //you can modify anything you want or use it wherever.
        $pusher->trigger('test-channel',
                         'test-event',
                        ['message' => 'A new sery has been created !!']);

        return redirect('sery');
    }

    /**
     * Display the specified resource.
     *
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function show($id,Request $request)
    {
        $title = 'Show - sery';

        if($request->ajax())
        {
            return URL::to('sery/'.$id);
        }

        $sery = Sery::findOrfail($id);
        return view('sery.show',compact('title','sery'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function edit($id,Request $request)
    {
        $title = 'Edit - sery';
        if($request->ajax())
        {
            return URL::to('sery/'. $id . '/edit');
        }

        
        $sery = Sery::findOrfail($id);
        return view('sery.edit',compact('title','sery'  ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function update($id,Request $request)
    {
        $sery = Sery::findOrfail($id);
    	
        $sery->serys_name = $request->serys_name;
        
        $sery->serys_slug = $request->serys_slug;
        
        $sery->serys_url = $request->serys_url;
        
        
        $sery->save();

        return redirect('sery');
    }

    /**
     * Delete confirmation message by Ajaxis.
     *
     * @link      https://github.com/amranidev/ajaxis
     * @param    \Illuminate\Http\Request  $request
     * @return  String
     */
    public function DeleteMsg($id,Request $request)
    {
        $msg = Ajaxis::BtDeleting('Warning!!','Would you like to remove This?','/sery/'. $id . '/delete');

        if($request->ajax())
        {
            return $msg;
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param    int $id
     * @return  \Illuminate\Http\Response
     */
    public function destroy($id)
    {
     	$sery = Sery::findOrfail($id);
     	$sery->delete();
        return URL::to('sery');
    }
}
