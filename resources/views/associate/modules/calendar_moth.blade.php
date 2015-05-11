<div class="row">
    @foreach($moths as $moth)
        <div class="col-xs-4 well">
            <div class="label label-default col-xs-12">
                {{ ucfirst($moth->format('F')) }}
            </div>
        </div>

    @endforeach
</div>

