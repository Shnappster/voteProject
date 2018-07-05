<div class="blog-masthead">
    <div class="container">
        <nav class="nav blog-nav">


            @if (!Auth::check())
                <a class="nav-link ml-auto border-right" href="/login">Login</a>
                <a class="nav-link" href="/register">Register</a>
            @else
                <a class="nav-link" href="/">Vote</a>
                <a class="nav-link" href="/votes/create">Create</a>
                <a class="nav-link ml-auto" href="/logout">Logout</a>
            @endif
        </nav>
    </div>
</div>

