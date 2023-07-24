@extends('components.head')
@section('title', 'Dashboard')

<body class="bg-default">
    @auth
        <x-loginheader />
    @else
        <x-header />
    @endauth
    <section id="show" class="pt-36">
        <div class="container">
            <div class="flex flex-wrap">
                <table class="border-separate border-spacing-2 w-full border border-slate-400 dark:border-slate-500 bg-white dark:bg-slate-800 text-sm shadow-sm">
                    <thead class="bg-slate-50 dark:bg-slate-700">
                        <tr>
                            <th class="w-1/8 border border-slate-300 dark:border-slate-600 font-semibold p-4 text-slate-900 dark:text-slate-200 text-left">Nama</th>
                            <th class="w-1/8 border border-slate-300 dark:border-slate-600 font-semibold p-4 text-slate-900 dark:text-slate-200 text-left">NIK</th>
                            <th class="w-1/8 border border-slate-300 dark:border-slate-600 font-semibold p-4 text-slate-900 dark:text-slate-200 text-left">KK</th>
                            <th class="w-1/8 border border-slate-300 dark:border-slate-600 font-semibold p-4 text-slate-900 dark:text-slate-200 text-left">Keperluan</th>
                            <th class="w-1/8 border border-slate-300 dark:border-slate-600 font-semibold p-4 text-slate-900 dark:text-slate-200 text-left">Keterangan</th>
                            <th class="w-1/8 border border-slate-300 dark:border-slate-600 font-semibold p-4 text-slate-900 dark:text-slate-200 text-left">Status</th>
                            <th class="w-1/8 border border-slate-300 dark:border-slate-600 font-semibold p-4 text-slate-900 dark:text-slate-200 text-left">No HP</th>
                            <th class="w-1/8 border border-slate-300 dark:border-slate-600 font-semibold p-4 text-slate-900 dark:text-slate-200 text-left">Email</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="border border-slate-300 dark:border-slate-700 p-4 text-slate-500 dark:text-slate-400">{{ $posts->name }}</td>
                            <td class="border border-slate-300 dark:border-slate-700 p-4 text-slate-500 dark:text-slate-400">{{ $posts->nik }}</td>
                            <td class="border border-slate-300 dark:border-slate-700 p-4 text-slate-500 dark:text-slate-400">{{ $posts->kk }}</td>
                            <td class="border border-slate-300 dark:border-slate-700 p-4 text-slate-500 dark:text-slate-400">{{ $posts->keperluan }}</td>
                            <td class="border border-slate-300 dark:border-slate-700 p-4 text-slate-500 dark:text-slate-400">{{ $posts->keterangan }}</td>
                            <td class="border border-slate-300 dark:border-slate-700 p-4 text-slate-500 dark:text-slate-400">@if($posts->status===0)
                                Belum Disetujui
                            @else
                                Sudah Disetujui
                            @endif</td>
                            <td class="border border-slate-300 dark:border-slate-700 p-4 text-slate-500 dark:text-slate-400">{{ $posts->nohp }}</td>
                            <td class="border border-slate-300 dark:border-slate-700 p-4 text-slate-500 dark:text-slate-400">{{ $posts->email }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</body>
