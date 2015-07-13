
@forelse($statuses as $status)

    @include('statuses.partials.status')

@empty

    <p>This User have not yet posted</p>

@endforelse