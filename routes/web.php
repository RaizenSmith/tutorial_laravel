<?php
// route basic
Route::get('/', function () {
    return view('welcome');
});
Route::get('about', function () {
    return 'Ini Project Laravel Pertama Saya';
});
Route::get('biodata', function () {
    return view ('biodata');
});
// Route parameter
Route::get('biodata/{nama}/{alamat}/{sekolah}',function($a,$b,$c){
    return '<p>Hallo nama saya <b>'.$a.'</b><br>Alamat Rumah saya <b>'.$b.'</b><br>Saya Sekolah di <b>'.$c.'</b></p>';
});
Route::get('user/{name?}', function ($a = null) {
    return "<p>Hallo nama saya <b>$a";
});
Route::get('user/{name}', function ($a) {
    return "<p>Hallo nama saya <b>$a";
});
Route::get('daftar-anggota', function () {
    $a = [
        ['id' =>1 ,'nama' => 'Ujang Aldo'],
        ['id' =>2 ,'nama' => 'Ujang Nurhadi'],
        ['id' =>3 ,'nama' => 'Ujang Candra']
    ];
    return view('anggota',compact('a'));
});
Route::get('profil/{nama?}', function ($a = "jon" ) {
    return view('profil',compact('a'));
});

Route::get('det', function () {
    $a = 'Chandra';
    $b = 'Bandung';
    $c = 'Assalaam';
    $d = 'Trading di IndoDax';
    $e = '15 Tahun sadja';
    return view('detail',compact('a','b','c','d','e'));
});

// Test model
Route::get('tes-post',function(){
    $a = App\Post::all();
    return view('Post',compact('a'));
    
});

Route::get('tes-post/{id}',function($id){
    $a = App\Post::find($id);
    return view('detail-post',compact('a'));
    
});

Route::get('tes-post2',function(){
    $a = App\Post::find(1);
    return $a;
});

Route::get('tes-post3',function(){
    $a = App\Post::where('title','like','%tips%')->get();
    return $a;
});

Route::get('tes-post4',function(){
    $post = App\Post::find(1);
    $post->title = "Ciri Kelas bahagia";
    $post->save();
    return $post;
});

Route::get('tes-post5',function(){
    $a=App\Post::find(1);
    $a->delete();
});

Route::get('tes-post6',function(){
    $a= new App\Post;
    $a->title = "Membangun Website Dengan Laravel";
    $a->content = "Lorem Ipsum";
    $a->save();
    return $a;

});
Route::get('tes-bio',function(){
    $a = App\Biodata::all();
    return view('bio',compact('a'));
});

Route::get('tes-bio/{id}',function($id){
    $a = App\Biodata::find($id);
    return view('detail-bio',compact('a'));
    
});

// route dengan controller
Route::get('dosen', 'DosenController@index');
// index
Route::get('post', 'PostController@index');
// show
Route::get('post/{id}', 'PostController@detail');

//biodata

// index
Route::get('bio', 'BiodataController@index');
// show
Route::get('bio/{id}', 'BiodataController@detail');

// index
Route::get('guru', 'GuruController@index');
// show
Route::get('guru/{id}', 'GuruController@detail');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Relasi one to many

Route::get('relasi-1',function(){
    $a = App\Mahasiswa::where('nim','=','1015015072')->first();
    echo "Nama Saya  : $a->nama<br>";
    // Method Dosen di model 'Mahasiswa'
    echo "Nama Dosen :". $a->Dosen->nama;
});

Route::get('relasi-2',function(){
    $a = App\Dosen::where('nama', '=', 'Yulianto')->first();
    echo "Nama Saya :". $a->nama;
    // method mahasiswa di model 'Dosen'
    foreach ($a->mahasiswa as $data){
        echo "<li>".$data->nama."</li>";
    }
});

// Relasi one to one
Route::get('relasi-3',function(){
    $a = App\Wali::where('nama','=','Nurhadi')->first();
    echo "Di Walikan oleh : ".$a->nama.           "<br>";
    echo "Nama Mahasiswa  : ".$a->mahasiswa->nama."<br>";
});

// Relasi one to one
Route::get('relasi-4',function(){
    $a = App\Mahasiswa::where('nama','=','Noviyanto rachmadi')->first();
    echo "Nama saya ".$a->nama;
    echo "<br>Daftar Hobi  : <br>";
    foreach ($a->hobi as $temp){
        echo '<li>'.$temp->hobi.'</li>';
    }
});

// Relasi one to one
Route::get('relasi-5',function(){
    $a = App\hobi::where('hobi','=','mandi air')->first();
    echo "Daftar orang yang mempunyai <b>$a->hobi</b> : <br>";
    foreach ($a->mahasiswa as $temp){
        echo '<li>Nama : '.$temp->nama.'<strong> '.$temp->nim.'</strong></li>';
    }
});

Route::get('relasi',function(){
    // mengambil semua data mahasiswa (lengkap dengan semua relasi yang ada)
    $mahasiswa = App\Mahasiswa::all();
    // kirim variabel ke view
    return view('relasi',compact('mahasiswa'));
});


// Crud
Route::resource('dosen','DosenController'); 
Route::resource('hobi','HobiController'); 
Route::resource('mahasiswa','MahasiswaController'); 
Route::resource('wali','WaliController'); 