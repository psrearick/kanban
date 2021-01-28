<?php

namespace App\Http\Controllers;

use App\Models\Card;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

/**
 * Class CardController
 * @package App\Http\Controllers
 *
 * @mixin Builder
 */
class CardController extends Controller
{
    /**
     * return all cards
     *
     * @return array
     */
    public function index(): array
    {
        $cards = Card::all()->toArray();
        return array_reverse($cards);
    }

    /**
     * add card
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function add(Request $request): JsonResponse
    {
        $card = new Card([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'column_id' => $request->input('column_id'),
            'user_id' => 1 // TODO: CHANGE THIS TO LOGGED IN USER
        ]);
        $card->save();

        return response()->json('Card added');
    }

    /**
     * edit card view
     *
     * @param int $id
     * @return JsonResponse
     */
    public function edit(int $id): JsonResponse
    {
        $card = Card::find($id);
        return response()->json($card);
    }

    /**
     * Update card
     *
     * @param int $id
     * @param Request $request
     * @return JsonResponse
     */
    public function update(int $id, Request $request): JsonResponse
    {
        $card = Card::find($id);
        $card->update($request->all());
        return response()->json('Card updated');
    }

    /**
     * Delete card
     *
     * @param int $id
     * @return JsonResponse
     */
    public function delete(int $id): JsonResponse
    {
        $card = Card::find($id);
        $card->delete();
        return response()->json('Card deleted');
    }

}
