<div>
   

    <div class="container my-5">
        <div class="row justify-content-center">
          <div class="col-lg-6">
            <div class="card">
              <div class="card-header text-light" style="background-color:#5b245b">
                <h2>Register</h2>
              </div>
              <div class="card-body">
                <form wire:submit.prevent="submit">
                  <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" wire:model='form.name'>
                    @error('form.name') <span class="alert alert-danger" role="alert">{{ $message }}</span> @enderror
                  </div>
                  <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="email"wire:model='form.email'>
                   
                  </div>
                  <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" autocomplete="on" wire:model='form.password'>
                    @error('form.password') <span class="alert alert-danger" role="alert">{{ $message }}</span> @enderror
                  </div>
                  <div class="mb-3">
                    <label for="confirm-password" class="form-label">Confirm Password</label>
                    <input type="password" class="form-control" id="confirm-password" autocomplete="on" wire:model='form.password_confirmation'>
                    @error('form.password_confirmation') <span class="alert alert-danger" role="alert">{{ $message }}</span> @enderror
                  </div>
                  <button type="submit" class="btn btn-primary">Register</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>

</div>
