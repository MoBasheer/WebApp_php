<?php
if ($data['error'] !== null) {
    echo "<div class='alert alert-danger'>" . htmlspecialchars($data['error'], ENT_COMPAT, 'UTF-8') . "</div>";
} else if ($data['succes'] !== null) {
    echo "<div class='alert alert-success'>" . htmlspecialchars($data['succes'], ENT_COMPAT, 'UTF-8') . "</div>";
}
