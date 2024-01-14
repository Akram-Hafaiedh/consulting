<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Http\Requests\StoreMessageRequest;
use App\Http\Requests\UpdateMessageRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $messages = Message::all();
        $usersWithMessages = User::whereHas('messages', function ($query) {
            $query->where('receiver_id', Auth::id());
        })->get();

        // dd($usersWithMessages);
        if (Auth::user()->isConseiller()) {
            return view('conseiller.messages.index', compact('usersWithMessages'));
        }
        return view('messages.index', compact('usersWithMessages'));
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
    public function store(StoreMessageRequest $request, User $user)
    {

        Message::create([
            'content' => $request->validated()['content'],
            'sender_id' => Auth::user()->id,
            'receiver_id' => $user->id,
            'status' => 'sent'
        ]);

        return redirect()->back()->with('success', 'Message sent successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Message $message)
    {
    }

    public function showMessages(User $user)
    {

        $usersWithMessages = User::whereHas('messages', function ($query) {
            $query->where('receiver_id', Auth::id());
        })->get();

        // Find the user by ID
        $userId = $user->id;
        $otherUser = User::findOrFail($userId);

        // Retrieve messages between the authenticated user and the selected user
        $messages = Message::where(function ($query) use ($userId) {
            $query->where('sender_id', Auth::id())
                ->where('receiver_id', $userId);
        })->orWhere(function ($query) use ($userId) {
            $query->where('sender_id', $userId)
                ->where('receiver_id', Auth::id());
        })->orderBy('created_at', 'asc')->get();

        return view('conseiller.messages.index', compact('otherUser', 'usersWithMessages', 'messages'));
    }


    public function showConversation(User $user)
    {
        $messages = Message::where('sender_id', $user->id)->orWhere('receiver_id', $user->id)->get();
        return view('messages.conversation', compact('messages', 'user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Message $message)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMessageRequest $request, Message $message)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Message $message)
    {
        //
    }
}
