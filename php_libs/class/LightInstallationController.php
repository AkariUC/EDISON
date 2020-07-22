<?php


class LightInstallationController extends BaseController {

    public function menu_member()
    {
        switch ($this->type) {
            case "modify":
                $this->light_modify();
                break;
            case "delete":
                $this->light_delete();
                break;
            default:
                $this->light_add();
        }
    }


    public function light_add()
    {
        $this->view->assign('name', $_SESSION[_MEMBER_AUTHINFO]['name']);
        $this->title = 'Add Light data';
        $this->file = 'light_add.tpl';
        $this->view_display();
    }



    public function light_modify()
    {
        $this->view->assign('name', $_SESSION[_MEMBER_AUTHINFO]['name']);
        $this->title = 'Add Light data';
        $this->file = 'light_add.tpl';
        $this->view_display();
    }


    public function light_delete()
    {
        $this->view->assign('name', $_SESSION[_MEMBER_AUTHINFO]['name']);
        $this->title = 'Add Light data';
        $this->file = 'light_add.tpl';
        $this->view_display();
    }
}
