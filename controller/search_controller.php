<?php
function search()
{
    render("search");
}
function check_search()
{
    extract($_POST);
    if (isset($_POST['btn_search'])) {
        $data = product_seacher($look);
        render(
            "search",
            [
                'data' => $data,
                'look' => $look
            ],
        );
        exit;
    } else {
        render("search");
    }
}
