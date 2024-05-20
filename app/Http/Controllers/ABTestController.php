<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ABTestResult;

class ABTestController extends Controller
{
    public function logVariant(Request $request)
    {
        // Check if the value was received in the request
        $variant = $request->input('variant');
        if (!$variant) {
            return response()->json(['message' => 'Variant is required'], 400);
        }

        // Record the result in the database
        ABTestResult::create(['variant' => $variant]);

        // Send a response to the request
        return response()->json(['message' => 'Variant successfully logged']);
    }
}
