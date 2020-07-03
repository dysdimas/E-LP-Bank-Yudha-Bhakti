<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Response;
use App\Dictionary;
use App\Ojk;

class UserController extends Controller
{
    // Home user
    public function index()
    {
        $title = 'Home';
        $data_deprate = \App\Ideprate::all();
        $data_breaking = \App\Opbreaking::all();
        $data_sbdk = \App\Isbdk::all();
        $data_ophot = array(\App\Ophot::all());
        $data_opimage = \App\Opimage::all();
        return view('user3.index', ['title' => $title, 'data_deprate' => $data_deprate, 'data_ophot' => $data_ophot, 'data_sbdk' => $data_sbdk, 'data_breaking' => $data_breaking, 'data_opimage' => $data_opimage]);
    }

    // Feature post index
    public function featureshow(Request $request, $id)
    {
        $title = 'News Bank Yudha Bhakti';
        $data_opfeature = \App\Opfeature::find($id);
        $qs = $request->fullUrl();
        return view('user3.featurepost.post', ['title' => $title, 'data_opfeature' => $data_opfeature, 'qs' => $qs]);
    }

    // Sugcom
    public function featurelist()
    {
        // $data_opfeature = \App\Opfeature::all();
        // return response()->json([
        //     'data_opfeature' => $data_opfeature
        // ]);
        $title = 'Feature List';
        $data_opfeature = DB::table('opfeature')->orderBy('updated_at', 'DESC')->paginate(9);
        return view('user3.feature', ['title' => $title, 'data_opfeature' => $data_opfeature]);
    }

    public function forum_sugcom()
    {
        $title = 'Suggestion & Comment';
        return view('user.forum_sugcom', ['title' => $title]);
    }

    public function cr_sugcom(Request $request)
    {
        $nik = Session::get('nik');
        $name = Session::get('name');
        $request->validate([
            'message' => 'max:100'
        ]);
        $mesagge = $request->message;
        $time_post = date('Y-m-d h:i:s');
        DB::table('sugcom')->insert(['nik' => $nik, 'name' => $name, 'message' => $mesagge, 'time_post' => $time_post]);

        return redirect('/')->with('sukses', 'Thanks for suggestion & comment');
    }

    //Ceom
    public function ceom()
    {
        $title = 'Bod Message';
        $data_ceom = \App\Opceom::all();
        $data_mfbod = \App\Opmfbod::all();

        return view('user3.ceom', ['title' => $title, 'data_ceom' => $data_ceom, 'data_mfbod' => $data_mfbod]);
    }

    //Mfbod
    public function mfbod()
    {
        $title = 'Message From BOD';
        $data_mfbod = \App\Opmfbod::all();
        return view('user.mfbod', ['title' => $title, 'data_mfbod' => $data_mfbod]);
    }

    //Deprate
    public function deprate()
    {
        $title = 'Deposito Rate';
        $data_deprate = \App\Ideprate::all();
        return view('user.deprate', ['title' => $title, 'data_deprate' => $data_deprate]);
    }

    //Branch
    public function branch(Request $request, $id)
    {
        $title = 'Branch News';
        $data_branch = \App\Ibranch::find($id);
        return view('user.featurepost.branchpost', ['title' => $title, 'data_branch' => $data_branch]);
    }

    public function branchlist()
    {
        $title = 'Branch News';
        $data_branch = \App\Ibranch::paginate(10);
        return view('user.branch', ['title' => $title, 'data_branch' => $data_branch]);
    }

    //Division
    public function division(Request $request, $id)
    {
        $title = 'Division News';
        $data_division = \App\Idivision::find($id);
        return view('user.featurepost.divisionpost', ['title' => $title, 'data_division' => $data_division]);
    }

    public function divisionlist()
    {
        $title = 'Division News';
        $data_idivisi = \App\Idivision::paginate(10);
        return view('user.division', ['title' => $title, 'data_idivisi' => $data_idivisi]);
    }

    //Tech
    public function tech(Request $request, $id)
    {
        $title = 'Technology & System';
        $data_tech = \App\Itech::find($id);
        return view('user.featurepost.techpost', ['title' => $title, 'data_tech' => $data_tech]);
    }

