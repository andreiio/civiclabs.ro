<article class="column {{ $column }}">
    <div class="level media is-vcentered">
        <div class="media-left">
            @svg('corner-inverse', 'image is-48x48')
        </div>
        <div class="media-content">
            <h1 class="title is-size-5">{{ $block->translatedinput('header') }}</h1>
        </div>
    </div>
    <div class="content">
        {!! $block->translatedinput('description') !!}
    </div>
</article>
