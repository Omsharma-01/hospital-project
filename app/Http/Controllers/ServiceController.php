<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Service::orderBy('id', 'desc')->get();
      return view('admin.service.list', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
      return view('admin.service.create');
        
    }

    /**
     * Store a newly created resource in storage.
     */
public function store(Request $request)
{
    $filename = null;

    if ($request->hasFile('file_upload')) {
        $file = $request->file('file_upload');
        $filename = time() . '.' . $file->getClientOriginalExtension();

        $file->move(public_path('uploads/services'), $filename);
    }

    Service::create([
        'service_name'   => $request->service_name,
        'description'=> $request->description,
        'price'         => $request->price,
        'duration'         => $request->duration,
        'category'    => $request->category,
        'file_upload'   => $filename,
        'status'        => $request->status
    ]);

    return redirect('admin/service/list')
            ->with('success', 'Service added successfully');
}

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
              $service = Service::findorfail($id);
        return view('admin.service.view',compact('service') );
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Service::findorfail($id);
        // dump($data);
         return view('admin.service.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
public function update(Request $request, string $id)
{
    $service = Service::findOrFail($id);

    $filename = $service->file_upload;

    if ($request->hasFile('file_upload')) {
        $file = $request->file('file_upload');
        $filename = time() . '.' . $file->getClientOriginalExtension();
        $file->move(public_path('uploads/services'), $filename);
    }

   Service::update([
        'service_name'   => $request->service_name,
        'description'=> $request->description,
        'price'         => $request->price,
        'duration'         => $request->duration,
        'category'    => $request->category,
        'file_upload'   => $filename,
        'status'        => $request->status
     ]);

    return redirect('admin/service/list')
            ->with('success', 'Service updated successfully');
}

    /**
     * Remove the specified resource from storage.
     */
  public function destroy(string $id)
{
    $service = Service::findOrFail($id);

    // Image delete
    // if ($service->file_upload && file_exists(public_path('uploads/service/' . $service->file_upload))) {
    //     unlink(public_path('uploads/srvice/' . $service->file_upload));
    // }

    // Record delete
    $service->delete();

    return redirect('admin/service/list')
            ->with('success', 'Service deleted successfully');
}
}