<?php

namespace App\Http\Controllers;
use App\Crud;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CrudsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $data['data'] = Crud::all();
        // // $data = Crud::all()->paginate(5);
        // // return view('index', compact('data'))
        // //         ->with('i',(request()->input('page',1) -1) *5);
        // return view('index', $data);
        $data = Crud::latest()->paginate(5);
        return view('index', compact('data'))
                ->with('i', (request()->input('page', 1) - 1) * 5);


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }



    // public function search(Request $request)
	// {
		
	// 	$search = $request->search;
	// 	$data = DB::table('sample_data')->where('name','like',"%".$search."%")->paginate();
	// 	return view('index',['sample_data' => $data]);
	// }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'          =>  'required',
            'email'         =>  'required',
            'tgl_lahir'     =>  'required',
            'no_tlpn'       =>  'numeric',
            'gender'        =>  'required',
            'image'         =>  'required|image|max:2048'
        ]);
        $image = $request->file('image');

        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $new_name);
         $form_data = array(
             'name'             =>   $request->name,
             'email'            =>   $request->email,
             'tgl_lahir'        =>   $request->tgl_lahir,
             'no_tlpn'          =>   $request->no_tlpn,
             'gender'           =>   $request->gender,
             'image'            =>   $new_name
         );

         Crud::create($form_data);
         return redirect('crud')->with('success', 'terima kasih telas mengisi form.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Crud::findOrFail($id);
        return view('view', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Crud::findOrFail($id);
        return view('edit', compact('data'));
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
        $image_name = $request->hidden_image;
        $image = $request->file('image');
        if($image != ''){
            $request->validate([
                'name'          =>  'required',
                'email'         =>  'required',
                'tgl_lahir'     =>  'required',
                'no_tlpn'       =>  'numeric',
                'gender'        =>  'required',
                'image'         =>  'image|max:2048'
            ]);

            $image_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $image_name);

        }
        else{
             $request->validate([
                'name'          =>  'required',
                'email'         =>  'required',
                'tgl_lahir'     =>  'required',
                'no_tlpn'       =>  'numeric',
                'gender'        =>  'required'
            ]);
        }
         $form_data = array(
            'name'              =>   $request->name,
            'email'             =>   $request->email,
            'tgl_lahir'         =>   $request->tgl_lahir,
            'no_tlpn'           =>   $request->no_tlpn,
            'gender'            =>   $request->gender,
            'image'             =>   $image_name
        );
  
        Crud::whereId($id)->update($form_data);

        return redirect('crud')->with('success', 'Data sukses di updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Crud::findOrFail($id);
        $data->delete();

        return redirect('crud')->with('success', 'Data sudah di hapus');
    }
}
