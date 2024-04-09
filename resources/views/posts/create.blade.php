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
                  <div class="container h-100 mt-5">
                    <div class="row h-100 justify-content-center align-items-center">
                      <div class="col-10 col-md-8 col-lg-6">
                        <h3>Création de l'article</h3>
                        <form action="{{ route('dashboard.store') }}" method="post">
                          @csrf
                          <div class="form-group flex flex-col">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" id="title" name="title" required>
                          </div>
                          <div class="form-group flex flex-col">
                              <label for="description">Description</label>
                              <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
                          </div>
                          <div class="form-group flex flex-col">
                              <label for="content">Contenu</label>
                              <textarea class="form-control" id="content" name="content" rows="3" required></textarea>
                          </div>
                          <br>
                          <button type="submit" class="btn btn-primary">Création de l'article</button>
                        </form>
                      </div>
                    </div>
                  </div>
                  
                </div>
              </div>
          </div>
      </x-app-layout>
      