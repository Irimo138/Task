<?php

namespace App\Http\Controllers;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $a = array();
        $tasks = \App\Models\Task::all();
        return view('list',['taskList'=> $tasks], ['query' => $a]);
    }

    public function showForm()
    {
        return view('show');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (empty($request->get('newTask'))) {
            return redirect('/list');
        }else{
        Task::create([
            'task' => $request->get('newTask')
          ]);
        return redirect('/list');
    }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $pal = $request->get('ser');
         

        $task = \App\Models\Task::where('task','like',"%$pal%")->get();
        $tasks = \App\Models\Task::all();

        return view('list',['query'=> $task],['taskList'=> $tasks]);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $updatear = $request->get('update');

        Task::where('id','like', $id)
            ->update(['task' => $updatear]);

        return redirect('/list');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        

        Task::destroy($id);
        

        return redirect('/list');
    }
}
