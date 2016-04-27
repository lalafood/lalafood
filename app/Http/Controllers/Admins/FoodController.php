<?php namespace App\Http\Controllers\Admins;
use App\Http\Controllers\AdminsController;
use Illuminate\Http\Request;
use App\Models\Foods;
use	Illuminate\Filesystem\Filesystem;
use File;

class FoodController extends AdminsController{
    public function getIndex(){
        $foods = Foods::get();
        //select * form Foods
        return view('admin.upload.index',['food' => $foods]);
    }
    public function getForm($id = 0){
		if($id != 0){
			$food = Foods::where('id',$id)->first();
			if(!$food) return redirect('admin/upload/form');//add user
		}else{ $food = false;}//edit user
		$data = array('id' => $id,'food' => $food);
		return view('admin.upload.form',$data);
	}

    public function postForm(Request $request){
        $id = $request->get('id');
        $oldFoods= Foods::where('id',$id)->first();
        $foods = $oldFoods ? $oldFoods : new Foods;
        if($request->exists('btn-upload')){
            // picture 1
            $file_1 = $request->file('uploader1');
            if($file_1 ==""){
                $file_1=file('images\uploads\no-image-box.png');
            }   // picture 1
            // picture 2

            $file_2 = $request->file('uploader2');
            if($file_2 ==""){
                $file_2=file('images\uploadsno-image-box.png');
            }


            $file_3 = $request->file('uploader3');
            if($file_3 ==""){
                $file_3=file('images\uploadsno-image-box.png');
            }   // picture 3

            $path = 'images/uploads';

            $filename1 = $file_1->getClientOriginalName();// picture 1
            $filename2 = $file_2->getClientOriginalName();// picture 2
            $filename3 = $file_3->getClientOriginalName();// picture 3

            $file_1->move('images/uploads',$filename1);// picture 1
            $file_2->move('images/uploads',$filename2);// picture 2
            $file_3->move('images/uploads',$filename3);// picture 3

            //$foods = new Foods;
            //insert into food
            //picture
            $foods->imag_name1 = $filename1;
            $foods->imag_name2 = $filename2;
            $foods->imag_name3 = $filename3;
            //detail
            $foods->name = $request->get('name');
            $foods->type = $request->get('type');
            $foods->price = $request->get('price');
            $foods->discribtion = $request->get('discribtion');




            $foods->save();
            return redirect()->back();

        }
    }

    public function postAction(Request $request){
        if($request->exists('btn-upload')){
            // picture 1
            $file_1 = $request->file('uploader1');
            if($file_1 ==""){
                $file_1=file('images\uploads\no-image-box.png');
            }   // picture 1
            // picture 2

            $file_2 = $request->file('uploader2');
            if($file_2 ==""){
                $file_2=file('images\uploads\no-image-box.png');
            }


            $file_3 = $request->file('uploader3');
            if($file_3 ==""){
                $file_3=file('images\uploads\no-image-box.png');
            }   // picture 3

            $path = 'images/uploads';

            $filename1 = $file_1->getClientOriginalName();// picture 1
            $filename2 = $file_2->getClientOriginalName();// picture 2
            $filename3 = $file_3->getClientOriginalName();// picture 3

            $file_1->move('images/uploads',$filename1);// picture 1
            $file_2->move('images/uploads',$filename2);// picture 2
            $file_3->move('images/uploads',$filename3);// picture 3

            $foods = new Foods;
            //insert into food
            //picture
            $foods->imag_name1 = $filename1;
            $foods->imag_name2 = $filename2;
            $foods->imag_name3 = $filename3;
            //detail
            $foods->name = $request->get('name');
            $foods->type = $request->get('type');
            $foods->price = $request->get('price');
            $foods->discribtion = $request->get('discribtion');




            $foods->save();
            echo 'Uploaded';

        }
        return redirect()->back();
    }
    public function getDelete($id){
		$foods=Foods::where('id',$id)->first();
        $filename1 ='images/uploads/'.$foods->imag_name1;// picture 1
        $filename2 ='images/uploads/'.$foods->imag_name2;// picture 2
        $filename3 ='images/uploads/'.$foods->imag_name3;// picture 3
        File::delete($filename1,$filename2,$filename3);
        Foods::where('id',$id)->delete();
		return redirect()->back();

	}



}
