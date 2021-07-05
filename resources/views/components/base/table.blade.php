@props(['resources','models' ,'hasAction'=>true])
<div class="table-responsive">
    <table class="table table-bordered no-footer">
        <thead>
        <tr>
            <td>#</td>
            @foreach($resources as $resource)
                @if($resource['isVisible'])
                    @if($resource['type'] !== 'url')
                        <td>
                            {{$resource['header']}}
                        </td>
                    @endif
                @endif
            @endforeach
            @if($hasAction)
                <td>{{__('Actions')}}</td>
            @endif
        </tr>
        </thead>
        <tbody>

        @foreach($models as $model)
            <tr>
                <td>{{ (($models->currentPage() - 1) * $models->perPage()) + $loop->iteration }}</td>
                @foreach($resources as $resource)
                    @if($resource['isVisible'])
                        @if($resource['type'] === 'text')
                            <td>
                                {{$resource['value']($model)}}
                            </td>
                        @elseif($resource['type'] === 'image')
                            <td>
                                <x-base.image :image="$resource['value']($model)" :size="[200,200]"/>
                            </td>
                        @elseif($resource['type'] === 'url')
                            <td>
                                <a href="{{$resource['value']($model)}}"
                                   class="btn btn-sm btn-primary mr-1 mt-1">
                                    {{$resource['header']}}
                                </a>
                            </td>
                        @endif
                    @endif
                @endforeach
                @isset($action)
                    <td>{{ $action }}</td>
                @endisset
            </tr>
        @endforeach

        </tbody>
    </table>
    {{$models->links()}}
</div>
