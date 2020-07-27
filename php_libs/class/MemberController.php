<?php

class MemberController extends BaseController
{
    //----------------------------------------------------
    // 会員用メニュー
    //----------------------------------------------------
    public function run()
    {
        // セッション開始　認証に利用します。
        $this->auth = new Auth();
        $this->auth->set_authname(_MEMBER_AUTHINFO);
        $this->auth->set_sessname(_MEMBER_SESSNAME);
        $this->auth->start();

        if ($this->auth->check()) {
            // 認証済み
            $this->menu_member();
        } else {
            // 未認証
            $this->menu_guest();
        }
    }



    //----------------------------------------------------
    // 会員用メニュー
    //----------------------------------------------------
    public function menu_member()
    {
        switch ($this->type) {
            case "logout":
                $this->auth->logout();
                $this->screen_login();
                break;
            case "modify":
                $this->screen_modify();
                break;
            case "delete":
                $this->screen_delete();
                break;
            case "addLight":
                $this->screen_addLight();
                break;
            default:
                $this->screen_top();
        }
    }



    //----------------------------------------------------
    // ゲスト用メニュー
    //----------------------------------------------------
    public function menu_guest()
    {
        switch ($this->type) {
            case "regist":
                $this->screen_regist();
                break;
            case "authenticate":
                $this->do_authenticate();
                break;
            default:
                $this->screen_login();
        }
    }



    //----------------------------------------------------
    // ログイン画面表示
    //----------------------------------------------------
    public function screen_login()
    {
        $this->form->addElement('text', 'username',     ['size' => 15, 'maxlength' => 50], [ 'label' => 'mail address']);
        $this->form->addElement('password', 'password', ['size' => 15, 'maxlength' => 50], [ 'label' => 'password']);
        $this->form->addElement('submit', 'submit', ['value' =>'login']);
        $this->title = 'login';
        $this->next_type = 'authenticate';
        $this->file = "login.tpl";
        $this->view_display();
    }



    public function do_authenticate()
    {
        // データベースを操作します。
        $MemberModel = new MemberModel();
        $userdata = $MemberModel->get_authinfo($_POST['username']);
        if (!empty($userdata['password']) && $this->auth->check_password($_POST['password'], $userdata['password'])) {
            $this->auth->auth_ok($userdata);
            $this->screen_top();
        } else {
            $this->auth_error_mess = $this->auth->auth_no();
            $this->screen_login();
        }
    }



    //----------------------------------------------------
    // トップ画面
    //----------------------------------------------------
    public function screen_top()
    {
        // データベースを操作します。
        $LightinstallationModel = new LightinstallationModel();
        list($data, $count) = $LightinstallationModel->get_light_list($_SESSION[_MEMBER_AUTHINFO]['id']);
        list($data, $links) = $this->make_page_link($data);
    
        $this->view->assign('count', $count);
        $this->view->assign('data', $data);
        $this->view->assign('name', $_SESSION[_MEMBER_AUTHINFO]['name']);
        $this->title = 'Edison_Top';
        $this->file = 'member_top.tpl';
        $this->view_display();
    }



    //----------------------------------------------------
    // 会員情報画面
    //----------------------------------------------------
    public function screen_regist($auth = "")
    {
        $btn = "";
        $btn2 = "";
        $this->file = "memberinfo_form.tpl"; // デフォルト

        $this->make_form_controle();

        // フォームの妥当性検証
        if (!$this->form->validate()) {
            $this->action = "form";
        }

        if ($this->action == "form") {
            $this->title = 'Create account';
            $this->next_type = 'regist';
            $this->next_action = 'confirm';
            $btn = 'confirm';
        } else {
            if ($this->action == "confirm") {
                $this->title = 'Confirmation screen';
                $this->next_type = 'regist';
                $this->next_action = 'complete';
                $this->form->toggleFrozen(true);
                $btn = 'Sign Up';
                $btn2 = 'Back';
            } else {
                if ($this->action == "complete" && isset($_POST['submit2']) && $_POST['submit2'] == 'Back') {
                    $this->title = 'Create account';
                    $this->next_type = 'regist';
                    $this->next_action = 'confirm';
                    $btn = 'confirm';
                } else {
                    if ($this->action == "complete" && isset($_POST['submit']) && $_POST['submit'] == 'Sign Up') {
                        // データベースを操作します。
                        $PrememberModel = new PrememberModel();
                        // データベースを操作します。
                        $MemberModel = new MemberModel();
                        $userdata = $this->form->getValue();
                        if ($MemberModel->check_username($userdata) || $PrememberModel->check_username($userdata)) {
                            $this->title = 'Create account';
                            $this->message = "Email address is already registered now";
                            $this->next_type = 'regist';
                            $this->next_action = 'confirm';
                            $btn = 'confirm';
                        } else {
                            // システム側から利用するときに利用
                            if ($this->is_system && is_object($auth)) {
                                $userdata['password'] = $auth->get_hashed_password($userdata['password']);
                            } else {
                                $userdata['password'] = $this->auth->get_hashed_password($userdata['password']);
                            }
                            if ($this->is_system) {
                                $MemberModel->regist_member($userdata);
                                $this->title = 'Complete';
                                $this->message = "Completion of registration";
                            } else {
                                $userdata['link_pass'] = hash('sha256', uniqid(rand(), 1));
                                $PrememberModel->regist_premember($userdata);
                                $this->mail_to_premember($userdata);
                                $this->title = 'Send mail...';
                                $this->message = "登録されたメールアドレスへ確認のためのメールを送信しました。<br>";
                                $this->message .= "メール本文に記載されているURLにアクセスして<br>登録を完了してください。<br>";
                            }
                            $this->file = "message.tpl";
                        }
                    }
                }
            }
        }
        $this->form->addElement('submit', 'submit', ['value' =>$btn]);
        $this->form->addElement('submit', 'submit2', ['value' =>$btn2]);
        $this->form->addElement('reset', 'reset', ['value' =>'cansel']);
        $this->view_display();
    }



