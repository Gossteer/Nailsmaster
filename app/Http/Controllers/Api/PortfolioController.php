<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\PortfolioCreateRequest;
use App\Portfolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{

    public static function rules()
    {
        return [
            'login_instagram' => ['nullable', 'string', 'max:255', 'unique:portfolios'],
            'description' => ['required', 'string', 'min:6', 'max:500'],
        ];
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  App\Http\Requests\Api\PortfolioCreateRequest $request
     * @return Portfolio
     */
    public static function store(Request $request)
    {
        $request->validate(self::rules());

        return Portfolio::create($request->only('description', 'login_instagram'));
    }

    public static function delete(int $portfolio_id)
    {
        return Portfolio::find($portfolio_id)->delete();
    }
}
