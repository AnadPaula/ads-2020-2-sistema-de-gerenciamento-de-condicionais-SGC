<nav class="col-md-2 d-none d-md-block bg-light sidebar">
    <div class="sidebar-sticky">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link {{ request()->is('dashboard') ? 'active' : '' }}" href="{{('dashboard') }}">
                    <span data-feather="home"></span>
                    Dashboard<span class="sr-only">(current)</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->is('clientes*') ? 'active' : '' }}" href="{{ route('clientes.index') }}">
                    <span data-feather="file"></span>
                    Clientes
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->is('funcionarios*') ? 'active' : '' }}" href="">
                    <span data-feather="shopping-cart"></span>
                   Funcionários
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->is('produtos*') ? 'active' : '' }}" href="">
                    <span data-feather="users"></span>
                    Produtos
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link {{ request()->is('pedidos*') ? 'active' : '' }}" href="">
                    <span data-feather="users"></span>
                   Pedidos
                </a>
            </li>

        </ul>

        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
            <span>Relatórios</span>
            <a class="d-flex align-items-center text-muted" href="#" aria-label="Add a new report">
                <span data-feather="plus-circle"></span>
            </a>
        </h6>
        <ul class="nav flex-column mb-2">
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <span data-feather="file-text"></span>
                    Current month
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <span data-feather="file-text"></span>
                    Last quarter
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <span data-feather="file-text"></span>
                    Social engagement
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <span data-feather="file-text"></span>
                    Year-end sale
                </a>
            </li>
        </ul>
    </div>
</nav>
