<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Success;
use Illuminate\Http\Request;
use App\Models\LandingPageVolunteer;
use Intervention\Image\Facades\Image;
use Carbon\Carbon;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Requests\VolunteerRequest;


class VolunteerController extends Controller
{
    public function create()
    {
        $volunteer = LandingPageVolunteer::orderBy('updated_at', 'DESC')->get();
        return view('dashboard.volunteer.create' , ['vol' => $volunteer]);
    }


    public function store(VolunteerRequest $request)
    {


        if ($request->hasFile('img')){

            $timestamp = Carbon::now()->timestamp;
            $fileName =  $request->file('img')->getClientOriginalName();
            $path = '/volunteers/'.$timestamp.'_'.$fileName;
            Image::make($request->file('img')->path())
                ->resize(320, 320)
                ->save(public_path($path));

            LandingPageVolunteer::create(array_merge($request->except('img') , ['img_url' => $path]));
            Alert::success(__('تم اضافة المتطوع بنجاح!'))->showConfirmButton(__('dashboard_layout.ok'), '#3085d6');
            return redirect()->back();

        }
        else{
            Alert::error(__('لم تقم برفع صورة!'))->showConfirmButton(__('dashboard_layout.ok'), '#3085d6');
            return redirect()->back();

        }
    }


    public function delete($id)
    {
        $vol = LandingPageVolunteer::find($id);
        $vol->delete();
        Alert::success(__('تم حذف المتطوع بنجاح!'))->showConfirmButton(__('dashboard_layout.ok'), '#3085d6');
        return redirect()->back();
    }



    public function update($id , Request $request)
    {
        $vol = LandingPageVolunteer::find($id);
        $vol->name = $request->name;
        $vol->desc = $request->desc;
        $vol->twitter = $request->twitter;
        $vol->save();
        Alert::success(__('تم تحديث المتطوع بنجاح!'))->showConfirmButton(__('dashboard_layout.ok'), '#3085d6');
        return redirect()->back();
    }

    public function destroy($id)
    {
        Success::find($id)->delete();
        Alert::success(__('تم تحديث المتطوع بنجاح!'))->showConfirmButton(__('dashboard_layout.ok'), '#3085d6');
        return redirect()->back();
    }

    public function sort($id)
    {
        $vol = LandingPageVolunteer::find($id);
        $vol->touch();
        Alert::success(__('تم وضع المتطوع في المقدمة!'))->showConfirmButton(__('dashboard_layout.ok'), '#3085d6');
        return redirect()->back();
    }


}
