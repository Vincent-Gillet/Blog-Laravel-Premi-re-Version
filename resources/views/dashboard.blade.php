<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{-- {{ __("You're logged in!") }} --}}

                    <nav class="navbar navbar-expand-lg navbar-light bg-warning">
                        <div class="container-fluid">
                          {{-- <a class="navbar-brand h1" href={{ route('dashboard') }}>Blog Laravel</a> --}}
                          <div class="justify-end ">
                            <div class="col ">
                              <a class="border border-black rounded" href={{ route('dashboard.create') }}>Ajouter un article</a>
                            </div>
                          </div>
                        </div>
                      </nav>
                      <div class="container mt-5">
                        <div class="grid gap-4 grid-cols-2">
                          @foreach ($posts as $post)
                            <div class="flex items-start gap-6 lg:flex-col">
                              <div class="card">
                                <div class="card-header">
                                  <h5 class="card-title">{{ $post->title }}</h5>
                                </div>
                                <div class="card-body">
                                  <p class="card-text">{{ $post->description }}</p>
                                </div>
                                <div class="card-body">
                                  <p class="card-text">{{ $post->content }}</p>
                                </div>
                                <div class="card-footer">
                                  <div class="row">
                                    <div class="col-sm">
                                      <a href="{{ route('dashboard.edit', $post->id) }}"
                                class="btn btn-primary btn-sm border border-black rounded">Modifier</a>
                                    </div>
                                    <div class="col-sm">
                                        <form action="{{ route('dashboard.destroy', $post->id) }}" method="post">
                                          @csrf
                                          @method('DELETE')
                                          <button type="submit" class="btn btn-danger btn-sm border border-black rounded">Supprimer</button>
                                        </form>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          @endforeach
                        </div>
                      </div>
                </div>
                
            </div>
        </div>
    </div>
</x-app-layout>
