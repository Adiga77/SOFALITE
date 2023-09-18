<?php
    if (isset($_GET['id'])) {
        $id = json_decode($_GET['id']);
        echo $id;
    }