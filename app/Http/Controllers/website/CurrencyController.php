<?php

// app/Http/Controllers/CurrencyController.php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class CurrencyController extends Controller
{
    public function currencyForm(Request $request)
    {
        $currency = $request->input('currency');
        session(['currency' => $currency]);

        return redirect()->back();
    }
}
