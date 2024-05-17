<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use App\Models\Discipline;
class CartController extends Controller
{
 public function show(): View
 {
 $cart = session('cart', null);
 return view('cart.show', compact('cart'));
 }
 public function addToCart(Request $request, Discipline $discipline): RedirectResponse
 {
 $cart = session('cart', null);
 if (!$cart) {
 $cart = collect([$discipline]);
 $request->session()->put('cart', $cart);
 } else {
 if ($cart->firstWhere('id', $discipline->id)) {
 $alertType = 'warning';
 $url = route('disciplines.show', ['discipline' => $discipline]);
 $htmlMessage = "Discipline <a href='$url'>#{$discipline->id}</a>
 <strong>\"{$discipline->name}\"</strong> was not added to the cart
 because it is already there!";
 return back()
 ->with('alert-msg', $htmlMessage)
 ->with('alert-type', $alertType);
 } else {
 $cart->push($discipline);
 }
 }
 $alertType = 'success';
 $url = route('disciplines.show', ['discipline' => $discipline]);
 $htmlMessage = "Discipline <a href='$url'>#{$discipline->id}</a>
 <strong>\"{$discipline->name}\"</strong> was added to the cart.";
 return back()
 ->with('alert-msg', $htmlMessage)
 ->with('alert-type', $alertType);
 }
}
