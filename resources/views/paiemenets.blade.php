@if(auth()->check() && auth()->user()->role === 'seller'||auth()->user()->role === 'admin')

    <p>Unauthorized: You are a seller and don't have permission to perform this action.</p>
@else

    <p>Successfully done: The product was added to the cart successfully.</p>
@endif
