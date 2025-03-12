<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <h1 class="text-2xl font-semibold mb-6">Yönetim Paneli</h1>
            
            <!-- İstatistik Kartları -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 mb-8">
                <!-- Toplam Öğrenci -->
                <div class="bg-white overflow-hidden shadow-sm rounded-lg">
                    <div class="p-6">
                        <div class="text-gray-500 text-sm font-medium">Toplam Öğrenci</div>
                        <div class="mt-2 text-3xl font-bold text-gray-900">{{ $totalStudents }}</div>
                    </div>
                </div>

                <!-- Toplam Oda -->
                <div class="bg-white overflow-hidden shadow-sm rounded-lg">
                    <div class="p-6">
                        <div class="text-gray-500 text-sm font-medium">Toplam Oda</div>
                        <div class="mt-2 text-3xl font-bold text-gray-900">{{ $totalRooms }}</div>
                    </div>
                </div>

                <!-- Dolu Odalar -->
                <div class="bg-white overflow-hidden shadow-sm rounded-lg">
                    <div class="p-6">
                        <div class="text-gray-500 text-sm font-medium">Dolu Odalar</div>
                        <div class="mt-2 text-3xl font-bold text-gray-900">{{ $occupiedRooms }}</div>
                    </div>
                </div>

                <!-- Boş Odalar -->
                <div class="bg-white overflow-hidden shadow-sm rounded-lg">
                    <div class="p-6">
                        <div class="text-gray-500 text-sm font-medium">Boş Odalar</div>
                        <div class="mt-2 text-3xl font-bold text-gray-900">{{ $availableRooms }}</div>
                    </div>
                </div>
            </div>

            <!-- Son Ödemeler -->
            <div class="bg-white overflow-hidden shadow-sm rounded-lg">
                <div class="p-6">
                    <h2 class="text-xl font-semibold mb-4">Son Ödemeler</h2>
                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Öğrenci</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Tutar</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Tarih</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Durum</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @foreach($recentPayments as $payment)
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">{{ $payment->user->name }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap">{{ number_format($payment->amount, 2) }} ₺</td>
                                    <td class="px-6 py-4 whitespace-nowrap">{{ $payment->created_at->format('d.m.Y') }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full {{ $payment->status === 'completed' ? 'bg-green-100 text-green-800' : 'bg-yellow-100 text-yellow-800' }}">
                                            {{ $payment->status === 'completed' ? 'Tamamlandı' : 'Bekliyor' }}
                                        </span>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
