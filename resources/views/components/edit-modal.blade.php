<div>
    <div class="modal fade" id="editModalCenter" tabindex="-1" aria-hidden="true" wire:ignore.self>
        <div class="modal-dialog modal-dialog-centered modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalCenterTitle">{{$title}}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <form wire:submit.prevent="updateProduct">
                    <div class="modal-body">
                        {{$slot}}
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                            Close
                        </button>
                        <button type="submit" class="btn btn-primary" wire:loading.attr="disabled">
                            Save
                            <div class="spinner-border spinner-border-sm text-light ms-2" role="status" wire:loading wire:target="updateProduct">
                                <span class="visually-hidden">Loading...</span>
                            </div>
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
