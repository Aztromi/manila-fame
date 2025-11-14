<?php

namespace App\Http\Controllers\Api;


use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegistrationController extends Controller
{
    public function register(Request $request)
    {
        // Validation
        $validator = Validator::make($request->all(), [
            // Account Information
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email_address' => 'required|email|unique:users,email',
            'username' => 'required|alpha_num|unique:users,username',
            'password' => 'required|string|min:8',
            'confirm_password' => 'required|string|same:password',
            'type_of_participation' => 'required|string|in:Buyer,Exhibitor,Visitor',

            // Company Information
            'company_name' => 'required|string|max:255',
            'address_line' => 'required|string|max:255',
            'town_city' => 'required|string|max:255',
            'region_state' => 'required|string|max:255',
            'country' => 'required|string',
            'year_established' => 'required|digits:4|integer|max:' . date('Y'),
            'website' => 'nullable|url',
            'company_brochure' => 'nullable|file|mimes:pdf,doc,docx|max:2048', // 2MB
        ]);

        if ($validator->fails()) {
            return response()->json([
                'errors' => $validator->errors()
            ], 422);
        }

        DB::beginTransaction();

        try {
            // Create user
            $user = User::create([
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,

                'email' => $request->email_address,
                'username' => $request->username,
                'password' => Hash::make($request->password),
                'type_of_participation' => $request->type_of_participation,
            ]);

            // Handle file upload
            $brochurePath = null;
            if ($request->hasFile('company_brochure')) {
                $brochurePath = $request->file('company_brochure')->store('brochures', 'public');
            }

            // Create company profile
            Company::create([
                'user_id' => $user->id,
                'company_name' => $request->company_name,
                'address_line' => $request->address_line,
                'town_city' => $request->town_city,
                'region_state' => $request->region_state,
                'country' => $request->country,
                'year_established' => $request->year_established,
                'website' => $request->website,
                'brochure_path' => $brochurePath,
            ]);

            DB::commit();

            return response()->json([
                'message' => 'Registration successful'
            ], 200);
        } catch (\Exception $e) {
            DB::rollBack();

            return response()->json([
                'error' => 'Registration failed',
                'details' => $e->getMessage()
            ], 500);
        }
    }
}
