<?php

namespace App\Controllers;

use App\Models\DbOk;

class Home extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }

    public function index1()
    {
        return view('index');
    }

    public function Home()
    {
        return view("Home");
    }

    public function but($count)
    {
        if ($count > 4) {
            return
                "
            <input type='hidden' value='5' id='count' />
            <p id='end'><button onclick='add_more(4," . $count . ")' id='add_more'class='btn  btn-danger' value='$count'>عرض المذيد</button>
            </p>
            ";
        } else {
            return "<p class='alert alert-danger'>لا يتوفر كتب</p>";
        }
    }

    public function departbook()
    {
        $input = \Config\Services::request();
        $id = $input->getGet("id");
        $data = new DbOk();
        $rr["id"] = $data->cheack_row($id, "id");
        $rr["name"] = $data->cheack_row($id, "name_dep");
        $rr["description"] = $data->cheack_row($id, "description");
        if ($rr["id"] == "") {
            return redirect()->to("/Home");
        }
        $rr["books"] = $data->get_Books($id);
        $rr["count"] = $this->but($data->get_all_row($rr["id"]));
        return view("books", $rr);
    }

    public function error()
    {
        return "error";
    }

    public function department()
    {
        $data =  new DbOk();
        return $data->get_department();
    }

    public function view_all_books()
    {
        $input = \Config\Services::request();
        $data =  new DbOk();
        $id = $input->getGet("id");
        $param = $input->getGet("param");
        return $data->get_limted_books($id, $param);
    }

    public function asaa()
    {
        $data =  new DbOk();
        return $data->get_department();
    }

    public function book()
    {
        $input = \Config\Services::request();
        $data =  new DbOk();
        $id = $input->getGet("id");
        $r = $data->get_Books_item($id);
        if ($r > 0) {
            $id_user = $data->data_id_user($id);
            $d["data"] = $data->data_book($id);
            $d["user"] = $data->data_user($id_user); //
            return view("book", $d);
        } else {
            return redirect()->to("/Home");
        }
    }

    public function but_user($count)
    {
        if ($count > 4) {
            return
                "
            <input type='hidden' value='5' id='count' />
            <p id='end'><button onclick='add_more(4," . $count . ")' id='add_more'class='btn  btn-danger' value='$count'>عرض المذيد</button>
            </p>
            ";
        } else {
            return "<p class='alert alert-danger'>لا يتوفر كتب</p>";
        }
    }

    public function user()
    {
        $data =  new DbOk();
        $input = \Config\Services::request();
        $id = $input->getGet("id");
        $d = $data->Cheack_user($id);
        if ($d > 0) {
            $dd["data_user"] = $data->data_user_det($id);
            $dd["all_num"] = $data->count_users($id);
            $dd["all_books"] = $data->data_user_books($id);
            $dd["but_user"] = $this->but_user($dd["all_num"]);
            return view("users", $dd);
        }
        return redirect()->to("/Home");
    }

    public function view_all_books_with_user()
    {
        $input = \Config\Services::request();
        $data =  new DbOk();
        $id = $input->getGet("id");
        $param = $input->getGet("param");
        return $data->get_limted_books_with_user($id, $param);
    }
    public function but_user_all($count)
    {
        if ($count > 4) {
            return
                "
            <input type='hidden' value='5' id='count' />
            <p id='end'><button onclick='add_more(4," . $count . ")' id='add_more'class='btn  btn-danger' value='$count'>عرض المذيد</button>
            </p>
            ";
        } else {
            return "<p class='alert alert-danger'>لا يتوفر كتب</p>";
        }
    }
    public function all_users()
    {
        $data =  new DbOk();
        $d["users"] = $data->get_all_users();
        $d1 = $data->count_all_users();
        $d["but_user"] = $this->but_user_all($d1);
        return view("all_users", $d);
    }

    public function limted_users()
    {
        $data =  new DbOk();
        $input = \Config\Services::request();
        $ida = $input->getGet("param");
        return $data->get_limted_users($ida);
    }

    public function add_users()
    {
        $data =  new DbOk();
        $input = \Config\Services::request();
        $d["send"] = $input->getGet("send");
        $d["username"] = $input->getGet("email");
        $d["password"] = $input->getGet("password");
        $d["description"] = $input->getGet("description");
        if ($d["send"] == "send") {
            if ($d["username"] == "" and $d["password"] == "") {
                return redirect()->to("/add_users?email=&password=&send=fill");
            } else {
                $a = $data->insert_user($d["username"], $d["password"], $d["description"]);
                return redirect()->to("/add_users?send=".$a);
            }
        }
        $d["login"] = $input->getGet("login");
        return view("add_users", $d);
    }

    public function But_serch($count)
    {
        if ($count > 4) {
            return
                "
            <input type='hidden' value='5' id='count' />
            <p id='end'><button onclick='add_more(4," . $count . ")' id='add_more'class='btn  btn-success' value='$count'>عرض المذيد</button>
            </p>
            ";
        } else {
            return "<p class='alert alert-danger'>لا يتوفر كتب بهذا لاسم</p>";
        }
    }

    public function serch()
    {
        $input =  \Config\Services::request();
        $name = $input->getGet("name");
        $db = new DbOk();

        if ($name == "") {
            return redirect()->to("/Home");
        }

        $data["books"] = $db->serch_book($name);
        $data["but_more"] = $this->But_serch($db->serch_book_count($name));
        return view("serch", $data);
    }

    public function view_serch_limted()
    {
        $input = \Config\Services::request();
        $data =  new DbOk();
        $name = $input->getGet("id");
        $param = $input->getGet("param");
        return $data->serch_book_with_limted($name, $param);
    }
}
