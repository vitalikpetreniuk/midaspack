<?php


function renderUploadsSVG($filename = '')
{
    if ($filename) {
        echo file_get_contents(wp_upload_dir()['basedir'] . '/' . $filename['filename']);
    }
}

function renderAssetsSVG($filename = '')
{
    if ($filename) {
        echo file_get_contents(get_template_directory() . '/assets/images/' . $filename . '.svg');
    }
}

function renderBlock($name)
{
    get_template_part('/blocks/' . $name . '/index');
}

function renderComponent($name, $args = [])
{
    locate_template('components/' . $name . '/index.php', true, false, $args);
}

function renderImages($filename)
{
    echo '/wp-content/themes/' . wp_get_theme() . '/assets/images/' . $filename;
}

function returnEmpty()
{
    return '';
}

function echoText($text)
{
    echo esc_html__($text, 'brainwave');
}