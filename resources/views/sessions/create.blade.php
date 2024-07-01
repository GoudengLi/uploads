<x-layout>

  <section class="px-6 py-8 bg-gray-100" id="6">
      <main class="max-w-lg mx-auto mt-10 bg-white border border-gray-200 p-6 rounded-xl shadow-md">
          <h1 class="text-center text-2xl font-bold mb-8 text-gray-800">Log In!</h1>

          <form method="POST" action="/login" class="mt-6">
              @csrf

              <div class="mb-4">
                  <label class="block text-xs font-bold uppercase text-gray-700" for="email">Email</label>
                  <input class="border border-gray-300 rounded-md py-2 px-3 w-full focus:outline-none focus:border-blue-400"
                         type="email"
                         name="email"
                         id="email"
                         value="{{ old('email') }}"
                         required>
                  @error('email')
                  <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                  @enderror
              </div>

              <div class="mb-4">
                  <label class="block text-xs font-bold uppercase text-gray-700" for="password">Password</label>
                  <input class="border border-gray-300 rounded-md py-2 px-3 w-full focus:outline-none focus:border-blue-400"
                         type="password"
                         name="password"
                         id="password"
                         required>
                  @error('password')
                  <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                  @enderror
              </div>

              <div>
                  <button type="submit"
                          class="bg-blue-500 text-white rounded-md py-2 px-4 hover:bg-blue-600 mt-4 focus:outline-none focus:bg-blue-600">
                      Log In
                  </button>
              </div>
          </form>

          @if ($errors->any())
              <ul class="mt-4">
                  @foreach ($errors->all() as $error)
                      <li class="text-red-500 text-xs">{{ $error }}</li>
                  @endforeach
              </ul>
          @endif
      </main>
  </section>

</x-layout>
