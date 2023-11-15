<?php

namespace App\Http\Controllers\Cars;

use App\Http\Controllers\Controller;
use App\Models\MissingParts;
use Illuminate\Http\Request;

class MissingPartsController extends Controller
{
    public function index()
    {
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string'],
            'message' => ['required', 'string'],
            'cover' => ['nullable', 'image'],
        ]);

        $missing_part = MissingParts::create([
            'user_id' => auth()->id(),
            'name' => $request->name,
            'message' => $request->message,
        ]);

        $missing_part->addMediaFromRequest('cover')->toMediaCollection('cover');

        return response()->json([
            "message" => "your request has been processed successfully"
        ]);
    }
}
