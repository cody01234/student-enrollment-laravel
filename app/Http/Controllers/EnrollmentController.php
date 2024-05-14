<?php

namespace App\Http\Controllers;

use App\Models\Enrollment;
use App\Models\Offer;
use App\Models\Student;
use Illuminate\Http\Request;

class EnrollmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return(view('enrollment.index'));
    }

    public function search(Request $request)
    {
        $studentId = $request->input('student_id');
        $student = Student::where('id', $studentId)->first();

        if (!$student) {
            return redirect()->back()->with('error', 'Student not found.');
        }

        $enrollments = $student->offers;
        $availableEnrollments = Offer::where('program_id', $student->program_id)
            ->where('year_level', $student->year_level)
            ->get();

        return view('enrollment.show', compact('student', 'enrollments', 'availableEnrollments'));
    }

    public function enroll(Request $request)
    {
        $studentId = $request->input('student_id');
        $offerId = $request->input('offer_id');

        $offer = Offer::findOrFail($offerId);
        $subjectId = $offer->subject_id;

        // Check if the student is already enrolled in the subject
        $isEnrolled = Enrollment::where('student_id', $studentId)
                                ->whereHas('offer', function ($query) use ($subjectId) {
                                    $query->where('subject_id', $subjectId);
                                })->exists();

        if ($isEnrolled) {
            return redirect()->back()->with('error', 'Student is already enrolled in this subject.');
        }

        // Proceed with enrollment
        Enrollment::create([
            'student_id' => $studentId,
            'offer_id' => $offerId,
        ]);

        return redirect()->back()->with('success', 'Enrollment successful.');

    }


        public function unenroll($studentId, $offerId)
    {
        // Find the enrollment record for the given student ID and offer ID
        $enrollment = Enrollment::where('student_id', $studentId)->where('offer_id', $offerId)->first();

        if ($enrollment) {
            // Delete the enrollment record
            $enrollment->delete();
            return redirect()->back()->with('success', 'Enrollment deleted successfully.');
        } else {
            return redirect()->back()->with('error', 'Enrollment not found.');
        }
    }



    public function show($id)
    {


    }


    /**
     * Show the form for creating a new resource.
     */

    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Enrollment $enrollment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Enrollment $enrollment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Enrollment $enrollment)
    {
        //
    }
}
