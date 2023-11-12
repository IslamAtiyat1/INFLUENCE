<div>

    <div class="row">
        <div class="col-md-12">
            @if (session('message'))
                <div class="alert alert-success" role="alert">
                    {{ session('message') }}
                </div>
            @endif

        </div>
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Influencer
                        <a href="{{ url('admin/influencer/create') }}" class="btn btn-primary btn-sm float-end">Add
                            Influencer</a>
                    </h4>
                </div>
                <div class="card-body">

                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($influencers as $influencer)
                                <tr>
                                    <td>{{ $influencer->id }}</td>
                                    <td>{{ $influencer->name }}</td>
                                    <td>
                                        <a href="{{ url('admin/influencer/' . $influencer->id . '/edit') }}"
                                            class="btn btn-primary">Edit</a>
                                        <a href="#" wire:click="deleteinfluencer({{ $influencer->id }})"
                                            data-bs-toggle="modal" data-bs-target="#deleteModal"
                                            class="btn btn-secondary">Delete</a>
                                        <!-- Modal -->
                                        <div wire:ignore.self class="modal fade" id="deleteModal" tabindex="-1"
                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="exampleModalLabel">influencer
                                                            delete</h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <form wire:submit.prevent="destroyinfluencer">
                                                        <div class="modal-body">
                                                            <h6>Are you sure you want to delete this data?</h6>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-bs-dismiss="modal">Close</button>
                                                            <button type="submit" class="btn btn-primary">Yes Delete
                                                            </button>
                                                        </div>
                                                    </form>


                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach



                        </tbody>
                    </table>
                    <div>
                        {{ $influencers->links() }}
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>


@push('script')
    <script>
        window.addEventListener('close-model', event => {
            $('#deleteModal').modal('hide');
        });
    </script>
@endpush
