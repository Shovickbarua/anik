<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Course;
use App\Models\CART;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\ImageManagerStatic as Image;

// namespace Intervention\Image\Facades;


class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $courses = Course::orderBy('id', 'DESC')->where('creator_id', Auth::user()->id)->get();
        // dd($courses);
        return view('web.pages.courses.index', compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        // dd(public_path());
        return view('web.pages.courses.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */ public function store(Request $request)
    {
        // dd($request->all());
        $data = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'class_id' => 'required',
            'subject_id' => 'required',
            'creator_id' => 'required',
            'duration' => 'required',
            'image' => 'required|image|max:2048', // max file size of 2MB
        ]);

        $image = $request->file('image');
        $imageName = time() . '.' . $image->extension();

        $img = Image::make($image->path());
        $img->fit(340, 440); // resize the image to fit within 340x440 while preserving aspect ratio
        $img->encode('jpg', 80); // convert image to JPEG format with 80% quality and reduce file size to 80kb
        $img->save(base_path('/uploads/courses/') . $imageName);
        $data['image'] = $imageName;


        $course = Course::create($data);

        if ($course) {
            return redirect()->route('user.courses.index')->with('success', 'Course created successfully.');
        } else {
            return back()->with('error', 'Course creation failed.');
        }
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */

    // Show Courses
    public function show(Course $course)
    {
        $courses = DB::table('courses')
        ->join('teacher_information','courses.creator_id','=','teacher_information.user_id')
        ->join('users','teacher_information.user_id','=','users.id')
        ->get();
        return view('web.pages.courses.course_list', compact('courses'));
    }

    //Add Order
    public function add(Request $request, $id){
        //dd($id);
        $courses = DB::table('courses')
        ->join('teacher_information','courses.creator_id','=','teacher_information.user_id')
        ->join('users','teacher_information.user_id','=','users.id')
        ->where('users.id' ,$id)
        ->first();
        //dd($courses);
        $cart = new CART();
        $cart->name     = $courses->name;
        $cart->user_id  = $courses->user_id;
        $cart->course_id = $courses->id;
        $cart->save();

        return redirect(route('courses.order'));
    }

    // show order
    public function order(){
        $order = CART::all();

        return view('web.pages.courses.order',compact('order'));
    }

    // search
    public function search(Request $request){
        $course = Course::latest() 
        ->leftjoin('subjects','courses.subject_id','=','subjects.id') 
        ->select('subjects.title','subjects.description','subjects.image', 'courses.*')
        ->where('subjects.title', 'like', '%' .$request->courses. '%')
        ->Orwhere('courses.title', 'like', '%' .$request->courses. '%')
        ->get();

        return view('web.pages.courses.result',compact('course'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function edit(Course $course)
    {
        $categories = Category::all();
        return view('web.pages.course.edit', compact('course', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Course $course)
    {
        $data = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'class_id' => 'required',
            'subject_id' => 'required',
            'creator_id' => 'required',
            'duration' => 'required',
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->extension();

            $img = Image::make($image->path());
            $img->fit(340, 440); // resize the image to fit within 380x310 while preserving aspect ratio
            $img->encode('jpg', 80); // convert image to JPEG format with 80% quality and reduce file size to 80kb
            $img->save(base_path('/uploads/courses/') . $imageName);

            $data['image'] = $imageName;
        }

        $course = $course->update($data);

        if ($course) {
            return redirect()->route('user.courses.index')->with('success', 'Course Updated successfully.');
        } else {
            return back()->with('error', 'Course Update showing error.');
        }
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function destroy(Course $course)
    {
        // delete the course's image file, if it exists

        if ($course->image && file_exists(asset('uploads/courses/' . $course->image))) {
            unlink(asset('uploads/courses/' . $course->image));
        }

        // delete the course from the database
        $course->delete();

        return redirect()->route('user.courses.index')->with('success', 'Course deleted successfully.');
    }



    /**
     * Active the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function Active(Course $course)
    {

        $course->status = '1';
        if ($course->save()) {
            return redirect()->route('user.courses.index')->with('success', 'course Activated successfully.');
        } else {
            return back()->with('error', 'course Activation Unsuccessfull');
        }
    }
    /**
     * Inactive  the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function Inactive(Course $course)

    {
        // dd($course->status);
        $course->status = '0';
        if ($course->save()) {
            return redirect()->route('user.courses.index')->with('success', 'course Deactivated successfully.');
        } else {
            return back()->with('error', 'course Dactivation Unsuccessfull.');
        }
    }
}
