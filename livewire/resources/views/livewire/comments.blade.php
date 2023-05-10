<div>
    
    <div>
        <div
            class="border p-3 d-flex mx-auto flex-column mt-5"
            style=" min-height:200px;flex-basis: 50%"
        >
            <div>
                <h3>Comments</h3>
            </div>
            @error('newComment') <span class="alert alert-danger" role="alert">{{ $message }}</span> @enderror

            @if (session()->has('message'))
                <div class="alert alert-success">
                 {{ session('message') }}    
                </div>                
            @endif

            <section>
               @if ($image)
               <img src={{ $image }} width="200"><br>
               @endif
                <input type="file" id="image" wire:change="$emit('filechoosen')"><br><br><br>
            </section>
            <form class="d-flex" wire:submit.prevent="addComment">
           
                <input
                    class="form-control outline-none rounded"
                    type="text"
                    wire:model.debounce.500ms="newComment"
                />
                <button type="submit"
                    class="bg-primary text-white border border-0 px-4 py-1 ms-1 rounded"
                >
                    Add
                </button>
            </form>
        </div>
        @foreach ($comments as $comment)
        
        <div
            class="d-flex mx-auto border mt-3 py-3 px-3 flex-column rounded"
            style="min-height: 150px;"
        >
        <i class="fa-sharp fa-solid fa-xmark fa-xs text-end" style="color: #ff0000;font-size:30px;cursor: pointer;" wire:click="remove({{ $comment->id }})"></i>
            <div class="d-flex">
                <h4 class="mb-0">{{ $comment->creator->name }}</h4>
                <p class="small pt-1 mb-0 ms-4">{{ $comment->created_at }}</p>
            </div>
            <div class="pt-3">
                {{ $comment->body }}
            </div>
            @if ($comment->image)
            <img src={{ $comment->imagePath }} alt="">
                
            @endif
        </div>
        @endforeach
       
    </div>
    {{ $comments->links() }}
</div>

<script>
    Livewire.on('filechoosen', () => {
        
        let inputField= document.getElementById('image');
        let file =inputField.files[0];
        
        let reader= new FileReader();
        reader.onloadend=()=>{
            window.Livewire.emit('fileUpload',reader.result);
        }
        reader.readAsDataURL(file);
        
    })
</script>