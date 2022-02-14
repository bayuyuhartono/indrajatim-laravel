@if ($paginator->hasPages())

@if((new \Jenssegers\Agent\Agent())->isDesktop())
<div class="container">
    <nav>
        <ul class="pagination justify-content-center">
            @foreach ($elements as $element)
           
                @if (is_string($element))
                    <li class="disabled"><span>{{ $element }}</span></li>
                @endif


            
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="page-item active" aria-current="page">
                                <span class="page-link">{{ $page }}</span>
                            </li>
                        @else
                            <li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach
        </ul>
    </nav>
</div>    
@else
<div class="container">
    <nav>
        <ul class="pagination justify-content-center">         
            <li class="page-item {{ $paginator->previousPageUrl() ? '' : 'disabled' }}"><a class="page-link" href="{{ $paginator->previousPageUrl() }}"><</a></li>
            <li class="page-item {{ $paginator->nextPageUrl() ? '' : 'disabled' }}"><a class="page-link" href="{{ $paginator->nextPageUrl() }}">></a></li>
        </ul>
    </nav>
</div> 
@endif 
@endif 
