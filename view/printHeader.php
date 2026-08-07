<header>
    <div id="header-container">
        <div class="logo">
            <a href="https://tdiw-m1.deic-docencia.uab.cat">
                <img src="/assets/imgs/Logo_Check-byte_name_no_background.png" alt="Check Byte Logo">
            </a>
        </div>

        <div class="home-button">
            <a href="https://tdiw-m1.deic-docencia.uab.cat">Inicio</a>
        </div>

        <form class="search-bar" action="" method="get">
            <input type="text" placeholder="Buscar productos..." name="busqueda">
            <button type="submit">Buscar</button>
        </form>
        
        <div class="user-actions">
            <div class="dropdown">
                <a id="login-btn">
                    <img src="/assets/imgs/user-icon.png" alt="Inicio de Sesión" width="100px">
                </a>
                <ul class="dropdown-menu" id="user-menu">
                    <?php if ($isLoggedIn): ?>
                        <li><a href="index.php?action=resource-myAccount">Mi cuenta</a></li>
                        <li><a href="index.php?action=resource-myOrders">Mis compras</a></li>
                        <li><a href="index.php?action=logout">Cerrar sesión</a></li>
                    <?php else: ?>
                        <li><a href="index.php?action=resource-login">Iniciar sesión</a></li>
                    <?php endif; ?>
                </ul>
            </div>
            <a href="index.php?action=resource-cart" id="cart-btn">
                <img src="/assets/imgs/shopping-cart.png" alt="Carrito" width="100px">
            </a>
        </div>

    </div>
</header>