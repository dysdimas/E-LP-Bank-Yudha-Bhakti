<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\User;
use App\Opsugcom;
use App\OpvideosDpp;
use App\Opfeature;
use App\Ibranch;
use App\Idivision;
use App\Itech;
use App\Comment_branch;
use App\Comment_divisi;
use App\Comment_feature;
use App\Comment_hotnews;
use App\Comment_tech;
use App\Dictionary;
use App\Ojk;
use App\Fundingpp;
use App\Bi;
use App\Creditpp;
use App\Generalpp;
use App\Opcarousel;
use App\Operationalpp;
use App\Opimage;
use App\Servicepp;

class AdminController extends Controller
{
    // User Option
    public function index()
    {
        $title = 'Administration';
        return view('admin.index', ['title' => $title]);
    }

    public function show(Request $request)
    {
        $title          = 'User Data';
        if ($request->has('search')) {
            $data_user = \App\User::where('nik', 'LIKE', '%' . $request->search . '%')
                ->orWhere('name', 'LIKE', '%' . $request->search . '%')
                ->paginate(10);
        } else {
            $data_user = \App\User::all();
        }
        return view('admin.useroption.show_user', ['title' => $title, 'data_user' => $data_user]);
    }

    public function getdatauser()
    {
        $user = User::select('users.*');
        return \DataTables::eloquent($user)
            ->addColumn('action', function ($u) {
                return "<a href='/user/edit/$u->id'>
                            <i class='fas fa-edit'></i>
                        </a>
                        &nbsp;
                        &nbsp;
                        <a href='/user/delete/$u->id'>
                            <i class='fas fa-trash-alt'></i>
                        </a>";
            })
            ->rawColumns(['action'])
            ->toJson();
    }

    public function cr_showuser(Request $request)
    {
        $request->validate([
            'name' => 'required|max:100',
            'role' => 'required|max:100',
            'nik' => 'required|max:100',
            'jabatan' => 'required|max:100',
            'organisasi' => 'required|max:100',
            'level' => 'required|max:100',
            'status' => 'required|max:100'
        ]);

        $name = $request->name;
        $role = $request->role;
        $nik = $request->nik;
        $password = bcrypt('rahasia');
        $jabatan = $request->jabatan;
        $organisasi = $request->organisasi;
        $level = $request->level;
        $status = $request->status;
        $is_active = $request->is_active;
        $updated_at = $request->updated_at;

        $save = DB::table('users')->insert([
            'name' => $name,
            'role' => $role,
            'nik' => $nik,
            'password' => $password,
            'jabatan' => $jabatan,
            'organisasi' => $organisasi,
            'level' => $level,
            'status' => $status,
            'is_active' => $is_active,
            'updated_at' => $updated_at,
            'created_at' => $updated_at
        ]);

        return redirect('/showuser')->with('sukses', 'Data create field');
    }

    public function edit_user(Request $request, $id)
    {
        $title = 'Edit User';
        $edit_user        = \App\User::find($id);
        return view('admin.useroption.edit_user', ['title' => $title, 'edit_user' => $edit_user]);
    }

    public function update_user(Request $request, $id)
    {
        $edit_user        = \App\User::find($id);
        $request->validate([
            'name' => 'required|max:100',
            'role' => 'required|max:100',
            'nik' => 'required|max:100',
            'jabatan' => 'required|max:100',
            'organisasi' => 'required|max:100',
            'level' => 'required|max:100',
            'status' => 'required|max:100'
        ]);
        $edit_user->name   = $request->input('name');
        $edit_user->role  = $request->input('role');
        $edit_user->nik  = $request->input('nik');
        $edit_user->jabatan  = $request->input('jabatan');
        $edit_user->organisasi  = $request->input('organisasi');
        $edit_user->level  = $request->input('level');
        $edit_user->status  = $request->input('status');
        $edit_user->save();
        return redirect('/showuser')->with('sukses', 'Data berhasil di update');
    }

    public function user_delete($id)
    {
        $data_user = \App\User::find($id);
        $data_user->delete();
        return redirect('/showuser')->with('sukses', 'Berhasil Menghapus Field');
    }

    // Layout Option
    // Header
    public function header()
    {
        $title          = 'Header';
        $data_usermenu  = \App\Usermenu::all();
        return view('admin.layoutoption.opheader', ['title' => $title, 'data_usermenu' => $data_usermenu]);
    }

    public function cr_header(Request $request)
    {
        $request->validate([
            'url' => 'required|max:100',
            'menu' => 'required|max:200',
            'class' => 'required|max:200',
        ]);

        $url        = $request->url;
        $menu       = $request->menu;
        $class       = $request->class;
        $access     = 'secure';
        $updated_at = $request->updated_at;
        DB::table('user_menu')->insert([
            'url'        => $url,
            'menu'       => $menu,
            'class'       => $class,
            'updated_at' => $updated_at,
            'access'     => $access
        ]);

        return redirect('/opheader')->with('sukses', 'Data create field');
    }

