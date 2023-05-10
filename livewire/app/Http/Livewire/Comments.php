<?php

namespace App\Http\Livewire;

use App\Models\Comment;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithPagination;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic;

class Comments extends Component
{

    use WithPagination;
    use WithFileUploads;
    protected $paginationTheme = 'bootstrap';

 public $newComment;
 public $image;
 public $ticketId;
 

 protected $listeners = [
   'fileUpload' => 'handleFileUpload',
   'ticketSelected'

];

public function ticketSelected($ticketId){

   $this->ticketId=$ticketId;
   


}

 public function handleFileUpload($imageData){
    $this->image=$imageData;
 }
 

 public function updated($propertyName)
    {
        $this->validateOnly($propertyName,['newComment'=>'required|max:255']);
    }


 public function addComment(){

    $this->validate(['newComment'=>'required']);
   $image= $this->storeImage();

 Comment::create([
   'body' => $this->newComment,'user_id'=>1,
    'image'=>$image,            
    'support_ticket_id'=>$this->ticketId
]);
   $this->newComment="";
   $this->image="";
   session()->flash('message', 'Comment successfully Added.😄');
}

public function storeImage()
{
   if(!$this->image) {
      return null;
   }
   $img = ImageManagerStatic::make($this->image)->encode('jpg');
   $name = Str::random().'.'.'jpg';
   Storage::disk('public')->put($name,$img);

   return $name;
}

public function remove($commentId){
  
    $comment=Comment::find($commentId);
    
    if($comment->image) {
      Storage::disk('public')->delete($comment->image);
   }


   
    $comment->delete();
 
    session()->flash('message', 'Comment successfully deleted.😄');

}




    public function render()
    {
        return view('livewire.comments',[
           'comments'=> Comment::where('support_ticket_id',$this->ticketId)->latest()->paginate(2)
        ]);
    }
}
