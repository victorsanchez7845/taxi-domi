<ol class="breadcrumb" itemscope itemtype="https://schema.org/BreadcrumbList">
    @foreach ($breadcrumbs as $key => $item)        
        @if( isset( $item['URL'] ) )
            <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                <a itemprop="item" href="{{ $item['URL'] }}">
                    <span itemprop="name">{{ $item['name'] }}</span>
                </a>
                <meta itemprop="position" content="{{ $key }}" /> 
            </li>            
        @else
            <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem"> 
                <span itemprop="name">{{ $item['name'] }}</span> <meta itemprop="position" content="{{ $key }}" /> 
            </li>
        @endif
    @endforeach
</ol>