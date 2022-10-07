<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;



class PublicController extends Controller
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
    public $personal = [
        [
            'id'=>1,
            'name'=>'Carlo',
            'surname'=>'Soravia',
            'category'=> 'Penale',
            'caption'=> 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section',
            'img'=> 'https://loremflickr.com/641/360/lawyers'
        ],
        [
            'id'=>2,
            'name'=>'Gianluca',
            'surname'=>'Napoli',
            'category'=> 'Tributario',
            'caption'=> 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section',
            'img'=> 'https://loremflickr.com/640/361/lawyers'
        ],
        [
            'id'=>3,
            'name'=>'Valery',
            'surname'=>'Pislov',
            'category'=> 'Civile',
            'caption'=> 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section',
            'img'=> 'https://loremflickr.com/640/362/lawyers'
        ],
        [
            'id'=>4,
            'name'=>'Carmine',
            'surname'=>'Tesone',
            'category'=> 'Tributario',
            'caption'=> 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section',
            'img'=> 'https://loremflickr.com/642/360/lawyers'
        ],
        [
            'id'=>5,
            'name'=>'Andrea Mininni',
            'surname'=>'Rotta la macchina?No problem',
            'category'=> 'Assicurativo',
            'caption'=> 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section',
            'img'=> 'https://loremflickr.com/643/360/lawyers'
        ],
        [
            'id'=>6,
            'name'=>'Andrea',
            'surname'=>'Mininni',
            'category'=> 'Assicurativo',
            'caption'=> 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section',
            'img'=> 'https://loremflickr.com/644/360/lawyers'
        ],
        [
            'id'=>7,
            'name'=>'Nicola',
            'surname'=>'Menonna',
            'category'=> 'Assicurativo',
            'caption'=> 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section',
            'img'=> 'https://loremflickr.com/645/360/lawyers'
        ],
        [
            'id'=>8,
            'name'=>'Paola',
            'surname'=>'Zuckar',
            'category'=> 'Assicurativo',
            'caption'=> 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section',
            'img'=> 'https://loremflickr.com/646/360/lawyers'
        ],
    ];
    public function home () {


        return view('welcome',['services'=> array_slice($this->services,0,4)],['personal'=>array_slice($this->personal,0,4)]);

    }


    public function getContactPage()
    {
        return view('contact');
    }

    public function contactSend(Request $request){
        $name = $request->input('name');
        $email = $request->input('email');
        $phone = $request->input('phone');
        $message = $request->input('message');
        $info = compact('name','email','phone','message');
        $contact = new ContactMail($info);
        Mail::to('StudioLegaleHack53@legal.com')->send($contact);
        return redirect(route('home'))->with('message', "Stiamo aspettando il pagamento");
    }

    public function graziealcazzo(){
        return view('graziealcazzo');
    }
    public function areaComune(){
        return view('areaComune');
    }
    public function areaComunePersonale(){
        return view('areaComunePersonale');
    }
}
