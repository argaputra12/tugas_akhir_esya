<x-admin.app>
  <x-slot name="header">
    <h2 class="font-semibold text-3xl text-gray-800 leading-tight">
      {{ __('Barang') }}
    </h2>
  </x-slot>

  <div class="flex flex-col justify-center gap-10">
    @if (session('success'))
      <div id="alert-3" class="flex p-4 mb-4 text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400"
        role="alert">
        <svg aria-hidden="true" class="flex-shrink-0 w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
          xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd"
            d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
            clip-rule="evenodd"></path>
        </svg>
        <span class="sr-only">Info</span>
        {{ session('success') }}
        <button type="button"
          class="ml-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex h-8 w-8 dark:bg-gray-800 dark:text-green-400 dark:hover:bg-gray-700"
          data-dismiss-target="#alert-3" aria-label="Close">
          <span class="sr-only">Close</span>
          <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
            xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd"
              d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
              clip-rule="evenodd"></path>
          </svg>
        </button>
      </div>
    @endif
    @if (session('error'))
      <div id="alert-4" class="flex p-4 mb-4 text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400"
        role="alert">
        <svg aria-hidden="true" class="flex-shrink-0 w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
          xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd"
            d="M10 18a8 8 0 100-16 8 8 0 000 16zM9 7a1 1 0 112 0v4a1 1 0 11-2 0V7zm1 8a1 1 0 100 2 1 1 0 000-2z"
            clip-rule="evenodd"></path>
        </svg>
        <span class="sr-only">Error</span>
        {{ session('error') }}
        <button type="button"
          class="ml-auto -mx-1.5 -my-1.5 bg-red-50 text-red-500 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-200 inline-flex h-8 w-8 dark:bg-gray-800 dark:text-red-400 dark:hover:bg-gray-700"
          data-dismiss-target="#alert-4" aria-label="Close">
          <span class="sr-only">Close</span>
          <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
            xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd"
              d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 11-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
              clip-rule="evenodd"></path>
          </svg>
        </button>
      </div>
    @endif
    <h2 class="text-2xl">Form Tambah Barang</h2>

    <form action="{{ route('admin.barang.store') }}" method="POST">
      @csrf
      <div class="flex justify-between gap-28">
        <div class="flex flex-col items-end justify-center w-1/2 gap-8">
          <div class="flex gap-10 items-center justify-end">
            <label for="jenis" class="text-xl">Jenis</label>
            <input type="text" name="jenis_barang" class="h-16 border w-52">
          </div>
          <div class="flex gap-10 items-center justify-end">
            <label for="kategori" class="text-xl">Kategori</label>
            <select name="kategori" id="kategori" class="h-16 border w-52">
              <option value="perabotan kantor">Perabotan Kantor</option>
              <option value="perabotan elektronik">Perabotan Elektronik</option>
            </select>
          </div>
          <div class="flex gap-10 items-center justify-end">
            <label for="merek" class="text-xl">Merek</label>
            <input type="text" name="merek" class="h-16 border w-52">
          </div>
          <div class="flex gap-10 items-center justify-end">
            <label for="jumlah" class="text-xl">Jumlah</label>
            <input type="number" name="jumlah_barang" class="h-16 border w-52">
          </div>
          <div class="flex gap-10 items-center justify-end">
            <label for="tanggal_masuk" class="text-xl">Tanggal Masuk</label>
            <input type="date" name="tanggal_masuk" class="h-16 border w-52">
          </div>
          <div class="flex gap-10 items-center justify-end">
            <label for="kondisi" class="text-xl">Kondisi</label>
            <input type="text" name="kondisi_barang" class="h-16 border w-52">
          </div>
        </div>
        <div class="w-1/2 flex items-end">
          <button type="submit"
            class="py-4 px-8 text-2xl font-bold bg-gray-300 hover:bg-gray-400 transition-all duration-200 border border-black">
            Simpan
          </button>
        </div>
      </div>
    </form>
  </div>
</x-admin.app>
