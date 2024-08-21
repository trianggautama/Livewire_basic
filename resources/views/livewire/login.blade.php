<div class="bg-no-repeat bg-cover bg-center relative" style="background-image: url(https://img.freepik.com/premium-photo/colorful-background-with-black-background-black-background-with-colorful-pattern_9493-5740.jpg);"><div class="absolute bg-gradient-to-b from-blue-500 to-blue-400 opacity-75 inset-0 z-0"></div>
  <div class="min-h-screen sm:flex sm:flex-row mx-0 justify-center">
      <div class="flex justify-center self-center z-10 w-200">
        <div class="p-12 bg-white mx-auto rounded-2xl w-100 ">
            <div class="mb-4">
              <h3 class="font-semibold text-2xl text-gray-800">Sign In </h3>
              <p class="text-gray-500">Please sign in to your account. lorem</p>
            </div>
            <div class="space-y-5">
                <form wire:submit="login">
                    <label class="form-control w-full max-w border-none">
                        <div class="label">
                            <span class="label-text">Email</span>
                        </div>
                        <input wire:model="email" type="email" placeholder="Type your mail" class="input input-bordered w-full max-w" />
                        @error('email')
                            <small class="text-red-500">{{$message}}</small>
                        @enderror
                    </label>
                    <label class="form-control w-full max-w border-none">
                        <div class="label">
                            <span class="label-text">Password</span>
                        </div>
                        <input wire:model="password" type="password" placeholder="Enter ypur Password" class="input input-bordered w-full max-w" />
                        @error('password')
                            <small class="text-red-500">{{$message}}</small>
                        @enderror
                    </label>
                    <div class="px-2">
                        <button class="btn btn-active btn-neutral w-full">Sign In</button>
                    </div>
                </form>
            </div>
            <div class="pt-5 text-center text-gray-400 text-xs">
              <span>
                Copyright © 2024
            </div>
        </div>
      </div>
  </div>
</div>