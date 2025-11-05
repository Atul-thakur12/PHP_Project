<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Models\ServiceDetail;
use App\Models\TeamDetail;
use App\Models\EmailDetail;
use App\Http\Requests\ServiceDetailRequest;
use App\Http\Requests\TeamDetailRequest;
use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Mail;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    function index(){
        $services = ServiceDetail::all();

        return view('website.index', compact('services'));
    }

    function service_detail_save(ServiceDetailRequest $request) {

        // Begin transaction
        DB::beginTransaction();

        try {
            // Create the Service Detail
            $service_detail = new ServiceDetail;
                $service_detail->service_name = $request->service_name;
                $service_detail->service_detail = $request->service_detail;
                $service_detail->service_icon = fileUpload($request->service_icon, 'uploads/service_icons/', 'service_icon');
                $service_detail->service_banner = fileUpload($request->service_banner, 'uploads/service_banner/', 'service_banner');
            $service_detail->save();

            // Example: Adding a log entry
            Log::info('Service Detail created: ' . $service_detail->id);

            // Commit the transaction
            DB::commit();

            return response()->json(['message' => 'User created successfully', 'data' => $service_detail->toArray()], 201);
        } catch (\Exception $e) {
            // Rollback the transaction in case of error
            DB::rollBack();

            // Log the error for debugging
            Log::error('Error creating Service Detail: ' . $e->getMessage());

            return response()->json(['message' => 'Failed to create user', 'error' => $e->getMessage(),], 500);
        }
    }

    function service_detail_update(Request $request) {
        // Begin transaction
        DB::beginTransaction();

        try {
            // Create the Service Detail
            $service_detail = ServiceDetail::find($request->service_id);
                $service_detail->service_name = $request->service_name;
                $service_detail->service_detail = $request->service_detail;
                $service_detail->service_icon = fileUpload($request->file('service_icon'), 'uploads/service_icons/', 'service_icon', $service_detail->service_icon);
                $service_detail->service_banner = fileUpload($request->service_banner, 'uploads/service_banner/', 'service_banner', $service_detail->service_banner1);
            $service_detail->save();

            // Example: Adding a log entry
            Log::info('Service Detail Updated: ' . $service_detail->id);

            // Commit the transaction
            DB::commit();

            return response()->json(['message' => 'Service detail updated successfully', 'data' => $service_detail->toArray()], 201);
        } catch (\Exception $e) {
            // Rollback the transaction in case of error
            DB::rollBack();

            // Log the error for debugging
            Log::error('Error updating Service Detail: ' . $e->getMessage());

            return response()->json(['message' => 'Failed to create user', 'error' => $e->getMessage(),], 500);
        }
    }

    function services_detail_get($service_id = null){
        $services = ServiceDetail::all();
        if(is_null($service_id)) {
            return view('website.services', compact('services'));
        } else {
            $serviceDetail = ServiceDetail::where('id', $service_id)->first();
            return view('website.service-details', compact('services', 'service_id', 'serviceDetail'));
        }
    }

    function team_detail_save(Request $request) {

        // Begin transaction
        DB::beginTransaction();

        try {
            // Create the Team Detail
            $team_detail = new TeamDetail;
                $team_detail->member_name = $request->member_name;
                $team_detail->pic = fileUpload($request->pic, 'uploads/team/', 'team');
                $team_detail->position = $request->position;
                $team_detail->responsibility = $request->responsibility;
                $team_detail->experience = $request->experience;
                $team_detail->email = $request->email;
                $team_detail->phone = $request->phone;
                $team_detail->facebook = $request->facebook;
                $team_detail->instagram = $request->instagram;
                $team_detail->twitter = $request->twitter;
                $team_detail->linkedin = $request->linkedin;
            $team_detail->save();

            // Example: Adding a log entry
            Log::info('Service Detail created: ' . $team_detail->id);

            // Commit the transaction
            DB::commit();

            return response()->json(['message' => 'User created successfully', 'data' => $team_detail->toArray()], 201);
        } catch (\Exception $e) {
            // Rollback the transaction in case of error
            DB::rollBack();

            // Log the error for debugging
            Log::error('Error creating Service Detail: ' . $e->getMessage());

            return response()->json(['message' => 'Failed to create user', 'error' => $e->getMessage(),], 500);
        }
    }

    function team_detail_update(Request $request) {

        // Begin transaction
        DB::beginTransaction();

        try {
            // Create the Team Detail
            $team_detail = TeamDetail::find($request->team_id);
                $team_detail->member_name = $request->member_name;
                $team_detail->pic = fileUpload($request->pic, 'uploads/team/', 'team', $team_detail->pic);
                $team_detail->position = $request->position;
                $team_detail->responsibility = $request->responsibility;
                $team_detail->experience = $request->experience;
                $team_detail->email = $request->email;
                $team_detail->phone = $request->phone;
                $team_detail->facebook = $request->facebook;
                $team_detail->instagram = $request->instagram;
                $team_detail->twitter = $request->twitter;
                $team_detail->linkedin = $request->linkedin;
            $team_detail->save();

            // Example: Adding a log entry
            Log::info('Team detail updated: ' . $team_detail->id);

            // Commit the transaction
            DB::commit();

            return response()->json(['message' => 'User updated successfully', 'data' => $team_detail->toArray()], 201);
        } catch (\Exception $e) {
            // Rollback the transaction in case of error
            DB::rollBack();

            // Log the error for debugging
            Log::error('Error creating Service Detail: ' . $e->getMessage());

            return response()->json(['message' => 'Failed to create user', 'error' => $e->getMessage(),], 500);
        }
    }

    function about_us(){
        $teams = TeamDetail::all();

        return view('website.about-us', compact('teams'));
    }

    function send_contact_mail(Request $request) {

        $contact = new EmailDetail;
            $contact->name = $request->name;
            $contact->company_name = $request->company_name;
            $contact->email = $request->email;
            $contact->phone_no = $request->phone_no;
            $contact->message = $request->message;
        $contact->save();

        // Define the recipient email address
        $recipientEmail = 'info@webfreakdevelopment.com';

        // Send the email
        Mail::to($recipientEmail)->send(new ContactFormMail($request->name, $request->company_name, $request->email, $request->phone_no, $request->message));

        return redirect('contact-us');
    }
}
