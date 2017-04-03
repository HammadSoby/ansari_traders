<?php

namespace App\Http\Controllers\Admin;

use App\AdminModels\Slider;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = Slider::orderBy('created_at', 'DESC')->paginate(6);
        
        return view('admin/slider/index', compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/slider/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'caption' => 'required',
            'image' => 'required',
        ]);

        if(Input::hasfile('image'))
        {
            $destinationPath = public_path('') ."/slider_images/";
            $image_name = Input::file('image')->getClientOriginalName();
            Input::file('image')->move($destinationPath, $image_name);
        }
        
        $slider = new Slider();
        $slider->slug = str_random(50);
        $slider->caption = $request['caption'];
        $slider->image = Input::file('image')->getClientOriginalName();
        $slider->description = $request['description'] ? $request['description']:'-';
        $slider->save();

        return redirect('/ansari-traders/admin/add-slider')->with('success', 'Slider Image has been saved.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $slider = Slider::where('slug', $slug)->first();

        return view('admin/slider/show', compact('slider'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $slug
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $slider = Slider::where('slug', $slug)->first();

        return view('admin/slider/edit', compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $slug
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slug)
    {
        $this->validate($request, [
            'caption' => 'required',
            'image' => 'required',
        ]);

        if(Input::hasfile('image'))
        {
            $destinationPath = public_path('') ."/slider_images/";
            $image_name = Input::file('image')->getClientOriginalName();
            Input::file('image')->move($destinationPath, $image_name);
        }

        $slider = Slider::where('slug', $slug)->first();
        $slider->slug = str_random(50);
        $slider->caption = $request['caption'];
        $slider->image = Input::file('image')->getClientOriginalName();
        $slider->description = $request['description'] ? $request['description']:'-';
        $slider->update();

        return redirect('/ansari-traders/admin/slider')->with('success', 'Slider Image has been updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $slug
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        Slider::where('slug', $slug)->delete();

        return redirect('/ansari-traders/admin/slider')->with('danger', 'Slider Image has been deleted.');
    }
}
