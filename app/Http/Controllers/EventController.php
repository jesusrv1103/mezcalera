<?php

namespace Almacen\Http\Controllers;

use Illuminate\Http\Request;

use Almacen\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use Almacen\Http\Controllers\Controller;
use Calendar;
use DB;
use Almacen\Event;
use Maatwebsite\Excel\Facades\Excel;

class EventController extends Controller
{
    public function index()
    {
        $events = [];
        $data = Event::all();
        if($data->count()) {
            foreach ($data as $key => $value) {
                $events[] = Calendar::event(
                    $value->title,
                    true,
                    new \DateTime($value->start_date),
                    new \DateTime($value->end_date.' +1 day'),
                    null,
                    // Add color and link on event
                    [
                    'color' => '#f05050',
                    'url' => 'pass here url and any route',
                    ]
                    );
            }
        }
        $calendar = Calendar::addEvents($events);
        return view('fullcalender', compact('calendar'));
    }

    public function create()
    {

        return view('calendar.create');
    }

    public function store(Request $request)
    {
        $events= new Calendar();
        $events->title=$request->get('title');
        $events->start_date=$request->get('start_date');
        $events->end_date=$request->get('end_date');
        $events->estado='Activo';
        $events->save();
        return Redirect::to('calendar');
    }

    public function update(Request $request, $id)
    {
        $events=Calendar::findOrFail($id);
        $events->title=$request->get('title');
        $events->start_date=$request->get('start_date');
        $events->end_date=$request->get('end_date');
        $events->update();
        return Redirect::to('calendar');
    }



}
