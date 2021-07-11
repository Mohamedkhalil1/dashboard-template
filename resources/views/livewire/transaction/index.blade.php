<div>
    @section('title',$pageTitle)
    <x-base.card title="{{ $pageTitle }}">
        <x-base.table>
            <x-slot name="head">
                <x-table.heading>Title</x-table.heading>
                <x-table.heading>Amount</x-table.heading>
                <x-table.heading>Status</x-table.heading>
                <x-table.heading>Date</x-table.heading>
            </x-slot>

            <x-slot name="body">
                @foreach($transactions as $transaction)
                    <x-table.row>
                        <x-table.cell class="text-muted">
                            <x-icons.money />
                            {{ $transaction->title }}
                        </x-table.cell>
                        <x-table.cell class="text-muted">{{ $transaction->amount }} $ </x-table.cell>
                        <x-table.cell class="text-muted">
                            <x-base.badge type="success">
                                {{ $transaction->status }}
                            </x-base.badge>
                        </x-table.cell>
                        <x-table.cell class="text-muted">{{ $transaction->date }}</x-table.cell>
                    </x-table.row>
                @endforeach
            </x-slot>
        </x-base.table>
    </x-base.card>

</div>