    public function header_delete($id)
    {
        $data_usermenu = \App\Usermenu::find($id);
        $data_usermenu->delete();
        return redirect('/opheader')->with('sukses', 'Berhasil Menghapus Field');
    }

    public function header_edit($id)
    {
        $title       = 'Edit Header';
        $edit_header = \App\Usermenu::find($id);
        return view('admin.layoutoption.edit_opheader', ['title' => $title, 'edit_header' => $edit_header]);
    }

    public function header_update(Request $request, $id)
    {
        $edit_header        = \App\Usermenu::find($id);
        $request->validate([
            'url' => 'required|max:200',
            'menu' => 'required|max:50',
        ]);
        $edit_header->url   = $request->input('url');
        $edit_header->menu  = $request->input('menu');
        $edit_header->save();
        return redirect('/opheader')->with('sukses', 'Data berhasil di update');
    }

    //Opcarousel
    public function opcarousel()
    {
        $title          = 'Carousel';
        $data_carousel  = \App\Opcarousel::all();
        return view('admin.layoutoption.opcarousel', ['title' => $title, 'data_carousel' => $data_carousel]);
    }

    public function opcarousel_edit($id)
    {
        $title = 'Edit Carousel';
        $edit_carousel   = \App\Opcarousel::find($id);
        return view('admin.layoutoption.edit_carousel', ['title' => $title, 'edit_carousel' => $edit_carousel]);
    }

    public function opcarousel_update(Request $request, $id)
    {
        $edit_opcarousel = \App\Opcarousel::find($id);

        $request->validate([
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048'
        ]);

        $edit_opcarousel->updated_at   = $request->input('updated_at');

        if ($request->hasFile('image')) {
            $file       = $request->file('image');
            $extension  = $file->getClientOriginalExtension();
            $filename   = time() . '.' . $extension;
            unlink(public_path() . "/carousel/" . $edit_opcarousel->image);
            $file->move(\base_path() . "/public/carousel", $filename);
            $edit_opcarousel->image = $filename;
        }

        $edit_opcarousel->save();
        return redirect('/opcarousel')->with('sukses', 'Data berhasil di update');
    }


    // Feature
    public function feature()
    {
        $title          = 'Feature Post';
        $data_opfeature = \App\Opfeature::all();
        return view('admin.layoutoption.opfeature', ['title' => $title, 'data_opfeature' => $data_opfeature]);
    }

    public function getdataopfeature()
    {
        $opfeature = Opfeature::select('opfeature.*');
        return \DataTables::eloquent($opfeature)
            ->addColumn('image', function ($of) {
                return "<img src='imagesfeature/$of->image')}}' class='img-thumbnail' width='100' height='100'></img>";
            })
            ->addColumn('description', function ($of) {
                return str_word_count($of->description) . ' words';
            })
            ->addColumn('action', function ($of) {
                return "<a href='/opfeature/edit/$of->id'>
                            <i class='fas fa-edit'></i>
                        </a>
                        &nbsp;
                        &nbsp;
                        <a href='/opfeature/delete/$of->id'>
                            <i class='fas fa-trash-alt'></i>
                        </a>";
            })
            ->rawColumns(['action', 'image', 'description'])
            ->toJson();
    }

    public function cr_opfeature(Request $request)
    {
        $request->validate([
            'title' => 'required|max:100',
            'subtitle' => 'required|max:200',
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'description' => 'required'
        ]);
        if ($request->hasFile('image')) {
            $title          = $request->title;
            $subtitle       = $request->subtitle;
            $time           = $request->time;
            $description    = $request->description;

            $resorce        = $request->file('image');
            $file           = $request->file('image');
            $extension      = $file->getClientOriginalExtension();
            $filename       = time() + 1 . '.' . $extension;
            $resorce->move(\base_path() . "/public/imagesfeature", $filename);


            $save = DB::table('opfeature')->insert([
                'image'         => $filename,
                'subtitle'      => $subtitle,
                'title'         => $title,
                'time'          => $time,
                'updated_at'    => $time,
                'description'   => $description
            ]);
            echo "Gambar berhasil di upload";
            return redirect('/opfeature')->with('sukses', 'Berhasil Create Field');
        } else {
            echo "Gagal upload gambar";
            return redirect('/opfeature');
        }
    }

    public function opfeature_delete($id)
    {
        $data_opfeature = \App\Opfeature::find($id);
        $data_opfeature->delete();
        unlink(public_path() . "/imagesfeature/" . $data_opfeature->image);
        return redirect('/opfeature')->with('sukses', 'Berhasil Menghapus Field');
    }

    public function opfeature_edit($id)
    {
        $title          = 'Edit Feature';
        $edit_feature   = \App\Opfeature::find($id);
        return view('admin.layoutoption.edit_opfeature', ['title' => $title, 'edit_feature' => $edit_feature]);
    }