    public function techlist()
    {
        $title = 'Technology & System News';
        $data_idivisi = \App\Itech::paginate(10);
        return view('user.tech', ['title' => $title, 'data_idivisi' => $data_idivisi]);
    }

    //Videos
    public function videos(Request $request, $id)
    {
        $title = 'Videos News';
        $data_videos = \App\Opvideos::find($id);
        return view('user.featurepost.videospost', ['title' => $title, 'data_videos' => $data_videos]);
    }

    public function videoslist()
    {
        $title = 'Videos News';
        $data_videos = \App\Opvideos::paginate(12);
        return view('user.videos', ['title' => $title, 'data_videos' => $data_videos]);
    }

    //Comment Divisi
    public function commentdiv(Request $request)
    {
        $cd_id = $request->cd_id;
        $divisi = $request->divisi;
        $author = $request->author;
        $time_post = $request->time_post;
        $comment = $request->comment;

        DB::table('comment_division')->insert([
            'divisi'     =>      $divisi,
            'cd_id'        =>      $cd_id,
            'author'     =>      $author,
            'time_post'     =>      $time_post,
            'comment'     =>      $comment,
        ]);
        return redirect('/division/' . $cd_id)->with('sukses', 'Berhasil Create Field');
    }

    //Comment Divisi
    public function commentbranch(Request $request)
    {
        $cb_id = $request->cb_id;
        $cabang = $request->cabang;
        $author = $request->author;
        $time_post = $request->time_post;
        $comment = $request->comment;

        DB::table('comment_branch')->insert([
            'cabang'    => $cabang,
            'cb_id'     => $cb_id,
            'author'    => $author,
            'time_post' => $time_post,
            'comment'   => $comment,
        ]);
        return redirect('/branchnews/' . $cb_id)->with('sukses', 'Berhasil Create Field');
    }

    //Comment Divisi
    public function commenttech(Request $request)
    {
        $ct_id = $request->ct_id;
        $title = $request->title;
        $author = $request->author;
        $time_post = $request->time_post;
        $comment = $request->comment;

        DB::table('comment_tech')->insert([
            'title'    => $title,
            'ct_id'     => $ct_id,
            'author'    => $author,
            'time_post' => $time_post,
            'comment'   => $comment,
        ]);
        return redirect('/tech/' . $ct_id)->with('sukses', 'Berhasil Create Field');
    }

    //Comment Divisi
    public function commentfeature(Request $request)
    {
        $cf_id = $request->cf_id;
        $title = $request->title;
        $author = $request->author;
        $time_post = $request->time_post;
        $comment = $request->comment;

        DB::table('comment_feature')->insert([
            'title'    => $title,
            'cf_id'     => $cf_id,
            'author'    => $author,
            'time_post' => $time_post,
            'comment'   => $comment,
        ]);
        return redirect('/feature/' . $cf_id)->with('sukses', 'Berhasil Create Field');
    }

    //Comment HotNews
    public function commenthotnews(Request $request)
    {
        $ch_id = $request->ch_id;
        $title = $request->title;
        $author = $request->author;
        $time_post = $request->time_post;
        $comment = $request->comment;

        DB::table('comment_hotnews')->insert([
            'title'    => $title,
            'ch_id'     => $ch_id,
            'author'    => $author,
            'time_post' => $time_post,
            'comment'   => $comment,
        ]);
        return redirect('/hotnews/' . $ch_id)->with('sukses', 'Berhasil Create Field');
    }

    //HotNews
    public function hotnews(Request $request, $id)
    {
        $title = 'Hot News';
        $data_ophot = \App\Ophot::find($id);
        return view('user.featurepost.hotnews', ['title' => $title, 'data_ophot' => $data_ophot]);
    }

    public function dictionlist()
    {
        $title = 'Education';
        $data_diction  = \App\Dictionary::paginate(15);
        return view('user.dictionary', ['title' => $title, 'data_diction' => $data_diction]);
    }

