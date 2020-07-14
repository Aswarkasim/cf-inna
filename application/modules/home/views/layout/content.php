<?php

if ($content) {
    $this->load->view($content);
} else {
    echo 'Halaman tidak ditemukan';
}