    public function opfeature_update(Request $request, $id)
    {
        $edit_feature = \App\Opfeature::find($id);

        $request->validate([
            'title' => 'required|max:100',
            'subtitle' => 'required|max:200',
            // 'image' => 'image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            // 'image2' => 'image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            // 'image3' => 'image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'description' => 'required'
        ]);

        $edit_feature->title        = $request->input('title');
        $edit_feature->subtitle     = $request->input('subtitle');
        $edit_feature->time         = $request->input('time');
        $edit_feature->description  = $request->input('description');

        if ($request->hasFile('image')) {
            $file       = $request->file('image');
            $extension  = $file->getClientOriginalExtension();
            $filename   = time() + 1 . '.' . $extension;
            unlink(public_path() . "/imagesfeature/" . $edit_feature->image);
            $file->move(\base_path() . "/public/imagesfeature", $filename);
            $edit_feature->image = $filename;
            $edit_feature->save();
            return redirect('/opfeature')->with('sukses', 'Data berhasil di update');
        } else {

            $edit_feature->save();
            return redirect('/opfeature')->with('sukses', 'Data berhasil di update');
        }
    }


    // Sugcom
    public function sugcom(Request $request)
    {
        $title          = 'Suggestion';
        if ($request->has('search')) {
            $data_sugcom = \App\Opsugcom::where('nik', 'LIKE', '%' . $request->search . '%')
                ->orWhere('name', 'LIKE', '%' . $request->search . '%')
                ->get();
        } else {
            $data_sugcom = \App\Opsugcom::all();
        }
        return view('admin.layoutoption.opsugcom', ['title' => $title, 'data_sugcom' => $data_sugcom]);
    }

    public function getdatasugcom()
    {
        $sugcom = Comment_feature::select('comment_feature.*');
        return \DataTables::eloquent($sugcom)
            ->addColumn('action', function ($s) {
                return "<a href='/comfeature/delete/$s->id'>
                            <i class='fas fa-trash-alt'></i>
                        </a>";
            })
            ->rawColumns(['action'])
            ->toJson();
    }

    public function opsugcom_delete($id)
    {
        $data_sugcom = \App\Comment_feature::find($id);
        $data_sugcom->delete();
        return redirect('/opsugcom')->with('sukses', 'Berhasil Menghapus Field');
    }
    public function commentfeature_delete($id)
    {
        $commentfeature = \App\Comment_feature::find($id);
        $commentfeature->delete();
        return redirect('/comment')->with('sukses', 'Berhasil Menghapus Field');
    }

    // Ceom
    public function opceom()
    {
        $title = 'Ceo Message';
        $data_ceom = \App\Opceom::all();
        return view('admin.message.opceom', ['title' => $title, 'data_ceom' => $data_ceom]);
    }

    public function opceom_edit($id)
    {
        $title = 'Edit Data';
        $edit_opceom   = \App\Opceom::find($id);
        return view('admin.message.edit_opceom', ['title' => $title, 'edit_opceom' => $edit_opceom]);
    }

    public function opceom_update(Request $request, $id)
    {
        $edit_opceom = \App\Opceom::find($id);

        $request->validate([
            'name' => 'required|max:100',
            'ceom_message' => 'required',
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048'
        ]);

        $edit_opceom->name         = $request->input('name');
        $edit_opceom->ceom_message = $request->input('ceom_message');
        $edit_opceom->updated_at   = $request->input('updated_at');

        if ($request->hasFile('image')) {
            $file       = $request->file('image');
            $extension  = $file->getClientOriginalExtension();
            $filename   = time() . '.' . $extension;
            unlink(public_path() . "/imagesceom/" . $edit_opceom->image);
            $file->move(\base_path() . "/public/imagesceom", $filename);
            $edit_opceom->image = $filename;
        }

        $edit_opceom->save();
        return redirect('/opceom')->with('sukses', 'Data berhasil di update');
    }

    // Mfbod
    public function opmfbod()
    {
        $title = 'Message From Bod';
        $data_mfbod = \App\Opmfbod::all();
        return view('admin.message.opmfbod', ['title' => $title, 'data_mfbod' => $data_mfbod]);
    }

    public function opmfbod_edit($id)
    {
        $title = 'Edit Data';
        $edit_opmfbod   = \App\Opmfbod::find($id);
        return view('admin.message.edit_opmfbod', ['title' => $title, 'edit_opmfbod' => $edit_opmfbod]);
    }

    public function opmfbod_update(Request $request, $id)
    {
        $edit_opmfbod = \App\Opmfbod::find($id);

        $request->validate([
            'name' => 'required|max:100',
            'mfbod_message' => 'required',
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048'
        ]);

        $edit_opmfbod->name         = $request->input('name');
        $edit_opmfbod->mfbod_message = $request->input('mfbod_message');
        $edit_opmfbod->updated_at   = $request->input('updated_at');

        if ($request->hasFile('image')) {
            $file       = $request->file('image');
            $extension  = $file->getClientOriginalExtension();
            $filename   = time() . '.' . $extension;
            unlink(public_path() . "/imagesmfbod/" . $edit_opmfbod->image);
            $file->move(\base_path() . "/public/imagesmfbod", $filename);
            $edit_opmfbod->image = $filename;
        }

        $edit_opmfbod->save();
        return redirect('/opmfbod')->with('sukses', 'Data berhasil di update');
    }

