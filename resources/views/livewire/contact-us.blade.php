<div>
    <form class="p-3 p-xl-4" wire:submit="save">
        @csrf
        <h4>Contact us</h4>
        <p class="text-muted">Got questions, suggestions, or just want to say Namaste? We'd love to hear from you!</p>
        <div class="mb-3"><label class="form-label" for="name">Name</label><input class="form-control" type="text"
                id="name" wire:model.live="name" name="name">
            @error('name')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-3"><label class="form-label" for="email">Email</label><input class="form-control"
                type="email" id="email" name="email" wire:model.live="email">
            @error('email')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-3"><label class="form-label" for="message">Message</label>
            <textarea class="form-control" id="message" name="message" rows="6" wire:model.live="message"></textarea>
            @error('message')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-3"><button class="btn btn-primary" type="submit">Send
            </button></div>
    </form>
</div>
