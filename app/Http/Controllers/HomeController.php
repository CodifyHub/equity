<?php

namespace App\Http\Controllers;

use App\Models\Inquiry;
use App\Models\Property;
use Illuminate\Http\Request;
use App\Models\SmartHomeDevice;

class HomeController extends Controller
{
    public function index()
    {
        $properties = Property::inRandomOrder()->limit(3)->get();
        $smartHomeDevices = SmartHomeDevice::inRandomOrder()->limit(3)->get();

        return view('index', compact('properties', 'smartHomeDevices'));
    }

    public function about()
    {
        return view('about');
    }
    public function contact()
    {
        return view('contact');
    }
    public function properties()
    {
        $properties = Property::paginate(8);

        return view('properties', compact('properties'));
    }
    public function propertyShow($slug)
    {
        $property = Property::where('slug', $slug)->with(['map', 'features', 'images', 'metadata'])->firstOrFail();

        return view('propertyshow', compact('property'));
    }

    public function store()
    {
        $smartHomeDevices = SmartHomeDevice::paginate(8);

        return view('store', compact('smartHomeDevices'));
    }
    public function deviceShow($slug)
    {
        $device = SmartHomeDevice::where('slug', $slug)->with('images')->firstOrFail();

        return view('deviceShow', compact('device'));
    }
    public function inquiry(Request $request)
    {
        $request->validate([
            'name' => 'required|string|min:2|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:15',
            'subject' => 'required|string|max:255',
            'message' => 'required|string|max:1000',
        ]);

        $inquiry = new Inquiry();
        $inquiry->name = $request->name;
        $inquiry->email = $request->email;
        $inquiry->phone = $request->phone;
        $inquiry->subject = $request->subject;
        $inquiry->message = $request->message;
        $inquiry->save();

        return redirect()->back()->with('success', 'Inquiry submitted successfully! We will get back to you shortly.');
    }
}
