<div>
   

   <div class="container my-5">
       <div class="row justify-content-center">
         <div class="col-lg-6">
           <div class="card">
             <div class="card-header text-light" style="background-color:#5b245b">
               <h2>Login</h2>
             </div>
             <div class="card-body">
               <form wire:submit.prevent="submit">
                  @if (session()->has('message'))
                <div class="alert alert-danger">
                 {{ session('message') }}    
                </div>                
            @endif

                 <div class="mb-3">
                   <label for="email" class="form-label">Email address</label>
                   <input type="email" class="form-control" id="email"wire:model='form.email'>
                   @error('form.email') <span class="alert alert-danger" role="alert">{{ $message }}</span> @enderror
                 </div>
                 <div class="mb-3">
                   <label for="password" class="form-label">Password</label>
                   <input type="password" class="form-control" id="password" autocomplete="on" wire:model='form.password'>
                   @error('form.password') <span class="alert alert-danger" role="alert">{{ $message }}</span> @enderror
                 </div>
                 <button type="submit" class="btn btn-primary">Login</button>
               </form>
             </div>
           </div>
         </div>
       </div>
     </div>

</div>
