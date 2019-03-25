<?php
/**
 * Created by PhpStorm.
 * User: idist
 * Date: 2019-01-17
 * Time: 20:16
 */

namespace App\Http\Controllers;

use Backpack\PageManager\app\Models\Page;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public function index($slug = '/')
    {
        // check là trang chủ
        if ($slug == '/') {
            return $this->homepage();
        }
        // check là trang đặc biệt, gọi theo hàm đặc biệt
        if (method_exists($this, $slug)) {
            return $this->$slug();
        }
        // nếu không phải trang chủ hay trang đặc biệt, trả về trang thường, sử dụng slug
        return $this->normarlPage($slug);
    }

    public function normarlPage($slug)
    {
        $page = Page::findBySlug($slug);

        if (!$page) {
            abort(404, 'Please go back to our <a href="' . url('') . '">homepage</a>.');
        }
        $this->data['title'] = $page->title;
        $this->data['page'] = $page->withFakes();

        return view('pages.' . $page->template, $this->data);
    }

    public function homepage()
    {
        return view('pages.home_default');
    }
}
