<?php

if(isset($_GET['disconnect'])){
    session_destroy();
}