    public function diction(Request $request, $id)
    {
        $title = 'Dictionary';
        $data_diction = \App\Dictionary::find($id);
        return view('user.featurepost.diction', ['title' => $title, 'data_diction' => $data_diction]);
    }

    // Training Material
    //Manual
    public function manual_training()
    {
        $title = 'Manual Training';
        return view('user3.manual_training', ['title' => $title]);
    }

    //Video
    public function video_training()
    {
        $title = 'Video Training';
        return view('user3.video_training', ['title' => $title]);
    }

    public function video_dpp()
    {
        $title = 'Video DPP';
        return view('user3.videopost.video_dpp', ['title' => $title]);
    }

    //Report
    //Ojk
    public function ojk_report()
    {
        $title = 'OJK';
        $data_ojk = \App\Ojk::all();
        return view('user3.ojk', ['title' => $title, 'data_ojk' => $data_ojk]);
    }

    public function ojk_download($filename)
    {
        //PDF file is stored under project/public/download/info.pdf
        $file = public_path() . "/ojk/$filename";

        $headers = ['Content-Type' => 'pdf'];

        return Response::download($file, $filename, $headers);
    }

    //Bank Indonesia
    public function bi_report()
    {
        $title = 'Bank Indonesia';
        $data_bi = \App\Bi::all();
        return view('user3.bi', ['title' => $title, 'data_bi' => $data_bi]);
    }

    public function bi_download($filename)
    {
        //PDF file is stored under project/public/download/info.pdf
        $file = public_path() . "/bi/$filename";

        $headers = ['Content-Type' => 'pdf'];

        return Response::download($file, $filename, $headers);
    }

    //Policy
    //Funding
    public function funding_pp()
    {
        $title = 'Funding';
        $data_funding = \App\Fundingpp::all();
        return view('user3.funding', ['title' => $title, 'data_funding' => $data_funding]);
    }

    //Service
    public function service_pp()
    {
        $title = 'Service';
        $data_service = \App\Servicepp::all();
        return view('user3.service', ['title' => $title, 'data_service' => $data_service]);
    }

    //Credit
    public function credit_pp()
    {
        $title = 'Service';
        $data_credit = \App\Creditpp::all();
        return view('user3.credit', ['title' => $title, 'data_credit' => $data_credit]);
    }

    //Operational
    public function operational_pp()
    {
        $title = 'Operational';
        $data_operational = \App\Operationalpp::all();
        return view('user3.operational', ['title' => $title, 'data_operational' => $data_operational]);
    }

    //General
    public function general_pp()
    {
        $title = 'General';
        $data_general = \App\Generalpp::all();
        return view('user3.general', ['title' => $title, 'data_general' => $data_general]);
    }

    public function updatepassuser(Request $request, $id)
    {
        $edit_password = \App\User::find($id);

        $this->validate($request, [
            'password' => 'min:6',
            'password2' => 'required_with:password|same:password|min:6'
        ]);

        $edit_password->password  = bcrypt($request->input('password'));
        $edit_password->save();
        return redirect('/')->with(['sukses' => 'Password has changed']);
    }

    //ManualDpp
    public function manualdpp_report()
    {
        $title = 'Manual Training Service & Funding';
        $data_manualdpp = \App\Manualdpp::all();
        return view('user3.manualdpp', ['title' => $title, 'data_manualdpp' => $data_manualdpp]);
    }

    public function manualdpp_download($filename)
    {
        //PDF file is stored under project/public/download/info.pdf
        $file = public_path() . "/manualdpp/$filename";

        $headers = ['Content-Type' => 'pdf'];

        return Response::download($file, $filename, $headers);
    }
    //ManualRc
    public function manualrc_report()
    {
        $title = 'Manual Training Risk & Compliance';
        $data_manualrc = \App\Manualrc::all();
        return view('user3.manualrc', ['title' => $title, 'data_manualrc' => $data_manualrc]);
    }

    public function manualrc_download($filename)
    {
        //PDF file is stored under project/public/download/info.pdf
        $file = public_path() . "/manualrc/$filename";

        $headers = ['Content-Type' => 'pdf'];

        return Response::download($file, $filename, $headers);
    }
}
