<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Candidate;
use Validator;

class PageController extends Controller
{
    public function indexEn(){
        return view('en.home');
    }

    public function indexPt(){
        return view('pt.home');
    }

    public function validateForm(Request $request){
        $language = trim($request->lang, '/');

        $validator = Validator::make($request->all(), [
            'name' => 'required|max:60',
            'email' => 'required|max:60',
            'phone' => 'required|max:60'
        ]);

        $error = [
            'en' => [
                'title' => 'Unfilled form!',
                'content' => 'Please fill in all fields below.',
            ],
            'pt' => [
                'title' => 'Formulário não preenchido!',
                'content' => 'Por favor, preencha todos os campos abaixo.',
            ],
            'lang' => $language,
        ];

        if(!$validator->fails()) {
            try {
                $client = new \GuzzleHttp\Client();
                $url = "https://api.brainlegacy.tech/blt/public/save-lead";

                $response = $client->request('POST', $url, [
                    'headers' => [
                        'Token' => 'KZe5ZY8BUNDiLthi4ihgFLJ4rxKG8Oa2B7vQX642cdc48c8368',
                    ],
                    'query' => [
                        'name' => $request->name,
                        'email' => $request->email,
                        'phone' => $request->phone,
                        'product' => 'The Beard from Below',
                        'language' => $language,
                    ]
                ])->getBody();

                return redirect()->route("thank-you", ['lang' => $language]);

            } catch (\Throwable $exception) {
                $error = [
                    'en' => [
                        'title' => 'Unknown error!',
                        'content' => 'We were unable to register your info, please try again later.',
                    ],
                    'pt' => [
                        'title' => 'Erro desconhecido!',
                        'content' => 'Não foi possível registrar seus dados, por favor tente novamente mais tarde.',
                    ],
                    'lang' => $language,
                ];
            }
        }

        return redirect()->route("{$language}.home")->with('error', $error);
    }

    public function thankYou($lang){
        return view("{$lang}.thank-you");
    }
}