    //Change Password Admin

    public function updatepass(Request $request, $id)
    {
        $edit_deprate = \App\User::find($id);

        $this->validate($request, [
            'password' => 'min:6',
            'password2' => 'required_with:password|same:password|min:6'
        ]);

        $edit_deprate->password  = bcrypt($request->input('password'));
        $edit_deprate->save();
        return redirect('/admin')->with(['sukses' => 'Password has changed']);
    }

    //Training
    //Video DPP
    public function video_training()
    {
        $title          = 'Video Post';
        $data_opvideos  = \App\OpvideosDpp::all();
        return view('admin.trainingmaterial.video_training', ['title' => $title, 'data_opvideos' => $data_opvideos]);
    }

    public function getdataopvideodpp()
    {
        $opvideos = OpvideosDpp::select('opvideosdpp.*');
        return \DataTables::eloquent($opvideos)
            ->addColumn('image', function ($o) {
                return "<img src='images/$o->image')}}' class='img-thumbnail' width='100' height='100'></img>";
            })
            ->addColumn('action', function ($o) {
                return "<a href='/video_dpp/edit/$o->id'>
                            <i class='fas fa-edit'></i>
                        </a>
                        &nbsp;
                        &nbsp;
                        <a href='/video_dpp/delete/$o->id'>
                            <i class='fas fa-trash-alt'></i>
                        </a>";
            })
            ->rawColumns(['action', 'image'])
            ->toJson();
    }

    public function cr_opvideodpp(Request $request)
    {
        $request->validate([
            'url' => 'required|max:1000',
            'title' => 'required|max:100',
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048'
        ]);

        if ($request->hasFile('image')) {
            $url     = $request->url;
            $title     = $request->title;
            $updated_at = $request->updated_at;
            $resorce = $request->file('image');
            $file           = $request->file('image');
            $extension      = $file->getClientOriginalExtension();
            $filename       = time() . '.' . $extension;
            $resorce->move(\base_path() . "/public/images", $filename);
            $save = DB::table('opvideosdpp')->insert([
                'image' => $filename,
                'url'   => $url,
                'title'   => $title,
                'updated_at' => $updated_at
            ]);
            echo "Gambar berhasil di upload";
            return redirect('/videotraining')->with('sukses', 'Berhasil Create Field');
        } else {
            echo "Gagal upload gambar";
            return redirect('/videotraining');
        }
    }

    public function opvideo_editdpp($id)
    {
        $title         = 'Edit Video';
        $edit_opvideos = \App\OpvideosDpp::find($id);
        return view('admin.trainingmaterial.edit_opvideo', ['title' => $title, 'edit_opvideos' => $edit_opvideos]);
    }

    public function opvideo_updatedpp(Request $request, $id)
    {
        $edit_opvideos              = \App\OpvideosDpp::find($id);

        $request->validate([
            'url' => 'required|max:1000',
            'title' => 'required|max:100'
        ]);
        $edit_opvideos->url         = $request->input('url');
        $edit_opvideos->title         = $request->input('title');
        $edit_opvideos->updated_at  = $request->input('updated_at');

        if ($request->hasFile('image')) {
            $file           = $request->file('image');
            $extension      = $file->getClientOriginalExtension();
            $filename       = time() . '.' . $extension;
            unlink(public_path() . "/images/" . $edit_opvideos->image);
            $file->move(\base_path() . "/public/images", $filename);
            $edit_opvideos->image = $filename;
            $edit_opvideos->save();
            return redirect('/videotraining')->with('sukses', 'Data berhasil di update');
        } else {
            $edit_opvideos->save();
            return redirect('/videotraining')->with('sukses', 'Data berhasil di update');
        }
    }

    public function opvideo_deletedpp($id)
    {
        $data_opvideos = \App\OpvideosDpp::find($id);
        $data_opvideos->delete();
        unlink(public_path() . "/images/" . $data_opvideos->image);
        return redirect('/videotraining')->with('sukses', 'Berhasil Menghapus Field');
    }

    public function ojk_report()
    {
        $title = 'OJK';
        return view('admin.report.ojk_report', ['title' => $title]);
    }

