@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold mb-6">Daftar Workout</h1>

    @if(session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-6">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('user.createworkout') }}" class="bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded mb-4 inline-block">
        + Tambah Workout Baru
    </a>

    <table class="min-w-full bg-white border border-gray-200 rounded-lg">
        <thead>
            <tr>
                <th class="py-2 px-4 border-b">Nama</th>
                <th class="py-2 px-4 border-b">Tanggal</th>
                <th class="py-2 px-4 border-b">Durasi (menit)</th>
                <th class="py-2 px-4 border-b">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $workout)
            <tr>
                <td class="py-2 px-4 border-b">{{ $workout->name }}</td>
                <td class="py-2 px-4 border-b">{{ $workout->date }}</td>
                <td class="py-2 px-4 border-b">{{ $workout->Duration }}</td>
                <td class="py-2 px-4 border-b space-x-2">
                    <a href="{{ route('user.showworkout', $workout->id) }}" class="text-blue-600 hover:underline">Lihat</a>
                    <a href="{{ route('user.editworkout', $workout->id) }}" class="text-yellow-600 hover:underline">Edit</a>
                    <form action="{{ route('user.deleteworkout', $workout->id) }}" method="POST" class="inline-block" onsubmit="return confirm('Yakin ingin menghapus workout ini?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-600 hover:underline">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
