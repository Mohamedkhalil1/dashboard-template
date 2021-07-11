<div>
    @section('title',$pageTitle)
    <x-base.card title="{{ '' }}">
        <x-base.grid class="mb-3">
            <x-base.grid-col col="6">
                <x-form.input lazy="true" type="text" class="round" name="search" placeholder="Search Transactions..."/>
            </x-base.grid-col>
        </x-base.grid>

        <x-base.table class="border">
            <x-slot name="head">
                <x-table.heading wire:click="sortBy('title')"  id="title"   :direction="$sortDirection">Title</x-table.heading>
                <x-table.heading wire:click="sortBy('amount')" id="amount"  :direction="$sortDirection">Amount</x-table.heading>
                <x-table.heading wire:click="sortBy('status')" id="status"  :direction="$sortDirection">Status</x-table.heading>
                <x-table.heading wire:click="sortBy('date')"   id="date"    :direction="$sortDirection">Date</x-table.heading>
            </x-slot>

            <x-slot name="body">
                @forelse($transactions as $transaction)
                    <x-table.row>
                        <x-table.cell>
                            <x-icons.money/>
                            {{ $transaction->title }}
                        </x-table.cell>

                        <x-table.cell>{{ formatMoney($transaction->amount) }} </x-table.cell>

                        <x-table.cell>
                            <x-base.badge type="{{\App\Enums\Status::getColor($transaction->status)  }}">
                                {{ \App\Enums\Status::name($transaction->status) }}
                            </x-base.badge>
                        </x-table.cell>

                        <x-table.cell>{{ formatDate($transaction->date) }}</x-table.cell>
                    </x-table.row>
                @empty
                    <x-table.row>
                        <x-table.cell colspan="4">
                            <div class="text-center text-muted text-uppercase">
                                No transactions found...
                            </div>
                        </x-table.cell>
                    </x-table.row>
                @endforelse
            </x-slot>
        </x-base.table>
        <div>
            <nav aria-label="Page navigation example">
                <ul class="pagination pagination-primary">
                    {{ $transactions->links() }}
                </ul>
            </nav>
        </div>

    </x-base.card>

</div>
