<div class="px-4 py-4">
    <div class="card">
        <div class="card-body">
            <x-alert/>
            <div class="card-title">
                New Post 
            </div>
            <form wire:submit="save">
                <label class="form-control w-full max-w border-none">
                    <div class="label">
                        <span class="label-text">Title</span>
                        <span class="label-text-alt">Top Right label</span>
                    </div>
                    <input wire:model="form.title" type="text" placeholder="Type here" class="input input-bordered w-full max-w" />
                    @error('form.title')
                        <small class="text-red-500">{{$message}}</small>
                    @enderror
                </label>
                <label class="form-control w-full max-w border-none">
                    <div class="label">
                        <span class="label-text">Body</span>
                    </div>
                    <textarea wire:model="form.body" class="textarea textarea-bordered" placeholder="What do you think  .. ?"></textarea>
                    @error('form.body')
                        <small class="text-red-500">{{$message}}</small>
                    @enderror
                </label>
                <div class="mt-4 ml-3">
                    <button class="btn btn-active btn-primary text-light">Save ...</button>
                </div>
            </form>
        </div>
    </div>
</div>