    public function cr_ojk(Request $request)
    {
        $request->validate([
            'title' => 'required|max:100',
            'pdf' => 'required|file|mimes:pdf,doc,docx'
        ]);

        if ($request->hasFile('pdf')) {
            $title     = $request->title;
            $updated_at = $request->updated_at;
            $resorce = $request->file('pdf');
            $file           = $request->file('pdf');
            $extension      = $file->getClientOriginalExtension();
            $filename       = time() . '.' . $extension;
            $resorce->move(\base_path() . "/public/ojk", $filename);
            $save = DB::table('ojk')->insert([
                'filename' => $filename,
                'title'   => $title,
                'updated_at' => $updated_at
            ]);
            echo "File Berhasil di Upload";
            return redirect('/admin_ojk')->with('sukses', 'Berhasil Create Field');
        } else {
            echo "File Gagal di Upload";
            return redirect('/admin_ojk');
        }
    }

    public function getdataojk()
    {
        $ojk = Ojk::select('ojk.*');
        return \DataTables::eloquent($ojk)
            ->addColumn('action', function ($s) {
                return "<a href='/ojkreport/edit/$s->id'>
                <i class='fas fa-edit'></i>
            </a>
            &nbsp;
            &nbsp;
            <a href='/ojkreport/delete/$s->id'>
                            <i class='fas fa-trash-alt'></i>
                        </a>";
            })
            ->rawColumns(['action'])
            ->toJson();
    }

    public function delete_ojk($id)
    {
        $data_ojk = \App\Ojk::find($id);
        $data_ojk->delete();
        unlink(public_path() . "/ojk/" . $data_ojk->filename);
        return redirect('/admin_ojk')->with('sukses', 'Berhasil Menghapus Field');
    }

    public function editojk_report($id)
    {
        $title         = 'Edit Ojk';
        $edit_ojk = \App\Ojk::find($id);
        return view('admin.report.editojk_report', ['title' => $title, 'edit_ojk' => $edit_ojk]);
    }

    public function updateojk_report(Request $request, $id)
    {
        $editojk_report              = \App\Ojk::find($id);

        $request->validate([
            'title' => 'required|max:100',
            'pdf' => 'required|file|mimes:pdf'
        ]);
        $editojk_report->title         = $request->input('title');
        $editojk_report->updated_at  = $request->input('updated_at');

        if ($request->hasFile('pdf')) {
            $file           = $request->file('pdf');
            $extension      = $file->getClientOriginalExtension();
            $filename       = time() . '.' . $extension;
            unlink(public_path() . "/ojk/" . $editojk_report->filename);
            $file->move(\base_path() . "/public/ojk", $filename);
            $editojk_report->filename = $filename;
        }

        $editojk_report->save();
        return redirect('/admin_ojk')->with('sukses', 'Data berhasil di update');
    }

    public function bi_report()
    {
        $title = 'Bank Indonesia';
        return view('admin.report.bi_report', ['title' => $title]);
    }

    public function cr_bi(Request $request)
    {
        $request->validate([
            'title' => 'required|max:100',
            'pdf' => 'required|file|mimes:pdf,doc,docx'
        ]);

        if ($request->hasFile('pdf')) {
            $title     = $request->title;
            $updated_at = $request->updated_at;
            $resorce = $request->file('pdf');
            $file           = $request->file('pdf');
            $extension      = $file->getClientOriginalExtension();
            $filename       = time() . '.' . $extension;
            $resorce->move(\base_path() . "/public/bi", $filename);
            $save = DB::table('bi')->insert([
                'filename' => $filename,
                'title'   => $title,
                'updated_at' => $updated_at
            ]);
            echo "File Berhasil di Upload";
            return redirect('/admin_bi')->with('sukses', 'Berhasil Create Field');
        } else {
            echo "File Gagal di Upload";
            return redirect('/admin_bi');
        }
    }

    public function getdatabi()
    {
        $bi = Bi::select('bi.*');
        return \DataTables::eloquent($bi)
            ->addColumn('action', function ($s) {
                return "<a href='/bireport/edit/$s->id'>
                <i class='fas fa-edit'></i>
            </a>
            &nbsp;
            &nbsp;
            <a href='/bireport/delete/$s->id'>
                            <i class='fas fa-trash-alt'></i>
                        </a>";
            })
            ->rawColumns(['action'])
            ->toJson();
    }

    public function delete_bi($id)
    {
        $data_bi = \App\Bi::find($id);
        $data_bi->delete();
        unlink(public_path() . "/bi/" . $data_bi->filename);
        return redirect('/admin_bi')->with('sukses', 'Berhasil Menghapus Field');
    }

    public function editbi_report($id)
    {
        $title         = 'Edit BI';
        $edit_bi = \App\Bi::find($id);
        return view('admin.report.editbi_report', ['title' => $title, 'edit_bi' => $edit_bi]);
    }

