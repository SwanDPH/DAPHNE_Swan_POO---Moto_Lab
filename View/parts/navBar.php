<html>
    <header>
        <link rel="stylesheet" href="style.css">
        <script src="examPhp.js"></script>
    </header>
<head>
<div class="navbar">
        <div class="logo">
<svg width="64px" height="64px" viewBox="0 0 1024 1024" class="icon" version="1.1" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M213.333333 874.666667c-105.877333 0-192-86.122667-192-192s86.122667-192 192-192 192 86.122667 192 192-86.122667 192-192 192z" fill="#000000"></path><path d="M213.333333 789.333333c-58.816 0-106.666667-47.850667-106.666666-106.666666s47.850667-106.666667 106.666666-106.666667 106.666667 47.850667 106.666667 106.666667-47.850667 106.666667-106.666667 106.666666z" fill="#fffafa"></path><path d="M469.333333 682.666667H213.333333l256-170.666667z" fill="#d6d6d6"></path><path d="M469.333333 704H213.333333a21.333333 21.333333 0 0 1-11.84-39.082667l256-170.666666A21.312 21.312 0 0 1 490.666667 512v170.666667a21.333333 21.333333 0 0 1-21.333334 21.333333z m-185.536-42.666667H448v-109.482666L283.797333 661.333333z" fill="#d6d6d6"></path><path d="M795.584 70.250667l-42.666667 42.666666a21.376 21.376 0 0 0 4.501334 33.6C794.368 167.637333 832 212.117333 832 234.666667c0 17.706667-14.677333 33.493333-36.416 41.664C597.333333 160 441.237333 347.2 441.237333 347.2c-8.042667 8.533333-24.192 15.466667-35.712 15.466667h-85.717333c-11.626667 0-27.861333-6.72-36.096-14.933334l-55.317333-55.338666c-8.277333-8.277333-24.533333-16.426667-36.138667-18.069334l-107.178667-15.317333c-11.584-1.642667-24.64 5.888-28.992 16.768l-27.114666 67.818667a21.333333 21.333333 0 0 0 11.136 27.413333L213.333333 448c129.621333 0 234.666667 105.066667 234.666667 234.666667 0 7.210667-0.426667 14.293333-1.066667 21.333333H640c4.181333 0 8.234667-1.216 11.733333-3.498667 0 0 240.661333-158.570667 241.792-159.488C934.186667 499.733333 1002.666667 413.162667 1002.666667 298.666667c0-170.816-177.770667-231.125333-185.344-233.6a21.333333 21.333333 0 0 0-21.738667 5.184z" fill="#ff9500"></path><path d="M430.72 355.136c-7.957333 4.501333-17.578667 7.530667-25.173333 7.530667h-85.76c-11.605333 0-27.84-6.72-36.053334-14.933334l-55.338666-55.338666c-8.277333-8.277333-24.533333-16.426667-36.138667-18.069334l-107.178667-15.317333c-11.584-1.642667-24.64 5.888-28.992 16.768l-15.616 39.082667L266.666667 405.333333h108.501333a21.333333 21.333333 0 0 0 15.082667-6.250666l42.517333-42.517334-2.026667-1.429333z" fill="#000000"></path><path d="M810.666667 874.666667c-105.877333 0-192-86.122667-192-192s86.122667-192 192-192 192 86.122667 192 192-86.122667 192-192 192z" fill="#000000"></path><path d="M810.666667 789.333333c-58.816 0-106.666667-47.850667-106.666667-106.666666s47.850667-106.666667 106.666667-106.666667 106.666667 47.850667 106.666666 106.666667-47.850667 106.666667-106.666666 106.666666z" fill="#fffafa"></path><path d="M746.666667 384a21.333333 21.333333 0 0 1-15.082667-36.416l64-64a21.333333 21.333333 0 1 1 30.165333 30.165333l-64 64A21.269333 21.269333 0 0 1 746.666667 384z" fill="#000000"></path><path d="M989.909333 224.704l-79.317333 26.432a21.333333 21.333333 0 0 0-14.592 20.245333V298.666667a21.333333 21.333333 0 0 0 21.333333 21.333333h84.522667c0.533333-6.997333 0.810667-14.101333 0.810667-21.333333 0-27.562667-4.970667-51.946667-12.757334-73.962667z" fill="#fffafa"></path></g></svg>
<p>Moto'Lab</p>
</div>
        
<ul class="optionNavBar">
            <li 
            <?php 
            if (empty($_SESSION)) {
                echo 'class="invisible" ';
            }
            ?>>
            <a  href="index.php?controller=default&action=home">Accueil</a></li>

            <li <?php 
                if (empty($_SESSION)) {
                    echo 'class="invisible" ';
                }
                ?>>
                <a href="index.php?controller=moto&action=list">Nos Motos</a>
            </li>

            <li
            <?php 
            if (!empty($_SESSION)) {
                echo 'class="invisible" ';
            }
            ?>
            ><a href="index.php?controller=security&action=register">Connexion</a></li>
            
            <li <?php 
                if (empty($_SESSION)) {
                    echo 'class="invisible" ';
                }
                ?>>
                <a href="index.php?controller=security&action=disconnect">Déconnexion</a>
            </li>
        </ul>
    </div>