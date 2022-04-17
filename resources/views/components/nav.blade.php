<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="/">FAH Tweet</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/posts">Posts</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/users">Users</a>
                </li>
            </ul>
            <ul class="navbar-nav" style="margin-left: auto">
                @auth
                <li class="nav-item">
                    <a class="nav-link" href="/posts/create">Buat Post</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      <img src="{{ auth()->user()->image }}" width=25 class="me-2">{{ auth()->user()->name }}
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item" href="#"><i class="fa-solid fa-house me-2"></i>Dashboard</a></li>
                      <li><a class="dropdown-item" href="#">Another action</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li>
                            <form action="/logout" method="POST">
                                @csrf
                                <button type="submit" class="dropdown-item">
                                    <i class="fa-solid fa-right-from-bracket me-2"></i>Keluar
                                </button>
                            </form></li>
                    </ul>
                </li>    
                @else
                <li class="nav-item">
                    <a class="nav-link" href="/signup">Daftar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/login">Masuk</a>
                </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>