    //----------------------------------------------------
    // 会員情報の修正
    //----------------------------------------------------
    public function screen_modify($auth = "")
    {
        $btn = "";
        $btn2 = "";
        $this->file = "memberinfo_form.tpl";

        // データベースを操作します。
        $MemberModel = new MemberModel();
        $PrememberModel = new PrememberModel();
        if ($this->is_system && $this->action == "form") {
            $_SESSION[_MEMBER_AUTHINFO] = $MemberModel->get_member_data_id($_GET['id']);
        }

        $this->form->addDataSource(new HTML_QuickForm2_DataSource_Array(
            [
                'username' => $_SESSION[_MEMBER_AUTHINFO]['username'],
                'name' => $_SESSION[_MEMBER_AUTHINFO]['name'],
            ]
        ));

        $this->make_form_controle();

        // フォームの妥当性検証
        if (!$this->form->validate()) {
            $this->action = "form";
        }

        if ($this->action == "form") {
            $this->title = 'Correct account';
            $this->next_type = 'modify';
            $this->next_action = 'confirm';
            $btn = 'confirm';
        } else {
            if ($this->action == "confirm") {
                $this->title = 'Confirmation screen';
                $this->next_type = 'modify';
                $this->next_action = 'complete';
                $this->form->toggleFrozen(true);
                $btn = 'Correct';
                $btn2 = 'back';
            } else {
                if ($this->action == "complete" && isset($_POST['submit2']) && $_POST['submit2'] == 'back') {
                    $this->title = 'Correct account';
                    $this->next_type = 'modify';
                    $this->next_action = 'confirm';
                    $btn = 'confirm';
                } else {
                    if ($this->action == "complete" && isset($_POST['submit']) && $_POST['submit'] == 'Correct') {
                        $userdata = $this->form->getValue();
                        if (($MemberModel->check_username($userdata) || $PrememberModel->check_username($userdata))
                            && ($_SESSION[_MEMBER_AUTHINFO]['username'] != $userdata['username'])
                        ) {
                            $this->next_type = 'modify';
                            $this->next_action = 'confirm';
                            $this->title = 'Correct account';
                            $this->message = "Email address is already registered now";
                            $btn = 'confirm';
                        } else {
                            $this->title = 'Complete';
                            $userdata['id'] = $_SESSION[_MEMBER_AUTHINFO]['id'];
                            // システム側から利用するときに利用
                            if ($this->is_system && is_object($auth)) {
                                $userdata['password'] = $auth->get_hashed_password($userdata['password']);
                            } else {
                                $userdata['password'] = $this->auth->get_hashed_password($userdata['password']);
                            }
                            $this->message = "会員情報を修正しました。";
                            $this->file = "message.tpl";
                            if ($this->is_system) {
                                unset($_SESSION[_MEMBER_AUTHINFO]);
                            } else {
                                $_SESSION[_MEMBER_AUTHINFO] = $MemberModel->get_member_data_id($_SESSION[_MEMBER_AUTHINFO]['id']);
                            }
                        }
                    }
                }
            }
        }

        $this->form->addElement('submit', 'submit', ['value' =>$btn]);
        $this->form->addElement('submit', 'submit2', ['value' =>$btn2]);
        $this->form->addElement('reset', 'reset', ['value' =>'cansel']);
        $this->view_display();
    }



