<?php
namespace App\Http\Middleware;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class LangueDetector
{
   
    public function handle(Request $request, Closure $next): Response
    {
        //récupérer la langue du visituer
        $lang=$request->getDefaultLocale();

        // Définit la langue de l'application pour ce visiteur
        app()->setLocale($lang); 
        // ou Stocke la langue dans la session
        session(['langueDetected' => $lang]); 
       
        return $next($request);
    }
}