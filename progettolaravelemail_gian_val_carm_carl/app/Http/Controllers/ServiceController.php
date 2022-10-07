<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class ServiceController extends Controller
{

        public $services = [
            [
                'id'=>1,
                'name'=>'Assistenza Legale',
                'description'=>'Ti evitiamo la galera',
                'category'=> 'Penale',
                'img'=> '/img/1.png'
            ],
            [
                'id'=>2,
                'name'=>'Sinistri stradali',
                'description'=>'Rotta la macchina?No problem',
                'category'=> 'Assicurativo',
                'img'=> '/img/6.png'
            ],
            [
                'id'=>3,
                'name'=>'Risarcimento',
                'description'=>'Ti evitiamo la galera',
                'category'=> 'Civile',
                'img'=> '/img/4.png'
            ],
            [
                'id'=>4,
                'name'=>'Bancarotta',
                'description'=>'Ti aiutiamo a nascondere i soldi',
                'category'=> 'Tributario',
                'img'=> '/img/5.png'
            ],
            [
                'id'=>5,
                'name'=>'Finanza',
                'description'=>'Non scappare in Messico ti aiutiamo noi',
                'category'=> 'Tributario',
                'img'=> '/img/2.jpg'
            ],
        ];

        public function index()
        {
            return view('index',[
                'services'=> $this->services
            ]
            );

    }

    public function show($id)
    {
        foreach($this->services as $service){
            if($service['id'] == $id){
                return view ('show',['service'=>$service]);
            }
        }
        abort(404);
    }

    public function serviceForCategory($category)
    {
        $serviceForCategory = [];
        foreach($this->services as $service){
            if($service['category']==$category){
                $serviceForCategory[] = $service;
            }
        }
        return view('category',[
                'services'=>$serviceForCategory,
                'category'=>$category
        ]
    );
    }
}