    //----------------------------------------------------
    // 電球情報の追加
    //----------------------------------------------------
    public function screen_addLight($auth = "")
    {
        $btn = "";
        $btn2 = "";
        $this->file = "light_add.tpl";

        $date_defaults = [
            'Y' => date('Y'),
            'M' => date('M'),
            'd' => date('d'),
        ];

        $this->form->addDataSource(new HTML_QuickForm2_DataSource_Array(['light_date' => $date_defaults]));
        $this->make_form_controle_light();

        // データベースを操作します。
        $MemberModel = new MemberModel();
        $LightInstallationModel = new LightInstallationModel();
        if ($this->is_system && $this->action == "form") {
            $_SESSION[_MEMBER_AUTHINFO] = $MemberModel->get_member_data_id($_GET['id']);
        }

        if (!$this->form->validate()) {
            $this->action = "form";
        }

        $this->title = 'Add light data';
        $this->next_type = 'regist';
        $this->next_action = 'confirm';

        $this->form->addElement('submit', 'submit', ['value' =>$btn]);
        $this->form->addElement('submit', 'submit2', ['value' =>$btn2]);
        $this->form->addElement('reset', 'reset', ['value' =>'cansel']);
        $this->view_display();

        // if ($this->action == "form") {
        //     $this->title = 'Add light data';
        //     $this->next_type = 'regist';
        //     $this->next_action = 'confirm';
        //     $btn = 'confirm';
        // } else {
        //     if ($this->action == "confirm") {
        //         $this->title = 'Confirmation screen';
        //         $this->next_type = 'regist';
        //         $this->next_action = 'complete';
        //         $this->form->toggleFrozen(true);
        //         $btn = 'OK';
        //         $btn2 = 'Back';
        //     } else {
        //         if ($this->action == "complete" && isset($_POST['submit2']) && $_POST['submit2'] == 'Back') {
        //             $this->title = 'Add light data';
        //             $this->next_type = 'regist';
        //             $this->next_action = 'confirm';
        //             $btn = 'confirm';
        //         } else {
        //             if ($this->action == "complete" && isset($_POST['submit']) && $_POST['submit'] == 'OK') {
        //                 // // データベースを操作します。
        //                 // $LightInstallationModel = new LightInstallationModel();
        //                 // $MemberModel = new MemberModel();
        //                 // $lightdata = $this->form->getValue();
        //                 // // $light_place = $_POST['light_place'];
        //                 // // $light_type  = $_POST['light_type'];
        //                 // // $light_date  = $_POST['light_date'];
        //                 // // $light_use   = $_POST['light_use'];
        //                 // // $lightdata   = array($light_place, $light_type, $light_date, $light_use);
        //                 // echo($lightdata);
        //                 // if (isset($_GET["id"])) {
        //                 //     $this->form->add_light($lightdata, $_GET['id']);
        //                 // }
        //                 $this->title = 'Complete';
        //                 $this->message = "Completion of registration";
        //                 $this->file = "message.tpl";
                        
        //             }
        //         }
        //     }
        // }
        // $this->form->addElement('submit', 'submit', ['value' =>$btn]);
        // $this->form->addElement('submit', 'submit2', ['value' =>$btn2]);
        // $this->form->addElement('reset', 'reset', ['value' =>'cansel']);
        // $this->view_display();
    }



    //----------------------------------------------------
    // 削除画面
    //----------------------------------------------------
    public function screen_delete()
    {
        // データベースを操作します。
        $MemberModel = new MemberModel();
        if ($this->action == "confirm") {
            if ($this->is_system) {
                $_SESSION[_MEMBER_AUTHINFO] = $MemberModel->get_member_data_id($_GET['id']);
                $this->message = " delete をクリックすると　";
                $this->message .= htmlspecialchars($_SESSION[_MEMBER_AUTHINFO]['name'], ENT_QUOTES);
                $this->message .= "さん　の会員情報を削除します。";
                $this->form->addElement('submit', 'submit', ['value' => 'Delete']);
            } else {
                $this->message = " delete をクリックすると会員情報を削除して退会します。";
                $this->form->addElement('submit', 'submit', ['value' => 'Delete']);
            }
            $this->next_type = 'delete';
            $this->next_action = 'complete';
            $this->title = 'Delete';
            $this->file = 'delete_form.tpl';
        } else {
            if ($this->action == "complete") {
                $MemberModel->delete_member($_SESSION[_MEMBER_AUTHINFO]['id']);
                if ($this->is_system) {
                    unset($_SESSION[_MEMBER_AUTHINFO]);
                } else {
                    $this->auth->logout();
                }
                $this->message = "会員情報を削除しました。";
                $this->title = 'Delete';
                $this->file = 'message.tpl';
            }
        }
        $this->view_display();
    }



    //----------------------------------------------------
    // メール関係
    //----------------------------------------------------
    //
    // 仮登録者へメール送信
    //
    public function mail_to_premember($userdata)
    {

        $path = pathinfo(_SCRIPT_NAME)['dirname'];

        $to = $userdata['username'];
        $subject = "会員登録の確認";
        $message = <<<EOM
    {$userdata['username']}様

    会員登録ありがとうございます。
    下のリンクにアクセスして会員登録を完了してください。

    http://{$_SERVER['SERVER_NAME']}{$path}/premember.php?username={$userdata['username']}&link_pass={$userdata['link_pass']}
    このメールに覚えがない場合はメールを削除してください。


    --
    会員システム

EOM;
        $add_header = "";

        //$add_header .= "From: xxxx@xxxxxxx\nCc: xxxx@xxxxxxx";

        mb_send_mail($to, $subject, $message, $add_header);

    }
    
}