    public function updatebi_report(Request $request, $id)
    {
        $editbi_report              = \App\Bi::find($id);

        $request->validate([
            'title' => 'required|max:100',
            'pdf' => 'required|file|mimes:pdf'
        ]);
        $editbi_report->title         = $request->input('title');
        $editbi_report->updated_at  = $request->input('updated_at');

        if ($request->hasFile('pdf')) {
            $file           = $request->file('pdf');
            $extension      = $file->getClientOriginalExtension();
            $filename       = time() . '.' . $extension;
            unlink(public_path() . "/bi/" . $editbi_report->filename);
            $file->move(\base_path() . "/public/bi", $filename);
            $editbi_report->filename = $filename;
        }

        $editbi_report->save();
        return redirect('/admin_bi')->with('sukses', 'Data berhasil di update');
    }

    public function opimage()
    {
        $title = "Image HomePage";
        return view('admin.layoutoption.opimage', ['title' => $title]);
    }

    public function getdataopimage()
    {
        $opimage = Opimage::select('opimage.*');
        return \DataTables::eloquent($opimage)
            ->addColumn('image', function ($o) {
                return "<img src='opimage/$o->filename')}}' class='img-thumbnail' width='100' height='100'></img>";
            })
            ->addColumn('action', function ($o) {
                return "<a href='/opimage/edit/$o->id'>
                            <i class='fas fa-edit'></i>
                        </a>
                        &nbsp;
                        &nbsp;
                        <a href='/opimage/delete/$o->id'>
                            <i class='fas fa-trash-alt'></i>
                        </a>";
            })
            ->rawColumns(['action', 'image'])
            ->toJson();
    }

