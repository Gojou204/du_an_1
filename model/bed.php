<?php
    function getAll_bed() {
        $sql = "SELECT * FROM `bed`";
        $listbed = pdo_query($sql);
        return $listbed;
    }