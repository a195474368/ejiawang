<?php
Import::C('ucenter/ucenter');
class Ctl_Ucenter_Ask extends Ctl_Ucenter {
     public function items($page=1)
    {
         $pager['page'] = max(intval($page), 1);
         $pager['limit'] = $limit = 15;
         $filter = $pager = array();
         $filter['uid'] = $this->uid;
         if($items = K::M('ask/ask')->items($filter,$limit)){
            $pager['count'] = $count;
            $pager['pagebar'] = $this->mkpage($count, $limit, $page, $this->mklink('ask:items', array($cat_id, $type, '{page}')), array());
      }
        $this->pagedata['items'] = $items;
        $this->pagedata['pager'] = $pager;
        $this->seo->init('ask_items',array('cat_name'=>$this->pagedata['cat_info']['title']));
        $this->tmpl = 'ucenter/member/ask_items.html';
    }
}
?>