    public function cr_opimage(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048'
        ]);

        if ($request->hasFile('image')) {
            $updated_at = $request->updated_at;
            $resorce = $request->file('image');
            $file           = $request->file('image');
            $extension      = $file->getClientOriginalExtension();
            $filename       = time() . '.' . $extension;
            $resorce->move(\base_path() . "/public/opimage", $filename);
            $save = DB::table('opimage')->insert([
                'filename' => $filename,
                'updated_at' => $updated_at
            ]);
            echo "Gambar berhasil di upload";
            return redirect('/opimagehome')->with('sukses', 'Berhasil Create Field');
        } else {
            echo "Gagal upload gambar";
            return redirect('/opimagehome');
        }
    }

    public function opimage_edit($id)
    {
        $title         = 'Edit Image';
        $edit_opimage = \App\Opimage::find($id);
        return view('admin.layoutoption.edit_opimage', ['title' => $title, 'edit_opimage' => $edit_opimage]);
    }

    public function opimage_update(Request $request, $id)
    {
        $edit_opimage              = \App\Opimage::find($id);
        $edit_opimage->updated_at  = $request->input('updated_at');

        if ($request->hasFile('image')) {
            $file           = $request->file('image');
            $extension      = $file->getClientOriginalExtension();
            $filename       = time() . '.' . $extension;
            unlink(public_path() . "/opimage/" . $edit_opimage->filename);
            $file->move(\base_path() . "/public/opimage", $filename);
            $edit_opimage->filename = $filename;
            $edit_opimage->save();
            return redirect('/opimagehome')->with('sukses', 'Data berhasil di update');
        } else {
            $edit_opimage->save();
            return redirect('/opimagehome')->with('sukses', 'Data berhasil di update');
        }
    }

    public function opimage_delete($id)
    {
        $data_opimage = \App\Opimage::find($id);
        $data_opimage->delete();
        unlink(public_path() . "/opimage/" . $data_opimage->filename);
        return redirect('/opimagehome')->with('sukses', 'Berhasil Menghapus Field');
    }

    //Funding
    public function funding_pp()
    {
        $title = 'Funding';
        return view('admin.pp.funding_pp', ['title' => $title]);
    }

    public function cr_funding(Request $request)
    {
        $request->validate([
            'title' => 'required|max:100',
            'url' => 'required|max:1000'
        ]);

        if ($request->title != null) {
            $title     = $request->title;
            $url     = $request->url;
            $updated_at = $request->updated_at;

            $save = DB::table('fundingpp')->insert([
                'url' => $url,
                'title'   => $title,
                'updated_at' => $updated_at
            ]);
            echo "File Berhasil di Upload";
            return redirect('/admin_funding')->with('sukses', 'Berhasil Create Field');
        } else {
            echo "File Gagal di Upload";
            return redirect('/admin_funding');
        }
    }

    public function getdatafunding()
    {
        $funding = Fundingpp::select('fundingpp.*');
        return \DataTables::eloquent($funding)
            ->addColumn('action', function ($s) {
                return "<a href='/fundingpp/edit/$s->id'>
                <i class='fas fa-edit'></i>
            </a>
            &nbsp;
            &nbsp;
            <a href='/fundingpp/delete/$s->id'>
                            <i class='fas fa-trash-alt'></i>
                        </a>";
            })
            ->rawColumns(['action'])
            ->toJson();
    }

    public function delete_funding($id)
    {
        $data_funding = \App\Fundingpp::find($id);
        $data_funding->delete();
        return redirect('/admin_funding')->with('sukses', 'Berhasil Menghapus Field');
    }

    public function editfunding_pp($id)
    {
        $title         = 'Edit Funding';
        $edit_funding = \App\Fundingpp::find($id);
        return view('admin.pp.editfunding_pp', ['title' => $title, 'edit_funding' => $edit_funding]);
    }

    public function updatefunding_pp(Request $request, $id)
    {
        $editfunding_pp              = \App\Fundingpp::find($id);

        $request->validate([
            'title' => 'required|max:100',
            'url' => 'required|max:1000'
        ]);
        $editfunding_pp->title         = $request->input('title');
        $editfunding_pp->url         = $request->input('url');
        $editfunding_pp->updated_at  = $request->input('updated_at');

        $editfunding_pp->save();
        return redirect('/admin_funding')->with('sukses', 'Data berhasil di update');
    }

    // Service 
    public function service_pp()
    {
        $title = 'Service';
        return view('admin.pp.service_pp', ['title' => $title]);
    }

    public function cr_service(Request $request)
    {
        $request->validate([
            'title' => 'required|max:100',
            'url' => 'required'
        ]);

        if ($request->title != null) {
            $title     = $request->title;
            $url     = $request->url;
            $updated_at = $request->updated_at;

            $save = DB::table('servicepp')->insert([
                'url' => $url,
                'title'   => $title,
                'updated_at' => $updated_at
            ]);
            echo "File Berhasil di Upload";
            return redirect('/admin_service')->with('sukses', 'Berhasil Create Field');
        } else {
            echo "File Gagal di Upload";
            return redirect('/admin_service');
        }
    }

    public function getdataservice()
    {
        $service = Servicepp::select('servicepp.*');
        return \DataTables::eloquent($service)
            ->addColumn('action', function ($s) {
                return "<a href='/servicepp/edit/$s->id'>
                <i class='fas fa-edit'></i>
            </a>
            &nbsp;
            &nbsp;
            <a href='/servicepp/delete/$s->id'>
                            <i class='fas fa-trash-alt'></i>
                        </a>";
            })
            ->rawColumns(['action'])
            ->toJson();
    }

    public function delete_service($id)
    {
        $data_service = \App\Servicepp::find($id);
        $data_service->delete();
        return redirect('/admin_service')->with('sukses', 'Berhasil Menghapus Field');
    }

    public function editservice_pp($id)
    {
        $title         = 'Edit Service';
        $edit_service = \App\Servicepp::find($id);
        return view('admin.pp.editservice_pp', ['title' => $title, 'edit_service' => $edit_service]);
    }

    public function updateservice_pp(Request $request, $id)
    {
        $editservice_pp             = \App\Servicepp::find($id);

        $request->validate([
            'title' => 'required|max:200',
            'url' => 'required|max:1000',
        ]);
        $editservice_pp->title         = $request->input('title');
        $editservice_pp->url         = $request->input('url');
        $editservice_pp->updated_at  = $request->input('updated_at');

        $editservice_pp->save();
        return redirect('/admin_service')->with('sukses', 'Data berhasil di update');
    }

    // Credit 
    public function credit_pp()
    {
        $title = 'Credit';
        return view('admin.pp.credit_pp', ['title' => $title]);
    }

    public function cr_credit(Request $request)
    {
        $request->validate([
            'title' => 'required|max:100',
            'url' => 'required'
        ]);

        if ($request->title != null) {
            $title     = $request->title;
            $url     = $request->url;
            $updated_at = $request->updated_at;

            $save = DB::table('creditpp')->insert([
                'url' => $url,
                'title'   => $title,
                'updated_at' => $updated_at
            ]);
            echo "File Berhasil di Upload";
            return redirect('/admin_credit')->with('sukses', 'Berhasil Create Field');
        } else {
            echo "File Gagal di Upload";
            return redirect('/admin_credit');
        }
    }

    public function getdatacredit()
    {
        $credit = Creditpp::select('creditpp.*');
        return \DataTables::eloquent($credit)
            ->addColumn('action', function ($s) {
                return "<a href='/creditpp/edit/$s->id'>
                <i class='fas fa-edit'></i>
            </a>
            &nbsp;
            &nbsp;
            <a href='/creditpp/delete/$s->id'>
                            <i class='fas fa-trash-alt'></i>
                        </a>";
            })
            ->rawColumns(['action'])
            ->toJson();
    }

    public function delete_credit($id)
    {
        $data_credit = \App\Creditpp::find($id);
        $data_credit->delete();
        return redirect('/admin_credit')->with('sukses', 'Berhasil Menghapus Field');
    }

    public function editcredit_pp($id)
    {
        $title         = 'Edit Credit';
        $edit_credit = \App\Creditpp::find($id);
        return view('admin.pp.editcredit_pp', ['title' => $title, 'edit_credit' => $edit_credit]);
    }

    public function updatecredit_pp(Request $request, $id)
    {
        $editcredit_pp             = \App\Creditpp::find($id);

        $request->validate([
            'title' => 'required|max:200',
            'url' => 'required|max:1000',
        ]);
        $editcredit_pp->title         = $request->input('title');
        $editcredit_pp->url         = $request->input('url');
        $editcredit_pp->updated_at  = $request->input('updated_at');

        $editcredit_pp->save();
        return redirect('/admin_credit')->with('sukses', 'Data berhasil di update');
    }

    //Operational 
    public function operational_pp()
    {
        $title = 'Operational';
        return view('admin.pp.operational_pp', ['title' => $title]);
    }

    public function cr_operational(Request $request)
    {
        $request->validate([
            'title' => 'required|max:100',
            'url' => 'required'
        ]);

        if ($request->title != null) {
            $title     = $request->title;
            $url     = $request->url;
            $updated_at = $request->updated_at;

            $save = DB::table('operationalpp')->insert([
                'url' => $url,
                'title'   => $title,
                'updated_at' => $updated_at
            ]);
            echo "File Berhasil di Upload";
            return redirect('/admin_operational')->with('sukses', 'Berhasil Create Field');
        } else {
            echo "File Gagal di Upload";
            return redirect('/admin_operational');
        }
    }

    public function getdataoperational()
    {
        $operational = Operationalpp::select('operationalpp.*');
        return \DataTables::eloquent($operational)
            ->addColumn('action', function ($s) {
                return "<a href='/operationalpp/edit/$s->id'>
                <i class='fas fa-edit'></i>
            </a>
            &nbsp;
            &nbsp;
            <a href='/operationalpp/delete/$s->id'>
                            <i class='fas fa-trash-alt'></i>
                        </a>";
            })
            ->rawColumns(['action'])
            ->toJson();
    }

    public function delete_operational($id)
    {
        $data_operational = \App\Operationalpp::find($id);
        $data_operational->delete();
        return redirect('/admin_operational')->with('sukses', 'Berhasil Menghapus Field');
    }

    public function editoperational_pp($id)
    {
        $title         = 'Edit Operational';
        $edit_operational = \App\Operationalpp::find($id);
        return view('admin.pp.editoperational_pp', ['title' => $title, 'edit_operational' => $edit_operational]);
    }

    public function updateoperational_pp(Request $request, $id)
    {
        $edtioperational_pp             = \App\Operationalpp::find($id);

        $request->validate([
            'title' => 'required|max:200',
            'url' => 'required|max:1000',
        ]);
        $edtioperational_pp->title         = $request->input('title');
        $edtioperational_pp->url         = $request->input('url');
        $edtioperational_pp->updated_at  = $request->input('updated_at');

        $edtioperational_pp->save();
        return redirect('/admin_operational')->with('sukses', 'Data berhasil di update');
    }

    //General 
    public function general_pp()
    {
        $title = 'General';
        return view('admin.pp.general_pp', ['title' => $title]);
    }

    public function cr_general(Request $request)
    {
        $request->validate([
            'title' => 'required|max:100',
            'url' => 'required'
        ]);

        if ($request->title != null) {
            $title     = $request->title;
            $url     = $request->url;
            $updated_at = $request->updated_at;

            $save = DB::table('generalpp')->insert([
                'url' => $url,
                'title'   => $title,
                'updated_at' => $updated_at
            ]);
            echo "File Berhasil di Upload";
            return redirect('/admin_general')->with('sukses', 'Berhasil Create Field');
        } else {
            echo "File Gagal di Upload";
            return redirect('/admin_general');
        }
    }

    public function getdatageneral()
    {
        $general = Generalpp::select('generalpp.*');
        return \DataTables::eloquent($general)
            ->addColumn('action', function ($s) {
                return "<a href='/generalpp/edit/$s->id'>
                <i class='fas fa-edit'></i>
            </a>
            &nbsp;
            &nbsp;
            <a href='/generalpp/delete/$s->id'>
                            <i class='fas fa-trash-alt'></i>
                        </a>";
            })
            ->rawColumns(['action'])
            ->toJson();
    }

    public function delete_general($id)
    {
        $data_general = \App\Generalpp::find($id);
        $data_general->delete();
        return redirect('/admin_general')->with('sukses', 'Berhasil Menghapus Field');
    }

    public function editgeneral_pp($id)
    {
        $title         = 'Edit General';
        $edit_general = \App\Generalpp::find($id);
        return view('admin.pp.editgeneral_pp', ['title' => $title, 'edit_general' => $edit_general]);
    }

    public function updategeneral_pp(Request $request, $id)
    {
        $editgeneral_pp             = \App\Generalpp::find($id);

        $request->validate([
            'title' => 'required|max:200',
            'url' => 'required|max:1000',
        ]);
        $editgeneral_pp->title         = $request->input('title');
        $editgeneral_pp->url         = $request->input('url');
        $editgeneral_pp->updated_at  = $request->input('updated_at');

        $editgeneral_pp->save();
        return redirect('/admin_general')->with('sukses', 'Data berhasil di update');
    }
}
