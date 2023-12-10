<?php
namespace App\Controllers;

use Myth\Auth\Models\UserModel;

class Admin extends BaseController
{
    protected $db, $builder;
    public function __construct(){
        $this->db      = \Config\Database::connect();
        $this->builder = $this->db->table('users');
    }
    public function index(){
        $this->builder->select('users.id as userid, username, email, name');
        $this->builder->join('auth_groups_users', 'auth_groups_users.user_id = users.id');
        $this->builder->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id');
        
        $query = $this->builder->get();
        $data =[
            'title' => 'SGC - Admin Page',
            'users' => $query->getResult()
        ];
        return view('admins/index', $data);
    }
    public function detail($id = 0){
        $this->builder->select('users.id as userid, username, email, name, fullname, user_image');
        $this->builder->join('auth_groups_users', 'auth_groups_users.user_id = users.id');
        $this->builder->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id');
        $this->builder->where('users.id', $id);
        $query = $this->builder->get();
        $data =[
            'title' => 'SGC - Admin Page',
            'user' => $query->getRow()
        ];

        if(empty($data['user'])){
            return redirect()->to('/admin');
        }


        return view('admins/detail', $data);
    }

    public function tambahUser()
    {
        $data = [
            'title' => 'Mendaftarkan User User'
        ];
        return view('admins/addUsers', $data);
    }

    public function simpanUser()
    {
        $usermyth = new UserModel();
        $usermyth->withGroup($this->request->getVar('role'))->save([
            'fullname' => $this->request->getVar('fullname'),
            'username' => $this->request->getVar('username'),
            'email' => $this->request->getVar('email'),
            'password' => Password::hash('password'),
            'active' => 1
        ]);
        $data = [
            'title' => 'Mendaftarkan User User'
        ];
        return view('admins/addUsers', $data);
    }

    public function ubahAkses($id)
    {
        // Load the necessary models or services
        $userModel = new \Myth\Auth\Models\UserModel();

        // Retrieve the list of users and groups
        $data['users'] = $userModel->find($id);; // Ini adalah contoh, sesuaikan dengan kebutuhan Anda

        // Load the view and pass the data
        return view('admins/ubahAkses', $data);
    }



    public function changeUserGroup($id, $newGroupId)
    {
        // Load the authentication library
        $auth = service('authentication');

        // Check if the user is logged in as an admin or has the necessary permission
        if ($auth->isLoggedIn() && $auth->inGroup('admin')) {
            // Load the user model
            $userModel = new \Myth\Auth\Models\UserModel();

            // Retrieve the user by user ID
            $user = $userModel->find($id);

            // Check if the user exists
            if ($user) {
                // Change the user's group
                $auth->addUserToGroup($user->id, $newGroupId);

                // Optionally, you can remove the user from the old group
                // $auth->removeUserFromGroup($user->id, $oldGroupId);

                // Redirect or return a success message
                return redirect()->to('dashboard')->with('success', 'User group updated successfully');
            } else {
                // User not found, redirect or return an error message
                return redirect()->back()->with('error', 'User not found');
            }
        } else {
            // Redirect or return an error message for unauthorized access
            return redirect()->back()->with('error', 'Unauthorized access');
        }
    }

}