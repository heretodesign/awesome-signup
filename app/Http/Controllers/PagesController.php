<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TenGroup;
use Illuminate\Support\Facades\DB;

class PagesController extends Controller
{

    public function getLanding() {
        $discounts = DB::table('ten_groups')->where('id', 1)->get();
        $discounttwo = DB::table('twenty_groups')->where('id', 1)->get();
        $discountthree = DB::table('thirty_groups')->where('id', 1)->get();
        $discountfive = DB::table('fifty_groups')->where('id', 1)->get();

        // return view('pages.landing', ['discounts'=>$discounts]);
        return view('pages.landing', ['discounts'=>$discounts, 'discounttwo'=>$discounttwo, 'discountthree'=>$discountthree, 'discountfive'=>$discountfive]);

    }

    public function getCheckouts() {
        return view('checkouts.create', compact('create'));
    }

    public function getHome() {
        return view('pages.hom');
    }

    // public function getLanding() {
    //     return view('landing', compact('landing'));
    // }

    public function getChoosePlan() {
        return view('pages.chooseplan', compact('chooseplan'));
    }

    public function getTen() {
        return view('pages.ten', compact('ten'));
    }

    public function getTwenty() {
        return view('pages.twenty', compact('twenty'));
    }

    public function getThirty() {
        return view('pages.thirty', compact('thirty'));
    }

    public function getFifty() {
        return view('pages.fifty', compact('fifty'));
    }

}
