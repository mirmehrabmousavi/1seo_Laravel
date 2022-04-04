<?php

namespace App\Http\Controllers;

use App\Mail\AppMail;
use App\Models\Category;
use App\Models\Site;
use App\Models\Ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TicketsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index($url)
    {
        $sites = Site::all();
        $tickets = Ticket::where('user_id', Auth::user()->id)->paginate(10);
        return view('tickets.index', compact('url','sites','tickets'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create($url)
    {
        $sites = Site::all();
        $categories = Category::all();
        return view('tickets.create', compact('url','sites','categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store($url,Request $request,AppMail $mailer)
    {
        $this->validate($request, [
            'title' => 'required',
            'category' => 'required',
            'priority' => 'required',
            'message' => 'required'
        ]);
        $ticket = new Ticket([
            'title' => $request->input('title'),
            'user_id' => Auth::user()->id,
            'ticket_id' => strtoupper(rand(1001,99999)),
            'category_id' => $request->input('category'),
            'priority' => $request->input('priority'),
            'message' => $request->input('message'),
            'status' => "باز است"
        ]);
        $ticket->save();
        $mailer->sendTicketInformation(Auth::user(), $ticket);
        return redirect()->back()->with("status", "A ticket with ID: #$ticket->ticket_id has been opened.");
    }

    public function userTickets()
    {
        $sites = Site::all();
        $tickets = Ticket::paginate(10);
        return view('admin.tickets', compact('sites','tickets'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function show($id,$url)
    {
        $sites = Site::all();
        $ticket = Ticket::where('ticket_id', $id)->firstOrFail();
        return view('tickets.show', compact('url','sites','ticket'));
    }

    public function close($ticket_id, AppMail $mailer)
    {
        $ticket = Ticket::where('ticket_id', $ticket_id)->firstOrFail();
        $ticket->status = "بسته شده";
        $ticket->save();
        $ticketOwner = $ticket->user;
        $mailer->sendTicketStatusNotification($ticketOwner, $ticket);
        return redirect()->back()->with("status", "شما تیکت را بستید.");
    }
}
