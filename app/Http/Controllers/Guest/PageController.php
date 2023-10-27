<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\Http\Request;

/* I controller sono responsabili di gestire le richieste e preparare la risposta. */
class PageController extends Controller
{
    /* Questo metodo viene chiamato quando una richiesta HTTP GET è indirizzata alla Route  */
    public function index()
    {
        return view('index', ['movies' => Movie::all()]);
        /* Il modello Movie rappresenta i dati relativi ai film nel database e Movie::all() recupera tutti i film dal database. */
    }
}
