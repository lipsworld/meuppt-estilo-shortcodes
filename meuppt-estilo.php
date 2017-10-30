<?php /*
**************************************************************************
Plugin Name:  MeuPPT - Shortcodes, estilos e elementos
Plugin URI:   https://github.com/lipsworld/meuppt-estilo-shortcodes
Description:  Habilita uma série de estilos e shortcodes para uso em posts e páginas, mas também classes CSS para edição e modificação de templates.
Version:      1.0.0
License: GNU General Public License v2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
Author:       MeuPPT
Author URI:   http://www.meuppt.pt/
Text Domain:  security-functions-meuppt
**************************************************************************
Copyright (C) 2017 MeuPPT
This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.
You should have received a copy of the GNU General Public License
along with this program.  If not, see <http://www.gnu.org/licenses/>.


**************************************************************************/

// Aciona via CDN folhas de estilo e diretrizes do Spectre CSS

function meuppt_spectre_init() {
    ?>
        <link rel="stylesheet" href="https://unpkg.com/spectre.css/dist/spectre.min.css">
        <link rel="stylesheet" href="https://unpkg.com/spectre.css/dist/spectre-exp.min.css">
        <link rel="stylesheet" href="https://unpkg.com/spectre.css/dist/spectre-icons.min.css">
    <?php
}

add_action('wp_head', 'meuppt_spectre_init');
