<?php
    
namespace App\Http\Controllers;
    
use App\Models\Buyer;
use Illuminate\Http\Request;
    
class BuyerController extends Controller
{ 
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
         $this->middleware('permission:buyer-list|buyer-create|buyer-edit|buyer-delete', ['only' => ['index','show']]);
         $this->middleware('permission:buyer-create', ['only' => ['create','store']]);
         $this->middleware('permission:buyer-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:buyer-delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        menuSubmenu('buyers', 'allbuyers');
        $paginate = 50;
        $data = Buyer::latest()->paginate($paginate);
        return view('buyers.index',compact('data'))
            ->with('i', (request()->input('page', 1) - 1) * $paginate);
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        menuSubmenu('buyers', 'newbuyers');
        return view('buyers.create');
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'name' => 'required',
            'email' => 'required',
            'mobile' => 'required',
            'description' => 'required',
        ]);
    
        Buyer::create($request->all());
    
        return redirect()->route('buyers.index')
                        ->with('success','Buyer created successfully.');
    }
    
    /**
     * Display the specified resource.
     *
     * @param  \App\Buyer  $buyer
     * @return \Illuminate\Http\Response
     */
    public function show(Buyer $buyer)
    {
        return view('buyers.show',compact('buyer'));
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Buyer  $buyer
     * @return \Illuminate\Http\Response
     */
    public function edit(Buyer $buyer)
    {
        return view('buyers.edit',compact('buyer'));
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Buyer  $buyer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Buyer $buyer)
    {
         request()->validate([
            'name' => 'required',
            'email' => 'required',
            'mobile' => 'required',
            'description' => 'required',
        ]);
    
        $buyer->update($request->all());
    
        return redirect()->route('buyers.index')
                        ->with('success','Buyer updated successfully');
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Buyer  $buyer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Buyer $buyer)
    {
        $buyer->delete();
    
        return redirect()->route('buyers.index')
                        ->with('success','Buyer deleted successfully');
    }
}